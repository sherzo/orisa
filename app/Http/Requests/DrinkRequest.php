<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DrinkRequest extends Request
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
            'bebida'         => 'required|unique:drinks',
            'id_unit'        => 'required',
            'caracteristica' => 'required', 
            'id_providers'   => 'required', 
        ];
    }

    public function messages()
    {

    return [
        'id_providers.required' => 'No ha selecionado el proveedor',
        ];
    }
}
