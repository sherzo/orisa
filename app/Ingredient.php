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

    public function providers()
    {
        return $this->belongsToMany('App\Provider');
    }

    public function tipo()
    {
        return $this->belongsToMany('App\Ingredients_type', 'Ingredients', 'id', 'id_type');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit', 'id');
    }


    protected $table = 'ingredients';

    public function scopeAgregar($query, $nombre)
    {
        if($nombre != "")
        {
            $query->where('nombre_ingrediente', $nombre);
        }
    }


    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('nombre_ingrediente', "LIKE", "%$name%"); 
        }
    }
}
