<?php

namespace App\Data\Issue;

class Issue
{
    public string $url;
    public string $repository_url;
    public string $html_url;
    public int $id;
    public string $node_id;
    public int $number;
    public string $title;
    public User $user;
    public array $labels; // Array of Label objects
    public string $state;
    public bool $locked;
    public ?User $assignee; // Nullable, as it can be null
    public array $assignees; // Array of User objects
    public ?Milestone $milestone; // Nullable, as it can be null
    public int $comments;
    public string $created_at;
    public string $updated_at;
    public ?string $closed_at; // Nullable
    public string $author_association;
    public ?string $active_lock_reason; // Nullable
    public Repository $repository;
    public ?string $body; // Nullable
    public Reactions $reactions;
    public string $timeline_url;
    public ?string $performed_via_github_app; // Nullable
    public ?string $state_reason; // Nullable

    public function __construct(array $data)
    {
        $this->url = $data['url'];
        $this->repository_url = $data['repository_url'];
        $this->html_url = $data['html_url'];
        $this->id = $data['id'];
        $this->node_id = $data['node_id'];
        $this->number = $data['number'];
        $this->title = $data['title'];
        $this->user = new User($data['user']);
        $this->labels = array_map(fn($label) => new Label($label), $data['labels']);
        $this->state = $data['state'];
        $this->locked = $data['locked'];
        $this->assignee = isset($data['assignee']) ? new User($data['assignee']) : null;
        $this->assignees = array_map(fn($assignee) => new User($assignee), $data['assignees']);
        $this->milestone = isset($data['milestone']) ? new Milestone($data['milestone']) : null;
        $this->comments = $data['comments'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->closed_at = $data['closed_at'] ?? null;
        $this->author_association = $data['author_association'];
        $this->active_lock_reason = $data['active_lock_reason'] ?? null;
        $this->repository = new Repository($data['repository']);
        $this->body = $data['body'] ?? null;
        $this->reactions = new Reactions($data['reactions']);
        $this->timeline_url = $data['timeline_url'];
        $this->performed_via_github_app = $data['performed_via_github_app'] ?? null;
        $this->state_reason = $data['state_reason'] ?? null;
    }
}
