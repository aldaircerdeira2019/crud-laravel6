<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendasFormRequest extends FormRequest
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
            'produto_vendido'  => 'required',
            'quantidade'       => 'required',
            'vendedor'         => 'required'
        ];
    }

    public function messages()
    {
        return
        [
         'produto_vendido.required' => 'O código do produto é de preenchimento obrigatorio',
         'quantidade.required'      => 'A quantidade é de preenchimento obrigatorio',
         'vendedor.required'        => 'O código do vendedor é de preenchimento obrigatorio'  
        ];
    }
}
