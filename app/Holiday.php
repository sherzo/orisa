<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'employees_has_days';

    protected $fillable = ['empleado_id', 'dia_id', 'planificacion_id'];

    public $timestamps = false;

    public function ems()
    {
    	return $this->belongsTo('App\Employee', 'empleado_id');	
    }

    public function day()
    {
    	return $this->belongsTo('App\Days_planning', 'dia_id');
    }

    public function planning()
    {
       return $this->belongsTo('App\Planning', 'planificacion_id');
    }
}
