<?php

namespace App\Casts;

use App\Data\Issue\Issue;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class IssueCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return new Issue(json_decode($value, true));
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value);
    }
}
