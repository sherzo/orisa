<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liqueur extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $table = 'liqueurs';
    protected $fillable = ['type_id', 'id_unit', 'licor', 'stock', 'caracteristica', 'stock_min'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function providers()
    {
        return $this->belongsToMany('App\Provider', 'providers_has_liqueurs', 'licor_id', 'proveedor_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Liqueurs_type', 'type_id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit', 'id');
    }

    public function purchase()
    {
        return $this->belongsToMany('App\Purchase', 'purchases_has_liqueurs', 'compra_id', 'licor_id')->withPivot('cantidad'); 
    }

}
