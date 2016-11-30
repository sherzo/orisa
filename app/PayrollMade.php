<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayrollMade extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $table = 'payrolls_made';
    protected $fillable = ['usuario_id', 'cedula', 'nombre_completo', 'cargo', 'salario_d', 'salario_m', 'asignaciones_ext', 'deducciones_ext', 'islr', 'sso', 'rpe', 'rpvh', 'laborados', 'no_laborados', 'cestaticket', 'cestaticket_des', 'salario_total'];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

    public function users()
    {
    	return $this->belongsTo('App\User', 'id');
    }

    public function payroll()
    {
    	return $this->belongsToMany('App\Payroll', 'payrolls', 'nominamade_id', 'nominasaved_id');
    }
}
