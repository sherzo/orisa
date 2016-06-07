<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name_position', 'salary_month', 'time_ordinary'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */ 
}