<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promise extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image_path',
    ];
}
