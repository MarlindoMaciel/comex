<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required','min:3'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo :atribute é obrigatório',
            'nome.min' => 'O campo :atribute necessita de pelo menos :min caracteres',
        ];
    }
}
