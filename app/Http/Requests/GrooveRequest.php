<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrooveRequest extends FormRequest
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
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3'],
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2'],
            'datadanota' => ['required', 'date_format:d/m/Y'],
            'marca' => ['required', 'alpha_num', 'max:50', 'min:3']
        ];
    }
}

