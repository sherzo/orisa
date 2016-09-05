<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $fillable = [
     'empleado_id', 'asistencia_id', 'hora_entrada', 'hora_salida', 'motivo', 'justificacion' 
    ];

    protected $table = 'assistances';

    public function attendays()
    {
    	return $this->hasOne('App\Day_attendance', 'id', 'asistencia_id');
    }

    public function personal()
    {
    	return $this->belongsTo('App\Employee', 'empleado_id');
    }
}
