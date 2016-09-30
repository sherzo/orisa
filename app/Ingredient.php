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

    protected $table = 'ingredients';
    protected $fillable = ['id_type', 'id_unit', 'ingrediente', 'caracteristica'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function providers()
    {
        return $this->belongsToMany('App\Provider', 'providers_has_ingredients', 'ingrediente_id', 'proveedor_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Ingredients_type', 'id_type');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit');
    }

    public function purchase()
    {
        return $this->belongsToMany('App\Purchase', 'purchases_has_ingredients', 'compra_id', 'ingrediente_id')->withPivot('cantidad');
    }
}
