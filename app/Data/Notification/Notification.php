<?php

namespace App\Data\Notification;

class Notification
{
    public string $id;
    public bool $unread;
    public string $reason;
    public string $updated_at;
    public ?string $last_read_at;
    public Subject $subject;
    public Repository $repository;
    public string $url;
    public string $subscription_url;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->unread = $data['unread'];
        $this->reason = $data['reason'];
        $this->updated_at = $data['updated_at'];
        $this->last_read_at = $data['last_read_at'] ?? null;
        $this->subject = new Subject($data['subject']);
        $this->repository = new Repository($data['repository']);
        $this->url = $data['url'];
        $this->subscription_url = $data['subscription_url'];
    }
}
