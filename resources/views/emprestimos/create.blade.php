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
  <title>Solicitar Empréstimo</title>
  </head>

  <body class="container-sm mt-5">
  <form action="{{ route('criar_emprestimo' , ['equi_id'=>$equipamentos->id , 'colab_id'=>$colaborador->id])}}" method="POST">
  @csrf
  <h2 class="text-center">
 Empréstimo <?php echo $equipamento->equi_nome; ?>
        </h2>
  <div class="form-group">
    <label for="">Data de Devolução</label> <br />
    <input type="date" name="dataDeDevolucao" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">Descrição</label> <br />
    <textarea name="descricao" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <label for=""></label> <br />
  </div>
  <button type="submit" class="btn btn-primary
                    btn-block">Confirmar</button>
</form>
   
  </body>
</html>