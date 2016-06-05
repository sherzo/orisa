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
        'name', 'user', 'password', 'email', 'type',  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setPasswordAttribute($value) 
    {
        if(!empty($value))
        { 
            $this->attributes['password'] = bcrypt($value);
        }    
    }
}
