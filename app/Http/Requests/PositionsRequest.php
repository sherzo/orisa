<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PositionsRequest extends Request
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
            'code_positions' => 'required|unique:positions',
            'name_positions' => 'required|unique:positions',
            'salary_month'   =>  'require',
        ];
    }
}
