<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedor_id', 'status', 'fecha'];

    protected $table = 'purchases';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function provider()
    {
        return $this->belongsTo('App\Provider', 'proveedor_id');
    }

    public function ingredient()
    {
        return $this->belongsToMany('App\Ingredient', 'purchases_has_ingredients', 'compra_id', 'ingrediente_id')->withPivot('cantidad', 'precio'); 
    }

    public function liqueur()
    {
        return $this->belongsToMany('App\Liqueur', 'purchases_has_liqueurs', 'compra_id', 'licor_id')->withPivot('cantidad', 'precio'); 
    }

    public function drink()
    {
        return $this->belongsToMany('App\Drink', 'purchases_has_drinks', 'compra_id', 'bebida_id')->withPivot('cantidad', 'precio'); 
    }
}
