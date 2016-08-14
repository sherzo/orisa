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

    public function data() 
    {
        return $this->hasOne('App\Data_employee', 'employee_id', 'id');
    } 

    public function position()
    {
        return $this->belongsToMany('App\Position', 'employee_has_positions')
            ->withPivot('employee_id')
            ->withTimestamps();
    }

    public function shift()
    {
        return $this->belongsToMany('App\Shift', 'employee_has_shifts')
            ->withPivot('employee_id', 'fecha_inicio', 'fecha_culminacion');
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where('nombres', "LIKE", "%$name%");  # code...
        }
    }

}