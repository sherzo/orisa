<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    
    protected $fillable = ['ISLR', 'SSO', 'RPE', 'RPVH'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    protected $table = 'deductions';

}
