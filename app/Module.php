<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'modulo', 
    ];
    
    protected $table = 'modules';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function acciones()
    {
        return $this->belongsToMany('App\Action', 'Modules_has_actions');
    }
}
