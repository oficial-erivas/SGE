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
  <title>Editar Colaborador</title>
  </head>

  <body class="container-sm mt-5">
  <form action="{{ route('alterar_colaborador', ['colab_id'=>$colaborador->id]) }}" method="POST">
  @csrf
  <h2 class="text-center">
  Editar Colaborador
  </h2>
  <div class="form-group">
    <label for="">Nome</label> <br />
    <input type="text" name="nome" class="form-control" value="{{ $colaborador->colab_nome }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Login</label> <br />
    <input type="text" name="login" class="form-control" value="{{ $colaborador->colab_login }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Senha</label> <br />
    <input type="text" name="senha" class="form-control" value="{{ $colaborador->colab_senha }}"> <br />
  </div>
  <div class="form-group">
    <label for="">CPF<</label> <br />
    <input type="text" name="cpf" class="form-control" value="{{ $colaborador->colab_cpf }}" > <br />
  </div>
  <div class="form-group">
    <label for="">RG</label> <br />
    <input type="text" name="rg" class="form-control" value="{{ $colaborador->colab_rg }}" > <br />
  </div>
  <div class="form-group">
    <label for="">Setor</label> <br />
    <input type="date" name="setor" class="form-control" value="{{ $colaborador->colab_setor }}"> <br />
  </div>
  <div class="form-group">
    <label for="">Telefone</label> <br />
    <input type="text" name="telefone" class="form-control" value="{{ $colaborador->colab_tel }}"> <br />
  </div>
  <div class="form-group">
            <label>E-mail</label><br>
            <input type="text" name="email" class="form-control" value="{{ $colaborador->$colab_email }}">
        </div>
  <div class="form-group">
    <label for="">Matricula</label> <br />
    <input type="text" name="matricula" class="form-control" value="{{ $colaborador->colab_matricula }}">
  <div class="form-group"> 
  <label for=""></label> <br />
  </div>
  
  </body>
</html>