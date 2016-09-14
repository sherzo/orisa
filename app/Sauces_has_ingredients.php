<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sauces_has_ingredients extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sauce_id', 'ingredient_id', 'cantidad_ingrediente', 'unidad_id',
    ];

    protected $table = 'sauces_has_ingredients';
    
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function ingredient()
    {
        return $this->belongsTo('App\Ingredient', 'ingredient_id');
    }
}
