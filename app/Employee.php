<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'employees';

    protected $fillable = [
        'dni', 'nombres', 'apellidos', 'fecha_nacimiento', 'estado_civil', 'direccion', 'operadora', 'telefono_em', 'genero'
    ];

    public function info() 
    {
        return $this->hasOne('App\Data_employee', 'employee_id', 'id');
    } 

    public function hoem() #Holiday
    {
        return $this->hasMany('App\Holiday', 'empleado_id', 'id');
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('nombres', "LIKE", "%$name%");  # code...
        }
    }

}