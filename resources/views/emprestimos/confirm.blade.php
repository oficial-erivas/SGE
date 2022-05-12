<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <title>Devolver Equipamento</title>
  </head>

  <body class="container-sm mt-5">
  <form action="{{ route('devolver_emprestimo', ['id' => $emprestimo->id]) }}" method="POST">
  @csrf
  <h2 class="text-center">
  Devolver Equipamento
        </h2>
  <div class="form-group">
    <label for="">Tem certeza que deseja devolver esse equipamento?</label> <br />
    <input type="text" name="nome" class="form-control" value="{{$equipamento->equi_nome}}"> <br />
  </div>
  <div class="form-group">
  <label for=""></label> <br />
  </div>
  <button type="submit" class="btn btn-primary
                    btn-block">Sim</button>
</form>
   
  </body>
</html>