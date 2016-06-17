<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    
    protected $fillable = [
        'name_position', 'salary_month', 'time_ordinary'
    ];

    public function Employee_has_position() 
    {
        return $this->hasMany('App\Employee_has_position', 'id_position', 'id');
    } 
 
}