<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_employee extends Model
{
    protected $table = 'employees';

    public function employee() 
    {
    	return $this->belongsTo('App\Employee');
    }
}
