<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{ 
	protected $table = 'roles';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
     'rol', 'abreviatura', 'descripcion', 'nivel',
    ];

   public function user() 
   {
   		$this->belongsTo('App\User', 'id');
   }
}
