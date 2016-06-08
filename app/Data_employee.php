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
        'id_employee', 'code_em', 'date_of_admission', 'account_em', 'contract', 'cestaticket', 'contract_status', 'duration_em',
    ];

    public function data_employee() 
    {
        return $this->belongsTo('App\Data_employee', 'id_employee');
    } 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}