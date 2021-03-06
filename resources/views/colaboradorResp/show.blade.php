<!-- Navigation-->
<!DOCTYPE html>
<html lang="pt">
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

    <title>SGEH</title>

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
          <a class="navbar-brand mt-2 mt-lg-0" href="javascript:history.back();">
            <h3>SGEH</h3>
          </a>
        </div>
        <!-- Collapsible wrapper -->

      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container py-4">

      <div class="row">
        <h3>Informa????es Colaborador Responsavel</h3>
      </div>

   

        <div class="form-group">
    <label for="">Nome</label> <br />
    <input type="text" name="nome" class="form-control" value="{{ $colaboradorResp->colabResp_nome }}" disabled> <br />
  </div>

  <div class="form-group">
    <label for="">Login</label> <br />
    <input type="text" name="login" class="form-control" value="{{ $colaboradorResp->colabResp_login }}" disabled> <br />
  </div>

  <div class="form-group">
    <label for="">Senha</label> <br />
    <input type="text" name="senha" class="form-control" value="{{ $colaboradorResp->colabResp_senha }}" disabled> <br />
  </div>

  <div class="form-group">
    <label for="">CPF</label> <br />
    <input type="text" name="cpf" class="form-control" value="{{ $colaboradorResp->colabResp_cpf }}" disabled > <br />
  </div>

  <div class="form-group">
    <label for="">RG</label> <br />
    <input type="text" name="rg" class="form-control" value="{{ $colaboradorResp->colabResp_rg }}" disabled> <br />
  </div>

  <div class="form-group">
    <label for="">Setor</label> <br />
    <input type="text" name="setor" class="form-control" value="{{ $colaboradorResp->colabResp_setor }}" disabled> <br />
  </div>

  <div class="form-group">
    <label for="">Telefone</label> <br />
    <input type="text" name="telefone" class="form-control" value="{{ $colaboradorResp->colabResp_tel }}" disabled> <br />
  </div>

  <div class="form-group">
            <label>E-mail</label><br>
            <input type="text" name="email" class="form-control" value="{{ $colaboradorResp->colabResp_email }}" disabled><br />
        </div>

  <div class="form-group">
    <label for="">Matricula</label> <br />
    <input type="text" name="matricula" class="form-control" value="{{ $colaboradorResp->colabResp_matricula }}" disabled>
    </div>

    <div class="form-group py-4">
          <a class="btn btn-secondary" href="javascript:history.back();" >Voltar</a>
    
    </div>
</div>

    @include('footer')

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> -->
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
  </body>
</html>
