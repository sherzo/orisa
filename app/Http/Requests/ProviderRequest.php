<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProviderRequest extends Request
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
            'id_user' => 'required|',
            'rif' => 'Numeric|required',
            'business_name' => 'max:25|required',
            'addres_pro' => 'required',
            'phone_pro' => 'max:11|required',
            'email_pro' => 'max:22|required',
        ];
    }

}
