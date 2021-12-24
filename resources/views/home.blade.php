<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Endereços</title>
  </head>
  <body>
    <div class="container">

        <h1 class="mt-5">Cadastrar Endereço</h1>

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
                    <th scope="col">Bairro</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Cidade/UF</th>
                    <th scope="col">Data da Criação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($adress as $adress)
                    <tr>
                        <td>{{$adress->cep}}</td>
                        <td>{{$adress->logradouro}}</td>
                        <td>{{$adress->numero}}</td>
                        <td>{{$adress->bairro}}</td>
                        <td>{{$adress->complemento}}</td>
                        <td>{{$adress->cidade}}/{{$adress->estado}}</td>
                        <td>{{(new DateTime($adress->created_at))->format('d/m/Y')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            Nenhum endereço cadastrado.
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
