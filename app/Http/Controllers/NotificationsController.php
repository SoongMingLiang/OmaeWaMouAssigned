<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Data\Notification\Notification;
use Inertia\Inertia;

class NotificationsController extends Controller
{
    public function index(Request $request)
    {
        $notifications = [];
        $token = env('GITHUB_TOKEN');

        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => "Bearer $token",
            'X-GitHub-Api-Version' => '2022-11-28',
        ])->get('https://api.github.com/notifications');

        if ($response->successful()) {
            $notificationsData = $response->json();

            $notifications = array_map(function ($data) {
                return new Notification($data);
            }, $notificationsData);

            return Inertia::render('Dashboard', [
                'notifications' => $notifications,
                'error' => null,
            ]);
        }

        return Inertia::render('Dashboard', [
            'notifications' => $notifications,
            'error' => 'Failed to fetch notifications',
        ]);
    }
}
