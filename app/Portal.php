<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['status'];

	/**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/

	protected $table = 'portals';

	public function plates()
	{
		return $this->belongsToMany('App\Plate');
	}
}
