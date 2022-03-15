<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Fonte do Google -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Logo da aba -->
    <link rel="shortcut icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">
  </head>
  <body>
    <header class="p-3 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/Logo.png') }}" alt="">
                </a>
                <!-- Butão ativado quando a tela estiver pequena -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links que vão aparecer na tela quando estivre grande -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="float-left">
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
                            <li class="nav-item">
                                <a class="nav-link" href="/Imoveis">Imoveis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Imoveis/Criar">Adicionar um imóvel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="float-right">
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboard">Minha conta</a>
                                </li>
                                <li class="nav-item">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">Cadastrar</a>
                                </li>
                            @endguest
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="pt-4 my-md-10 pt-md-3 border-top bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-1 col-md">
                    <span class="text-muted"> SIA © 2022</span>
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


    <!-- Java Script da aplicação -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Script necessário para o bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Importação 1 dos ícones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- Importação 2 dos ícones -->
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
