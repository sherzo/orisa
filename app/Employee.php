<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'employees';

    protected $fillable = [
        'document_em', 'birthdate_em', 'country_em', 'addres_em', 'names_em', 'civil_status_em', 'state_em', 'phone_em', 'surnames_em', 'gender_em', 'city_em', 'email_em',
    ];

    public function Data_employee() 
    {
        return $this->hasOne('App\Data_employee', 'id_employee', 'id');
    } 

    public function Employee_has_position()
    {
        return $this->hasOne('App\Employee_has_position', 'id_employee', 'id');
    }

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

}