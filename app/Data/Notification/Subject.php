<?php

namespace App\Data\Notification;

class Subject
{
    public string $title;
    public ?string $url;
    public ?string $latest_comment_url;
    public string $type;

    public function __construct(array $data)
    {
        $this->title = $data['title'];
        $this->url = $data['url'];
        $this->latest_comment_url = $data['latest_comment_url'];
        $this->type = $data['type'];
    }
}
