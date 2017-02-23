<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'modo_pago', 'monto', 'tipo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'additional';
}
