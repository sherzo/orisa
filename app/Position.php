<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    
    protected $fillable = [
        'codigo_cgo', 'nombre_cgo', 'salario_cgo'
    ];

    public function Employee_has_position() 
    {
        return $this->hasMany('App\Employee_has_position', 'id_position', 'id');
    } 

    public function scopeName($query, $name)
    {
    	if (trim($name) != "") {
    		$query->where('nombre_cgo', "LIKE", "%$name%");	# code...
    	}
    }
 
}