<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    protected $table = 'sauces';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
     'salsa',
    ];

    public function Ingredientes()
    {
        return $this->belongsToMany('App\Ingredient', 'sauces_has_ingredients')->withPivot( 'cantidad_ingrediente', 'unit_id');
    }

    public function UnidadesIngredientes()
    {
       return $this->belongsToMany('App\Unit', 'sauces_has_ingredients');
    }
}
