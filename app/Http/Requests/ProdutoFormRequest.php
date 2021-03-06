<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class produtoFormRequest extends FormRequest
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

            'nome_p'  => 'required|min:3|max:40',
            'preco' => 'required'
        ];
    }
    public function messages()
    {
        return
        [
        'nome_p.required'  => 'O campos nome é de preenchimento obrigatorio',
        'nome_p.min'       => 'O nome do produto tem que ter no mínito 3 caracteres',
        'nome_p.max'       => 'O nome do produto ultrapassa o limite de 40 caracteres',
        'preco.required' => 'O campo preço é de preenchimento obrigatorio'
        ];
    }
}
