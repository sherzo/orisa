<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
	/**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $table = 'payrolls_saved';
    protected $fillable = ['mes', 'quincena', 'year'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
}
