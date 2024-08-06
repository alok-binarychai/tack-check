<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyDate extends Model
{
    protected $fillable = [
        'day',
        'timing',
        'school_name',
        'sort',
    ];
}
