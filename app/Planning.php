<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $table = 'plannings';

    protected $fillable = [
        'id_shift', 'fecha_inicio', 'fecha_culminacion'
    ];

    public function shift()
    {
    	return $this->belongsTo('App\Shift', 'id', 'id_shift')
    }
}
