<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeekendSchool extends Model
{
    protected $fillable = [
        'name',
        'where',
        'when',
        'description',
        'term_file',
        'classrooms_file',
    ];
}
