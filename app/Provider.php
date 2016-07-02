<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'rif', 'razon_social', 'direccion', 'telefono', 'correo', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredients_providers', 'id_provider', 'id_ingredient');
    }

    public function liqueurs()
    {
        return $this->belongsToMany('App\Liqueur', 'liqueurs_providers', 'id_provider', 'id_liqueur');
    }

    protected $table = 'providers';


    public function scopeRif($query, $rif)
    {
       $query->where('rif', $rif);

    }
}
