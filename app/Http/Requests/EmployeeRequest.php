<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'birthdate_em' => 'required',
            'country_em' => 'required',
            'addres_em' => 'required',
            'names_em' => 'required',
            'state_em' => 'required',
            'phone_em' => 'required',
            'surnames_em' => 'required',
            'city_em' => 'required',
            'email_em' => 'required',
        ];
    }
}
