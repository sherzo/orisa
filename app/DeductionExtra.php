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
}
