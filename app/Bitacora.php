<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
  /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
    'descripcion', 'operacion', 'operacion_id',
   ];

   protected $table = 'bitacora';

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
