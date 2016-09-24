<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_modules_action extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',  'module_action_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'users_modules_actions';

}
