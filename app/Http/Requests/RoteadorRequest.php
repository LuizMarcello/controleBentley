<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoteadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /* Se o usuário está autorizado a fazer esta ação */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    /* Este método será injetado no RoteadorController: */
    public function rules()
    {
        /* Fazendo satinização(Limpando traços,barras,etc) */
        $this->sanitize();

        /* Por padrão, já é criado este retôrno com um array vazio: */
        return [
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3'],
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
            'macaddress' => ['required', 'max:12', 'min:12']
        ];
    }

    public function sanitize()
    {
        /* Pegando todos os dados da Request */
        $data = $this->all();
        $data['modelo'] = str_replace('-', ' ', $data['modelo']);
        /* Depois, atualizando os dados */
        $this->replace($data);
    }

   /*  Define descrições manuais das regras de validação */
   /*  Mensagem diferenciada para uma das regras */
    public function messages() {
        return [
            'notafiscal.required' => "O campo nota fiscal deve mesmo ser preenchido"
        ];
    }
}
