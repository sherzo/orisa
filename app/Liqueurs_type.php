<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liqueurs_type extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $table = 'liqueurs_types';
    protected $fillable = ['tipo_licor'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function liqueurs()
    {
        return $this->hasMany('App\Liqueur', 'type_id', 'id');
    }
}
