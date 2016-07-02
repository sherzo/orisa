<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liqueur extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_licor', 'id_type', 'caracteristica', 'id_unit', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    protected $table = 'liqueurs';

    public function tipo()
    {
        return $this->belongsToMany('App\Liqueurs_type', 'liqueurs', 'id', 'id_type');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit', 'id');
    }
}
