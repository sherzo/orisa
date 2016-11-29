<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $fillable = ['empleado_id', 'asistencia_id', 'hora_entrada', 'hora_salida', 'motivo', 'justificacion'];

    protected $table = 'assistances';
    public $timestamps = false;

    public function attendays()
    {
    	return $this->belongsTo('App\Day_attendance', 'asistencia_id');
    }

    public function personal()
    {
    	return $this->belongsTo('App\Employee', 'empleado_id');
    }
}
