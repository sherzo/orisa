<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plates_has_ingredient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'plato_id', 'ingrediente_id', 'cantidad_ingrediente', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'plates_has_ingredients';
}
