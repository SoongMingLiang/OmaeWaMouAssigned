<?php

namespace App\Data\Issue;

class Milestone
{
    public string $url;
    public string $html_url;
    public string $labels_url;
    public int $id;
    public string $node_id;
    public int $number;
    public string $state;
    public string $title;
    public ?string $description; // Nullable as it can be null
    public User $creator; // The creator of the milestone
    public int $open_issues;
    public int $closed_issues;
    public string $created_at;
    public string $updated_at;
    public ?string $closed_at; // Nullable as it can be null
    public ?string $due_on; // Nullable as it can be null

    public function __construct(array $data)
    {
        $this->url = $data['url'];
        $this->html_url = $data['html_url'];
        $this->labels_url = $data['labels_url'];
        $this->id = $data['id'];
        $this->node_id = $data['node_id'];
        $this->number = $data['number'];
        $this->state = $data['state'];
        $this->title = $data['title'];
        $this->description = $data['description'] ?? null;
        $this->creator = new User($data['creator']);
        $this->open_issues = $data['open_issues'];
        $this->closed_issues = $data['closed_issues'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->closed_at = $data['closed_at'] ?? null;
        $this->due_on = $data['due_on'] ?? null;
    }
}
