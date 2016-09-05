<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day_attendance extends Model
{
    protected $fillable = [
     'fecha', 
    ];

    protected $table = 'days_with_assistances';

    public function atten()
    {
    	return $this->belongsTo('App\Assistance', 'id');
    }
}
