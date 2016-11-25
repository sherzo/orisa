<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeductionExtra extends Model
{
    protected $fillable = ['nombre', 'valor'];

    protected $table = 'others_deductions';

    public function payrollMade()
    {
    	return $this->belongsToMany('App\PayrollMade', 'payrolls_deductions', 'deduccionesExtras_id');
    }

    public function temporaryDeductions()
    {
    	return $this->belongsToMany('App\Employee', 'temporary_deductions', 'deduccion_id', 'empleado_id')->withPivot('estatus');
    }
}
