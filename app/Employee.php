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

    public function data() 
    {
        return $this->hasOne('App\Data_employee', 'employee_id', 'id');
    } 

    public function position()
    {
        return $this->belognsToMany('App\Position', 'employee_has_positions')
            ->withPivot('employee_id');
    }

    public function shift()
    {
        return $this->belognsToMany('App\Shift', 'employee_has_shifts')
            ->withPivot('employee_id', 'fecha_inicio', 'fecha_culminacion');
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('nombres_em', "LIKE", "%$name%");  # code...
        }
    }

    public function scopeSearch($query, $dni)
    {
        #
    }
}