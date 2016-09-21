<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules_has_action extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'module_id', 'action_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'modules_has_actions';

     public function accion()
    {
        return $this->belongsTo('App\Action', 'action_id');
    }

    public function modulo()
    {
        return $this->belongsTo('App\Module', 'module_id');
    }
}
