<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beverages_has_liqueur extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'beverage_id', 'liqueur_id', 'cantidad_licor', 'unit_id',  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'beverages_has_liqueurs';

}
