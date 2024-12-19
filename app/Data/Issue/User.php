<?php

namespace App\Data\Issue;

class User
{
    public string $login;
    public int $id;
    public string $node_id;
    public string $avatar_url;
    public string $html_url;

    public function __construct(array $data)
    {
        $this->login = $data['login'];
        $this->id = $data['id'];
        $this->node_id = $data['node_id'];
        $this->avatar_url = $data['avatar_url'];
        $this->html_url = $data['html_url'];
    }
}
