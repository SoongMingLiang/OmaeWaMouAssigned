<?php

namespace App\Models;

use App\Casts\IssueCast;
use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    protected $table = 'issues';

    protected $fillable = [
        'data',
    ];

    protected $casts = [
        'data' => IssueCast::class,
    ];
}
