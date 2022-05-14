<!-- Navigation-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
      This is the page head - it contains info the browser uses to display the page
      You won't see what's in the head in the page
      Scroll down to the body element for the page content
    -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="https://glitch.com/favicon.ico" />

    <!-- 
      This is an HTML comment
      You can write text in a comment and the content won't be visible in the page
    -->
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
      rel="stylesheet"
    />

    <title>SGE</title>

    <!-- Meta tags for SEO and social sharing -->
    <link rel="canonical" href="https://glitch-hello-website.glitch.me/" />
    <meta
      name="description"
      content="A simple website, built with Glitch. Remix it to get your own."
    />
    <meta name="robots" content="index,follow" />

    <meta
      property="og:image"
      content="https://cdn.glitch.com/605e2a51-d45f-4d87-a285-9410ad350515%2Fhello-website-social.png?v=1616712748147"
    />
    <meta name="twitter:card" content="summary" />

    <!-- Import the webpage's stylesheet -->
    <!--link rel="stylesheet" href="/style.css" />

    <!-- Import the webpage's javascript file -->
    <!--<script src="/script.js" defer></script> -->
  </head>
  <body>
    <div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarSupportedContent"
          >
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="">
              <h3>SGEH</h3>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="{{route('Aentregar_equipamentos', ['id'=>$tecnico->id])}}"
                  >Equipamentos Solicitados</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="{{route('Arecolher_equipamentos', ['id'=>$tecnico->id])}}"
                  >Devoluções Solicitadas</a
                >
              </li>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->

          <!-- Right elements -->
          <div class="d-flex align-items-center">
            <!-- Avatar -->
            <div class="dropdown">
              <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuAvatar"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  height="25"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuAvatar"
              >
                <li>
                  <a class="dropdown-item" href="">Meu perfil</a>
                </li>
                <li>
                  <a class="dropdown-item" href="">Sair</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </div>
    <div class="py-4"></div>
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6">
          <h3>Equipamentos Solicitados</h3>
        </div>
      </div>
      <div class="row py-4">
        <div class="col-md-6">
          <a href="{{route('Aentregar_equipamentos', ['id'=>$tecnico->id])}}">
            <span class="btn btn-sm btn-warning"
              ><i class="fa fa-refresh"> Atualizar</i></span
            >
          </a>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Equipamento</th>
              <th scope="col">Nº Patrimônio</th>
              <th scope="col">Colaborador Solicitante</th>
              <th scope="col">Setor Requisitante</th>
              <th scope="col">Colaborador Responsável</th>
              <th scope="col">Ações</th>
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
            
            @foreach ($colaboradoresResp as $colaboradoresResp)
            @if($colaboradoresResp->id == $colaboradoresResp->colabResp_id)
            <td>{{$colaboradoresResp->colabResp_nome}}</td>
            @endif
            @endforeach
            <td>
                <a  href="{{route('entregar_emprestimo', ['id'=>$emprestimos->id])}}">
                  <span
                    class="btn btn-sm btn-success"
                    alt="Clique aqui quando o equipamento tiver sido entregue"
                    ><i class="fa fa-circle-check"> Entregue</i></span
                  >
                </a>
              </td>
             @endforeach
          </tr>
          @endforeach 
          </tbody>
        </table>
      </div>
    </div>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> -->
    <!-- MDB -->
    <div class="py-4"></div>
    <div class="py-4"></div>
    <footer class="text-center text-white" style="background-color: #caced1">
      <!-- Grid container -->
      <div>
        <!-- Section: Images -->
        <section>
          <img
            src="https://cdn.glitch.global/d04e99eb-7a74-4fa2-9b7d-caacc853d028/footer.png?v=1652401893913"
            class="w-100"
          />
        </section>
      </div>
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #0000cd">
        © 2022 Copyright:
        <a class="text-white" href="">SGEH Inc.</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
  </body>
</html>
