<?php

namespace App\Data\Notification;

class Repository
{
    public int $id;
    public string $node_id;
    public string $name;
    public string $full_name;
    public bool $private;
    public Owner $owner;
    public string $html_url;
    public ?string $description;
    public bool $fork;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->node_id = $data['node_id'];
        $this->name = $data['name'];
        $this->full_name = $data['full_name'];
        $this->private = $data['private'];
        $this->owner = new Owner($data['owner']);
        $this->html_url = $data['html_url'];
        $this->description = $data['description'] ?? null;
        $this->fork = $data['fork'];
    }
}
