<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roles_id', 'name', 'user', 'password', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function employee()
    {
      return $this->belongsToMany('App\Employee');
    }


    public function roles()
    {
        $this->hasMany('App\Rol', 'roles_id');
    }

    public function client()
    {
        return $this->belongsToMany('App\Client', 'users_vip');
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
    }
}
