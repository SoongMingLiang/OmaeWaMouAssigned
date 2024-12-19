<?php

namespace App\Data\Issue;

class Label
{
    public int $id;
    public string $node_id;
    public string $url;
    public string $name;
    public string $color;
    public bool $default;
    public ?string $description; // Nullable

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->node_id = $data['node_id'];
        $this->url = $data['url'];
        $this->name = $data['name'];
        $this->color = $data['color'];
        $this->default = $data['default'];
        $this->description = $data['description'] ?? null;
    }
}
