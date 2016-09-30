<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */ 

    protected $table = 'drinks';
    protected $fillable = ['id_unit', 'bebida', 'precio', 'stock', 'caracteristica','stock_min'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function providers()
    {
        return $this->belongsToMany('App\Provider', 'providers_has_drinks', 'bebida_id', 'proveedor_id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit', 'id');
    }
    public function purchase()
    {
        return $this->belongsToMany('App\Purchase', 'purchases_has_drinks', 'compra_id', 'bebida_id')->withPivot('cantidad');
    }
}
