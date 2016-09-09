<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unidad', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $table = 'units';


    public function ingredients()
    {
        return $this->hasMany('App\Ingredient', 'id_unit', 'id');
    }

    public function liqueurs()
    {
        return $this->hasMany('App\Liqueur', 'id_unit', 'id');
    }
}
