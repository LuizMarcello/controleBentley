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

   /**
    * Injetando neste método o Validator, que é a instância da classe de validação,
    * daí podem ser executados os métodos do Validator, através do FormRequest.
    *
    * Pega a instancia do $validator
    * @param [type] $validator
    * @return void
    */
    public function withValidator($validator)
    {
        $validator->after(function($validator){
            if($this->hasDash()) {
                $validator->errors()->add('modelo', 'O campo modelo não pode ter -');
            }
        });
    }

    /**
     * Verifica se tem -
     *
     * @return boolean
     */
    public function hasDash()
    {
        return strpos($this->modelo, '-');
    }

    /**
     * Define descrições manuais das regras de validação
     * Mensagem diferenciada para uma das regras
     *
     *
    */
    public function messages() {
        return [
            'notafiscal.required' => "O campo nota fiscal deve mesmo ser preenchido"
        ];
    }
}



