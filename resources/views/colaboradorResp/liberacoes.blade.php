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
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container px-4 px-lg-5">
    <a
    class="navbar-brand"
    href="index.php"
    style="font-family:'Garamond'"
    >Sistema de Gerenciamento de Equipamentos Hospitalares           </a
    >
    <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
    >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="{{route('ver_emprestimosR', ['id'=>$colaborador->id])}}"
        >Meus Empréstimos</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="{{route('ver_equipamentosR', ['id'=>$colaborador->id])}}"
        >Equipamentos</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="{{route('ver_liberacoes', ['id'=>$colaborador->id])}}"
        >Liberações Pendentes</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>

<h2 class="text-center">
  Meus Empréstimos
</h2>
<a class="btn btn-info" aria-current="page"  href="{{route('ver_liberacoes', ['id'=>$colaborador->id])}}"
        >Atualizar</a
        >
<div class="container-sm mt-5">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Nome do Equipamento</th>
            <th scope="col">Número de Patrimônio</th>
            <th scope="col">Colaborador que solicitou</th>
            <th scope="col">Setor requisitante</th>
            <th scope="col">Técnico Responsável</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($equipamentos as $equipamentos)
          <tr>
            <th scope="row">{{$equipamentos->equi_nome}}</th>
            <td>{{$equipamentos->equi_num_pat}}</td>

            @foreach ($emprestimos as $emprestimos)

            @foreach ($colaboradores as $colaboradores)
            @if($colaboradores->id == $emprestimos->colab_id)
            <td>{{$colaboradores->colab_nome}}</td>
            <td>{{$colaboradores->colab_setor}}</td>
            @endif
            @endforeach
            
            @foreach ($tecnicos as $tecnicos)
            @if($tecnicos->id == $emprestimos->tec_id)
            <td>{{$tecnicos->tec_nome}}</td>
            @endif
            @endforeach
            <td>
              <a href="{{route('ver_emprestimo', ['id'=>$emprestimos->id])}}">
                <span class="btn btn-primary"><i class="far fa-eye">Vizualizar</span>
              </a>
             
              <a href="{{route('liberar_emprestimo', ['id'=>$emprestimos->id])}}" >
                <span class="btn btn-success"><i class="fas fa-edit">Liberar</span>
              </a>
            </td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>


</body>

</html>