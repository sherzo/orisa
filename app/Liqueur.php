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
        'id_user', 'liqueur_name', 'id_type', 'id_unit', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id_user',
    ];

    protected $table = 'liqueurs';
}
