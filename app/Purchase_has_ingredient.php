<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_has_ingredient extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_ingredient', 'id_purchase', 'cantidad',  
    ];

    protected $table = 'purchase_has_ingredients';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function Ingredient()
    {
        return $this->belongsTo('App\Ingredient', 'id_ingredient');
    }

}
