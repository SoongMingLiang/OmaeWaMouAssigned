<?php

namespace App\Data\Issue;

class Reactions
{
    public string $url;
    public int $total_count;
    public int $plus_one;
    public int $minus_one;
    public int $laugh;
    public int $hooray;
    public int $confused;
    public int $heart;
    public int $rocket;
    public int $eyes;

    public function __construct(array $data)
    {
        $this->url = $data['url'];
        $this->total_count = $data['total_count'];
        $this->plus_one = $data['+1'];
        $this->minus_one = $data['-1'];
        $this->laugh = $data['laugh'];
        $this->hooray = $data['hooray'];
        $this->confused = $data['confused'];
        $this->heart = $data['heart'];
        $this->rocket = $data['rocket'];
        $this->eyes = $data['eyes'];
    }
}
