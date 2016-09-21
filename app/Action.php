<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'accion', 
    ];
    
    protected $table = 'actions';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Modulos()
    {
        return $this->belongsToMany('App\Module', 'Modules_has_actions');
    }
}
