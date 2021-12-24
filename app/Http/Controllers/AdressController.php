<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdressController extends Controller
{
    public function index() {
        return view('search');
    }

    public function searchAction(Request $request) {
        $cep = $request->input('cep');
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();

        return view('add')->with(
            [
                'cep' => $request->input('cep'),
                'logradouro' => $response['logradouro'],
                'bairro' => $response['bairro'],
                'cidade' => $response['localidade'],
                'estado' => $response['uf']
            ]
        );
    }
}
