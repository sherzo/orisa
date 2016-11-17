<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraHour extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'extra_hours';

    protected $fillable = ['turno_id', 'valor_turno'];

    public function turn()
    {
    	return $this->belongsTo('App\Turn', 'turno_id');
    }
}
