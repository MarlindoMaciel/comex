<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'              => ['required','min:2'],
            'cpf'               => ['required','min:11'],
            'telefone'          => ['required','min:10','max:11'],
            'rua'               => ['required'],
            'numero'            => ['required'],
            'bairro'            => ['required'],
            'cidade'            => ['required'],
            'estado'            => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required'     => 'O campo :atribute é obrigatório',
            'nome.min'          => 'O campo :atribute necessita de pelo menos :min caracteres',
            'cpf.required'      => 'O :atribute cpf é obrigatório',
            'cpf.min'           => 'O campo :atribute necessita de pelo menos :min caracteres',
            'telefone.required' => 'O campo :atribute é obrigatório',
            'telefone.min'      => 'O campo :atribute necessita de pelo menos :min caracteres',
            'telefone.max'      => 'O campo :atribute não pode ter mais de :min caracteres',
            'rua.required'      => 'O campo :atribute é obrigatório',
            'numero.required'   => 'O campo :atribute é obrigatório',
            'bairro.required'   => 'O campo :atribute é obrigatório',
            'cidade.required'   => 'O campo :atribute é obrigatório',
            'estado.required'   => 'O campo :atribute é obrigatório',
        ];
    }
}
