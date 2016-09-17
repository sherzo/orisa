<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinks_has_ingredient extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'bebida_id', 'ingrediente_id', 'cantidad_ingrediente', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'drinks_has_ingredients';
}
