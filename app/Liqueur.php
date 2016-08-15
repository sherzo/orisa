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
       'tlicor_id', 'id_unit', 'nombre_licor', 'caracteristica', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    protected $table = 'liqueurs';

    public function tipo()
    {
        return $this->belongsTo('App\Liqueurs_type', 'tlicor_id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit', 'id_unit', 'id');
    }
}
