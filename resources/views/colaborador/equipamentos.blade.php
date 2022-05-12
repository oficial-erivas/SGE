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
        <a class="nav-link active" aria-current="page"  href="{{route('ver_emprestimos', ['id'=>$colaborador->id])}}"
        >Meus Empréstimos</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page"  href="{{route('ver_equipamentos', ['id'=>$colaborador->id])}}"
        >Equipamentos</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>
  @include('equipamentos.list')

</body>

</html>