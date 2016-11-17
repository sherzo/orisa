<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    
    protected $fillable = [
        'codigo', 'nombre', 'salario'
    ];

    public function em()
    {
        return $this->belongsTo('App\Employee', 'id');
    }

}