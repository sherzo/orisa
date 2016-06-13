<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients_type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_ingrediente', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    protected $table = 'ingredients_types';
}
