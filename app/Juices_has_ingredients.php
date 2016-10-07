<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juices_has_ingredients extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'juice_id', 'ingredient_id', 'cantidad_ingrediente', 'unit_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'juices_has_ingredients';
}
