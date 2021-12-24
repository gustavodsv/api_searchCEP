@extends('app')

@section('title', 'Cadastro')

@section('content')
    <h1 class="mt-5">Formulário: <span class="small">Endereço</span></h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('save')}}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label>CEP</label>
            <input class="form-control" type="text" name="cep" value="{{$cep}}" >
        </div>
        <div class="mb-3 mt-3">
            <label>Logradouro</label>
            <input class="form-control" type="text" name="logradouro" value="{{$logradouro}}" >
        </div>
        <div class="mb-3 mt-3">
            <label>Número</label>
            <input class="form-control" type="text" name="numero">
        </div>
        <div class="mb-3 mt-3">
            <label>Complemento</label>
            <input class="form-control" type="text" name="complemento">
        </div>
        <div class="mb-3 mt-3">
            <label>Bairro</label>
            <input class="form-control" type="text" name="bairro" value="{{$bairro}}" >
        </div>
        <div class="mb-3 mt-3">
            <label>Cidade</label>
            <input class="form-control" type="text" name="cidade" value="{{$cidade}}" >
        </div>
        <div class="mb-3 mt-3">
            <label>Estado</label>
            <input class="form-control" type="text" name="estado" value="{{$estado}}" >
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
@endsection
