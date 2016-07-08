<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = 'shifts';
    
    protected $fillable = [
        'turno', 'hora_entrada', 'hora_salida', 'fecha_inicio', 'fecha_culminacion'
    ];

   public function employee_has_shifts()
   {
   		$this->hasMany('App\Employee_has_shifts', 'id_shift', 'id');
   }
   public function planning()
   {
   		$this->hasMany('App\Planning', 'id_shift', 'id');
   }

}
