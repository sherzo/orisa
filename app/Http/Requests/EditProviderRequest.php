<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditProviderRequest extends Request
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
            'razon_social' => 'max:25|required',
            'direccion' => 'required',
            'telefono' => 'max:11|required',
            'correo' => 'max:22|required',
        ];
    }
}
