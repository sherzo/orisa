<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day_attendance extends Model
{
    protected $fillable = ['fecha'];

    protected $table = 'days_with_assistances';
    public $timestamps = false;
    
    public function attendance()
    {
    	return $this->hasMany('App\Assistance', 'asistencia_id', 'id');
    }
}
