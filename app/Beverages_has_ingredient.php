<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beverages_has_ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'beverage_id', 'ingredient_id', 'cantidad_ingrediente', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'beverages_has_ingredients';

}
