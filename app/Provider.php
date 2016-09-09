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
    
    protected $table = 'providers';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'providers_has_ingredients', 'proveedor_id', 'ingrediente_id');
    }

    public function liqueurs()
    {
        return $this->belongsToMany('App\Liqueur', 'providers_has_liqueurs', 'proveedor_id', 'licor_id');
    }

    


    public function scopeRif($query, $rif)
    {
       $query->where('rif', $rif);
    }
}
