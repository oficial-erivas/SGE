<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <title>Equipamentos</title>
</head>

<body>
  @include('menu')
  <h2 class="text-center">
    Equipamentos
  </h2>
  <div class="container-sm mt-5">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Número de Patrimônio</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($equipamentos as $equipamentos)
          <tr>
              <th scope="row">{{$equipamentos->id}}</th>
              <td>{{$equipamentos->equi_nome}}</td>
              <td>{{$equipamentos->equi_num_pat}}</td>
              <td>
              <a href="">
                  <span class="btn btn-primary"><i class="far fa-eye">Vizualizar</span>
                </a>
                <a href="{{route('solicitar_emprestimo'), ['id' => $equipamentos->id])}}">
                  <span class="btn btn-success"><i class="fas fa-edit">Empréstimo</span>
                </a>
                <a href="">
                  <span class="btn btn-danger"><i class="far fa-trash-alt">Reservar</span>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>