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
        'dni', 'nombres_em', 'apellidos_em', 'fecha_nacimiento', 'estado_civil', 'direccion_em', 'pais_em', 'estado_em', 'ciudad_em', 'telefono_em', 'genero'
    ];

    public function data_employee() 
    {
        return $this->hasOne('App\Data_employee', 'id_employee', 'id');
    } 

    public function employee_has_positions()
    {
        return $this->hasOne('App\Employee_has_position', 'id_employee', 'id');
    }
    public function employee_has_shifts()
    {
        $this->hasMany('App\Employee_has_shift', 'id_employee', 'id');
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('nombres_em', "LIKE", "%$name%");  # code...
        }
    }

}