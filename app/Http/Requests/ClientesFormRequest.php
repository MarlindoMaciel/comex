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
            'nome.required'     => 'O campo nome é obrigatório',
            'nome.min'          => 'O campo nome necessita de pelo menos :min caracteres',
            'cpf.required'      => 'O campo cpf é obrigatório',
            'cpf.min'           => 'O campo cpf necessita de pelo menos :min caracteres',
            'telefone.required' => 'O campo telefone é obrigatório',
            'telefone.min'      => 'O campo telefone necessita de pelo menos :min caracteres',
            'telefone.max'      => 'O campo telefone não pode ter mais de :min caracteres',
            'rua.required'      => 'O campo rua é obrigatório',
            'numero.required'   => 'O campo numero é obrigatório',
            'bairro.required'   => 'O campo bairro é obrigatório',
            'cidade.required'   => 'O campo cidade é obrigatório',
            'estado.required'   => 'O campo estado é obrigatório',
        ];
    }
}
