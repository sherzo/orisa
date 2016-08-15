<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liqueurs_provider extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'licor_id', 'proveedor_id', 
    ];

    protected $table = 'providers_has_liqueurs';  

    public $timestamps = false;

}
