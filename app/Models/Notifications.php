<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Casts\NotificationCast;

class Notifications extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'data',
    ];

    protected $casts = [
        'data' => NotificationCast::class,
    ];
}
