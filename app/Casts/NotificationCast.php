<?php

namespace App\Casts;

use App\Data\Notification\Notification;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class NotificationCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return new Notification(json_decode($value, true));
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value);
    }
}
