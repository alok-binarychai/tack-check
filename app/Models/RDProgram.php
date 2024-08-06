<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RDProgram extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'card_img',
        'detail_page_img_1',
        'detail_page_img_2',
        'description',
    ];
}
