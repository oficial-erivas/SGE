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
    <link
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
  <body style="background-color: #f5f5f5">
    <!-- Section: Design Block -->
    <section class="">
      <!-- Jumbotron -->
      <div class="px-4 py-5 px-md-5 text-center text-lg-start">
        <div class="container">
          <div class="row gx-lg-4 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h1 class="my-5 display-4 fw-bold ls-tight">
                Sistema de <br />
                <span class="text-primary">Gerenciamento de</span> <br />
                <span class="text-primary">Equipamentos</span>
                <span class="text-muted">Hospitalares</span>
              </h1>
              <p style="color: hsl(217, 10%, 50.8%)">
                O SGEH é um sistema de gerenciamento de equipamentos
                hospitalares com o objetivo de fazer o controle dos empréstimos
                e reservas dos equipamentos dispostos nos setores do hospital.
              </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="card">
                <div class="card-body py-5 px-md-5">
                  <h3 class="mb-5" style="text-align: center">Entrar</h3>
                  <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example3"
                        >Usuário</label
                      >
                      <input
                        type="email"
                        id="form3Example3"
                        class="form-control"
                      />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4"
                        >Senha</label
                      >
                      <input
                        type="password"
                        id="form3Example4"
                        class="form-control"
                      />
                    </div>

                    <!-- Profile input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="">Você é:</label><br />
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="inlineRadio0"
                          value="option1"
                        />
                        <label class="form-check-label" for="inlineRadio1"
                          >Administrador</label
                        >
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="inlineRadio1"
                          value="option1"
                        />
                        <label class="form-check-label" for="inlineRadio1"
                          >Colaborador Responsável</label
                        >
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="inlineRadio2"
                          value="option2"
                        />
                        <label class="form-check-label" for="inlineRadio2"
                          >Colaborador</label
                        >
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="inlineRadio3"
                          value="option3"
                        />
                        <label class="form-check-label" for="inlineRadio3"
                          >Técnico</label
                        >
                      </div>
                    </div>
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="button">
                        Acessar
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <section></section>
    <!-- Section: Design Block -->
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
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
