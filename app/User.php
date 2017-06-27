<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'password', 'permissions', 'last_login', 'first_name', 'last_name', 'attempts', 'status'];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function client()
	{
		return $this->hasOne('App\Client', 'correo', 'email');
	}

	/*public function employee()
	{
	  return $this->belongsToMany('App\Employee');
	}


	public function roles()
	{
		$this->hasMany('App\Rol', 'roles_id');
	}


	public function bitacoras()
	{
	   return $this->hasMany('App\Bitacora');
	}

	public function modules_actions()
	{
	   return $this->hasMany('App\Users_modules_action');
	}

	public function is_role($hasRol)
	{
		# code...
	}

	public function setPasswordAttribute($value)
	{
		if(!empty($value))
		{
			$this->attributes['password'] = bcrypt($value);
		}
	}

	public function payroll()
	{
		return $this->hasMany('App\PayrollMade', 'usuario_id', 'id');
	}*/
}
