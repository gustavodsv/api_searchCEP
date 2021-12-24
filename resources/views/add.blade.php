<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Search CEP</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-5">Endereço</h1>

        <form action="{{route('search')}}" method="GET">

            <div class="mb-3 mt-3">
                <label>CEP</label>
                <input class="form-control" type="text" name="cep" value="{{$cep}}" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label>Logradouro</label>
                <input class="form-control" type="text" name="logradouro" value="{{$logradouro}}" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label>Número</label>
                <input class="form-control" type="text" name="numero">
            </div>
            <div class="mb-3 mt-3">
                <label>Complemento</label>
                <input class="form-control" type="text" name="numero">
            </div>
            <div class="mb-3 mt-3">
                <label>Bairro</label>
                <input class="form-control" type="text" name="bairro" value="{{$bairro}}" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label>Cidade</label>
                <input class="form-control" type="text" name="cidade" value="{{$cidade}}" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label>Estado</label>
                <input class="form-control" type="text" name="estado" value="{{$estado}}" disabled>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
