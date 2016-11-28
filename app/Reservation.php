<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_solicitud', 'fecha_reservacion', 'hora_reservacion', 'estatus'];

    protected $table = 'reservations';

	  public function table()
	  {
      return $this->belongsTo('App\Table');
	  }

    public function client()
	  {
      return $this->belongsTo('App\Client');
	  }
}
