<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Java Script da aplicação -->
    <!-- Fonte do Google -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <header class="p-3 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <!-- IMAGEM DA LOGO -->
                    LOGO
                </a>
                <!-- Butão ativado quando a tela estiver pequena -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links que vão aparecer na tela quando estivre grande -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/QuemSomos">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Corretores">Corretores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="pt-4 my-md-10 pt-md-5 border-top bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md">
                  <!--<img class="mb-2" src="" alt="" width="24" height="24">-->
                  <p class="text-muted">LOGO © 2022</p>
                </div>
                <div class="col-3 col-md">
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Voltar ao topo</a></li>
                  </ul>
                </div>
                <div class="col-3 col-md">
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="http://imoveislar.site/">Fonte</a></li>
                  </ul>
                </div>
                <div class="col-3 col-md">
                  <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="/QuemSomos">Quem somos</a></li>
                  </ul>
                </div>

              </div>
        </div>

      </footer>


    <!-- Script necessário para o bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Importação 1 dos ícones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- Importação 2 dos ícones -->
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
