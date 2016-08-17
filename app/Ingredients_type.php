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

    protected $table = 'ingredients_types';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function ingrediente()
    {
        return $this->hasMany('App\Ingredients', 'id_type', 'id');
    }
}
