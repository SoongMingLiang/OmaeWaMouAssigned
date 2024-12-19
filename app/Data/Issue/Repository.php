<?php

namespace App\Data\Issue;

class Repository
{
    public int $id;
    public string $node_id;
    public string $name;
    public string $full_name;
    public bool $private;
    public User $owner;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->node_id = $data['node_id'];
        $this->name = $data['name'];
        $this->full_name = $data['full_name'];
        $this->private = $data['private'];
        $this->owner = new User($data['owner']);
    }
}
