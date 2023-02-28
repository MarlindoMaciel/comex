<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required','max:50'],
            'valor_unitario' => ['required','numeric','not_in:0'],
            'estoque' => ['required','numeric','between:0,1000'],
            'categorias_id' => ['required','numeric'],
            
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo :atribute é obrigatório',
            'nome.min' => 'O campo :atribute necessita de pelo menos :min caracteres',
            'valor_unitario.required' => 'O campo :atribute é obrigatório',
            'valor_unitario.numeric' => 'O campo :atribute necessita ser um número',
            'valor_unitario.not_in' => 'O campo :atribute tem que ser maior que zero',
            'estoque.required' => 'O campo :atribute é obrigatório',
            'estoque.numeric' => 'O campo :atribute necessita ser um número',
            'estoque.between' => 'O campo :atribute tem que ser maior que zero e menor que 1000',
            'categorias_id.required' => 'É necessário',
        ];
    }
}
