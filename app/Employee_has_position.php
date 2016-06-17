<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_has_position extends Model
{
    protected $table = 'employee_has_positions';
    
    public $timestamps = false;

    protected $fillable = [
        'id_employee', 'id_position',
    ];

    public function Employee() 
    {
        return $this->belongsTo('App\Employee', 'id', 'id_employee');
    } 

    public function Position() 
    {
        return $this->belongsTo('App\Position', 'id', 'id_position');
    } 

}
