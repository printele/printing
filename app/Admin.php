<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Authenticatable
{
    //
    protected $table = 'admins';


    /**
     * These attributes are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * These attributes are excluded from the JSON form.
     * @var array
     */
    protected $hidden = [
        'password'
    ];


}
