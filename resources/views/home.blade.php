@extends('app')

@section('title', 'Lista de Endereços')

@section('content')
    <h1 class="mt-5">Cadastrar Endereço</h1>

    @if(session('sucesso'))
        <div class="alert alert-success" role="alert">
            {{session('sucesso')}}
        </div>
    @endif
    @if(session('erro'))
        <div class="alert alert-danger" role="alert">
            {{session('erro')}}
        </div>
    @endif

    <form action="{{route('search')}}" method="GET">

        <div class="mb-3 mt-3">
            <label class="form-label">CEP</label>
            <input class="form-control" type="text" name="cep" required>
        </div>

        <button type="submit" class="btn btn-primary mb-4">Cadastrar</button>

    </form>

    <hr>

    <h3 class="mt-5">Endereços Cadastrados</h3>

    @if(count($adress) > 0)
    <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade/UF</th>
                <th scope="col">Data do cadastro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adress as $adress)
                <tr>
                    <td>{{$adress->cep}}</td>
                    <td>{{$adress->logradouro}}</td>
                    <td>{{$adress->numero}}</td>
                    <td>{{$adress->complemento}}</td>
                    <td>{{$adress->bairro}}</td>
                    <td>{{$adress->cidade}}/{{$adress->estado}}</td>
                    <td>{{(new DateTime($adress->created_at))->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        Nenhum endereço cadastrado.
    @endif
@endsection


