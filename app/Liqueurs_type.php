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
    protected $fillable = [
        'tipo_licor',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id_user',
    ];

    protected $table = 'liqueurs_types';

    public function licores()
    {
        $this->hasMany('App\Liqueur', 'type_id', 'id');
    }
}
