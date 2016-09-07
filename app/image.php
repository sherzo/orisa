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
        'id_type', 'id_unit','ingrediente', 'caracteristica', 
    ];
    
    protected $table = 'images';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
