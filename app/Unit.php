<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'unist_name', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id_user',
    ];


    protected $table = 'units';
}
