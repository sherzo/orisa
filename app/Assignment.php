<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['nombre', 'valor'];

    protected $table = 'others_assignments';

    public function payrollMade()
    {
    	return $this->belongsToMany('App\PayrollMade', 'payrolls_assignments', 'asignacionesExtras_id', 'nomina_id');
    }
}