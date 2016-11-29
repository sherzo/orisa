<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cestaticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['unidad_tributaria', 'cantidad'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'cestaticket';
}
