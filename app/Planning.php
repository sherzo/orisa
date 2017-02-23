<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
	protected $table = 'plannings';

	protected $fillable = ['fecha_inicio', 'fecha_final', 'fechas', 'estatus'];

	public function dias() 
	{
		return $this->hasMany('App\Days_planning', 'planificacion_id', 'id');
	}

	public function pldays() 
	{
		return $this->hasMany('App\Holiday', 'planificacion_id', 'id');
	}

	public function getFullDatesAttribute()
	{
		return $this->fecha_inicio . ' AL ' . $this->fecha_final;
	}

}
