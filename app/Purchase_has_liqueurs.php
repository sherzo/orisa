<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_has_liqueurs extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_liqueur', 'id_purchase', 'cantidad',  
    ];

    protected $table = 'purchase_has_liqueurs';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    
    
}
