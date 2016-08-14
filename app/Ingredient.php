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
        'id_type', 'id_unit','ingrediente', 'caracteristica', 
    ];
    
    protected $table = 'ingredients';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function providers()
    {
        return $this->belongsToMany('App\Provider');
    }

    public function type()
    {
        return $this->belongsTo('App\Ingredients_type', 'id_type');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit');
    }


    

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
