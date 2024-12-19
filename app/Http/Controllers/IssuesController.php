<?php

namespace App\Http\Controllers;

use App\Data\Issue\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $issues = [];
        $token = env('GITHUB_TOKEN');

        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => "Bearer $token",
            'X-GitHub-Api-Version' => '2022-11-28',
        ])->get('https://api.github.com/issues');

        if ($response->successful()) {
            $issuesData = $response->json();

            $issues = array_map(function ($data) {
                return new Issue($data);
            }, $issuesData);

            // Filter out issues where only issues with 
            $issues = array_filter($issues, function ($issue) {
                return count($issue->labels) === 1 && $issue->labels[0]->name === 'P0'; // Hardcoded to P0
            });

            $issues = array_values($issues);

            return Inertia::render('Tickets', [
                'issues' => $issues,
                'error' => null,
            ]);
        }

        return Inertia::render('Tickets', [
            'issues' => $issues,
            'error' => 'Failed to fetch notifications',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
