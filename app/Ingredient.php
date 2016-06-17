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
        'nombre_ingrediente', 'id_type', 'caracteristica', 'id_unit',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    protected $table = 'ingredients';

    public function scopeAgregar($query, $nombre)
    {
       $query->where('nombre_ingrediente', $nombre);
    }
}
