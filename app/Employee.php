<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
    	'id', 'document_em', 'names_em', 'surnames_em', 'phone_em', 'addres_em', 'gender_em', 'birthdate_em', 'country_em', 'state_em', 'city_em'
    ];

}
