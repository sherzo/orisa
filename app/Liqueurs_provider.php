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
        'id_liqueur', 'id_provider', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    protected $table = 'liqueurs_providers';    
}
