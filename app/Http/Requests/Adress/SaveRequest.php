<?php

namespace App\Http\Requests\Adress;

use Illuminate\Foundation\Http\FormRequest;

class SaveRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'complemento' => '',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string'
        ];
    }
    public function messages()
    {
        return [
            'cep.required' => 'O CEP é obrigatório.',
            'logradouro.required' => 'O logradouro é obrigatório.',
            'numero.required' => 'O número é obrigatório.',
            'bairro.required' => 'O bairro é obrigatório.',
            'cidade.required' => 'O cidade é obrigatório.',
            'estado.required' => 'O estado é obrigatório.'
        ];
    }
}
