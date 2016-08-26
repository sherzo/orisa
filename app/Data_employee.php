<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_employee extends Model
{   
    protected $table = 'data_employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'code_em', 'date_of_admission', 'account_em', 'contract_status', 'cestaticket', 'duration_em', 'bank', 'type_account'
    ];

    public function em() 
    {
        return $this->belongsTo('App\Employee', 'id');
    } 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function unit()
    {
        return $this->belongsTo('App\purchase', 'id_purchase', 'id');
    }


}