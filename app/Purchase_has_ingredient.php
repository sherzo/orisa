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
        'ingrediente_id', 'compra_id', 'cantidad',  
    ];

    protected $table = 'purchases_has_ingredients';
    
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    public function ingredient()
    {
        return $this->belongsTo('App\Ingredient', 'ingrediente_id');
    }

}
