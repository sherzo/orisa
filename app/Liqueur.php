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
    protected $fillable = [
        'nombre_licor', 'id_type', 'caracteristica', 'id_unit', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    protected $table = 'liqueurs';
}
