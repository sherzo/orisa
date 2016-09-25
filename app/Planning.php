<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
	protected $table = 'plannings';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/

	protected $fillable = [
		'fecha_inicio', 'fecha_final', 'fechas', 'estatus',
	];

	public function dias() 
	{
		return $this->hasMany('App\Days_planning', 'planificacion_id', 'id');
	}

	public function pldays() 
	{
		return $this->hasMany('App\Holiday', 'planificacion_id', 'id');
	}

	public function getFechasAttribute()
    {
        return $this->fecha_inicio . ' - ' . $this->fecha_final;
    }
	
}
