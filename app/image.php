<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    
    protected $table = 'images';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
