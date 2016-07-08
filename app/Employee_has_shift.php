<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_has_shift extends Model
{
    protected $table = 'employee_has_shifts';
    
    public $timestamps = false;

    protected $fillable = [
    	'id_employee', 'id_shift'
    ];

    public function shifts() 
    {
        return $this->belongsTo('App\Shifts', 'id', 'id_shift');
    } 

    public function employee()
    {
    	return $this->belongsTo('App\Employee', 'id', 'id_employee');
    }
}