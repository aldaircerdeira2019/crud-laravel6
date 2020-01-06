<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
             'nome_u'=> 'required|min:3|max:60',
             'senha'=>'required|min:8',
             'email'=>'required|max:255',
             'cep'=>'required',
             'rua'=>'required|max:120'   
        ];
    }

    public function messages()
    {
         return 
            [
                'nome_u.required'     =>'O campo nome é de preechimento obrigatorio',
                'nome_u.min'          =>'O nome tem que ter no mínimo 3 caracteres',
                'nome_u.max'          =>'O nome ultrapassa o limite de 60 caracteres',
                'senha.required'    =>'O campo senha é de preechimento obrigario',
                'senha.min'         =>'A senha deve ter no mínimo 8 caracteres',
                'email.required'    =>'O campo email é de preechimento obrigatorio',
                'email.max'         =>'O email ultrapassa o limite de 255 caracteres ',
                'cep.required'      =>'O campo cep é de preechimento obrigatorio',
                'rua.required'      =>'O campo rua é de preechimento obrigatorio',
                'rua.max'           =>'O nome da rua ultrapassa o limite de 120 caracteres'
                    
            ] ;
    }
}
