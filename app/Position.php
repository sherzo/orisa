<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    
    protected $fillable = [
        'codigo', 'nombre', 'salario'
    ];

    public function scopeName($query, $name)
    {
    	if (trim($name) != "") {
    		$query->where('nombre', "LIKE", "%$name%");	# code...
    	}
    }
 
}