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
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome não pode ter mais de :max caracteres',
            'valor_unitario.required' => 'O campo valor unitário é obrigatório',
            'valor_unitario.numeric' => 'O campo valor unitário necessita ser um número',
            'valor_unitario.not_in' => 'O campo valor unitário tem que ser maior que zero',
            'estoque.required' => 'O campo estoque é obrigatório',
            'estoque.numeric' => 'O campo estoque necessita ser um número',
            'estoque.between' => 'O campo estoque tem que ser maior que zero e menor que 1000',
            'categorias_id.required' => 'O campo categoria é obrigatório',
        ];
    }
}
