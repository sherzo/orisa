<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = 'shifts';
    
    protected $fillable = [
        'turno', 'hora_entrada', 'hora_salida'
    ];

   public function planning()
   {
   		return $this->belongsToMany('App\Employee', 'employee_has_shifts')
            ->withPivot('shift_id', 'fecha_inicio', 'fecha_culminacion');
   }
}
