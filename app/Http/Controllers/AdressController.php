<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Adress\SaveRequest;
use App\Models\Adress;

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

    public function saveAction(SaveRequest $request) {
        $adress = Adress::create(
            [
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'numero' => $request->input('numero'),
                'complemento' => $request->input('complemento'),
                'bairro' => $request->input('bairro'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado'),
            ]
        );

        dd($adress->id);
    }
}
