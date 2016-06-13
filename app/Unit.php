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
        'unist_name', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    protected $table = 'units';
}
