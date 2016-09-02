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
            'dni_cedula'        => 'required|unique:employees',
            'nombres'           => 'required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellidos'         => 'required|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'fecha_nacimiento'  => 'required',
            'estado_civil'      => 'required',
            'genero'            => 'required',
            'direccion'         => 'required',
            'telefono'          => 'digits_between:10,15|required',
            'codigo'            => 'required|alpha_dash',
            'fecha_de_admision' => 'required',
            'cestaticket'       => 'required',
            'cargo_id'          => 'required',
            'turno_id'          => 'required',
            'contrato'          => 'required',
        ];
    }
}
