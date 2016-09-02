<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $table = 'turns';
    
    protected $fillable = [
        'turno', 'hora_entrada', 'hora_salida'
    ];


}
