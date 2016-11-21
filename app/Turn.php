<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $table = 'turns';
    
    protected $fillable = ['turno', 'hora_entrada', 'hora_salida'];

    public function em()
   	{
    	return $this->belongsTo('App\Employee', 'id');
    }	

    public function extraHours()
    {
    	return $this->hasOne('App\ExtraHour', 'turno_id', 'id');
    }
 
}
