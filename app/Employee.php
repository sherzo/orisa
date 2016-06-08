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
        'document_em', 'birthdate_em', 'country_em', 'addres_em', 'names_em', 'civil_status_em', 'state_em', 'phone_em', 'surnames_em', 'gender_em', 'city_em', 'email_em', 'id_position',
    ];

    public function employee() 
    {
        return $this->hasOne('App\Employee');
    } 

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

}