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

    protected $fillable = [
    	'planificacion_id', 'dia', 'estatus',
    ];

   	public function planif() 
   	{
   		$this->belognsTo('App\Planning', 'planificacion_id');
   	}
}
