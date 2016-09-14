<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plates_has_sauce extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'salsa_id', 'plato_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $table = 'plates_has_sauces';
}
