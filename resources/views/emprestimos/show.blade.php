<!-- Tela de detalhe-->
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
  <title>Ver Equipamento</title>
  </head>

  <body class="container-sm mt-5">
  <h2 class="text-center">
  Detalhe Equipamento
        </h2>
  <div class="form-group">
    <label for="">Data do Empréstimo</label> <br />
    <input type="date" class="form-control" value="{{ $emprestimo->emp_data_emprestimo }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Data de Devolução</label> <br />
    <input type="date" class="form-control" value="{{ $emprestimo->emp_data_devolucao }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Status</label> <br />
    <input type="text" class="form-control" value="{{ $emprestimo->emp_status }}" > <br />
  </div>
  <div class="form-group">
    <label for="">Avaliaçao</label> <br />
    <input type="text" class="form-control" value="{{ $emprestimo->avaliacao }}" > <br />
  </div>
  <div class="form-group">
    <label for="">Colaborador ID</label> <br />
    <input type="text"  class="form-control" value="{{ $emprestimo->colab_id }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Colaborador Responsável ID</label> <br />
    <input type="text" class="form-control" value="{{ $emprestimo->colabResp_id }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Técnico ID</label> <br />
    <input type="text" class="form-control" value="{{ $emprestimo->tec_id }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Equipamento ID</label> <br />
    <input type="text" class="form-control" value="{{ $emprestimo->equi_id }}"> <br />
  </div>
  
  <div class="form-group">
  <label for=""></label> <br />
  </div>
  
  </body>
</html>