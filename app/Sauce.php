<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    protected $table = 'sacuces';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
     'salsa',
    ];
}
