<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ingredient_name', 'id_unit', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    protected $table = 'ingredients';
}
