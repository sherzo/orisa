<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plates_has_liqueur extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'plato_id', 'licor_id', 'cantidad_licor', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'plates_has_liqueurs';
}
