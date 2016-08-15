<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients_provider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ingrediente_id', 'proveedor_id', 
    ];
    protected $table = 'providers_has_ingredients';

    public $timestamps = false;
    
}
