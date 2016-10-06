<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Days_planning extends Model
{
	protected $table = 'plannings_has_days';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/

	protected $fillable = ['planificacion_id', 'dia', 'estatus', 'detalle'];

	public $timestamps = false;
		
	public function planif() 
	{
		return $this->belongsTo('App\Planning', 'planificacion_id');
	}

	public function hoday()
	{
		return $this->hasMany('App\Holiday', 'dia_id', 'id');
	}

}