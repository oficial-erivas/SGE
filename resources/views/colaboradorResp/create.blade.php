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
  <title>Cadastrar colaborador Responsavel</title>
  </head>

  <body class="container-sm mt-5">
  <form action="{{ route('registrar_colabResp') }}" method="POST">
  @csrf
  <h2 class="text-center">
  Cadastrar Colaborador Responsavel
        </h2>
  <div class="form-group">
    <label for="">Nome</label> <br />
    <input type="text" name="nome" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">Login</label> <br />
    <input type="text" name="login" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">Senha</label> <br />
    <input type="text" name="senha" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">CPF</label> <br />
    <input type="text" name="cpf" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">RG</label> <br />
    <input type="text" name="rg" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">Setor</label> <br />
    <input type="date" name="setor" class="form-control"> <br />
  </div>
  <div class="form-group">
    <label for="">Telefone</label> <br />
    <input type="text" name="telefone" class="form-control"> <br />
  </div>
  <div class="form-group">
            <label>E-mail</label><br>
            <input type="text" name="email" class="form-control">
        </div>
  <div class="form-group">
    <label for="">Matricula</label> <br />
    <textarea name="matricula" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <label for=""></label> <br />
  </div>
  <button type="submit" class="btn btn-primary
                    btn-block">Cadastrar</button>
</form>
   
  </body>
</html>