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
  <title>Detalhe Equipamento</title>
  </head>

  <body class="container-sm mt-5">
  <h2 class="text-center">
  Detalhe Equipamento
        </h2>
  <div class="form-group">
    <label for="">Nome</label> <br />
    <input type="text" name="nome" class="form-control" value="{{$equipamento->nome}}"> <br />
  </div>
  <div class="form-group">
    <label for="">Número de Patrimônio</label> <br />
    <input type="text" name="numeroPatrimonio" class="form-control" value="{{$equipamento->numeroPatrimonio}}"> <br />
  </div>
  <div class="form-group">
    <label for="">Empresa Associada</label> <br />
    <input type="text" name="empresaAssociada" class="form-control" value="{{$equipamento->empresaAssociada}}"> <br />
  </div>
  <div class="form-group">
    <label for="">Setor de Origem</label> <br />
    <input type="text" name="setorDeOrigem" class="form-control" value="{{$equipamento->setorDeOrigem}}" > <br />
  </div>
  <div class="form-group">
    <label for="">Setor Alocado</label> <br />
    <input type="text" name="setorAlocado" class="form-control" value="{{$equipamento->setorAlocado}}" > <br />
  </div>
  <div class="form-group">
    <label for="">Data de Aquisição</label> <br />
    <input type="date" name="dataDeAquisicao" class="form-control" value="{{$equipamento->dataDeAquisicao}}"> <br />
  </div>
  <div class="form-group">
    <label for="">Valor do Bem</label> <br />
    <input type="text" name="valorDoBem" class="form-control" value="{{$equipamento->valorDoBem}}"> <br />
  </div>
  <div class="form-group">
            <label>Status</label><br>
            <input type="text" name="status" list="statusEq" class="form-control">
    <datalist id="statusEq">
      <option value="disponivel">
      <option value="indisponivel">
    </datalist>
        </div>
  <div class="form-group">
    <label for="">Descrição</label> <br />
    <textarea name="descricao" class="form-control" value="{{$equipamento->descricao}}"></textarea>
  </div>
  
  </body>
</html>