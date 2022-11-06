<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/templatemo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('css')

</head>
<body>
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="../"><img src="/img/dark.png" alt="B4F_logo" width="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" href="../">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Categorias</a>
                        </li>
                    </ul>

                    <form class="d-flex me-auto w-50 ms-4" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar eventos, shows, teatros.." aria-label="Search">
                        <button class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search" id="magnifying-glass"></i>
                        </button>
                    </form>
                    <a class="nav-icon position-relative text-decoration-none me-2" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down mr-1 fa-2x" id="cart"></i>
                    </a>
                    <h3>
                        @if (Auth::user())
                            {{ Auth::user()->USUARIO_NOME }}
                            <a class="btn" id="btnLogout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a class="btn me-2" href="{{route('login')}}" id="btnLogin">Entre</a>
                            <a class="btn" href="{{route('register')}}" id="btnSign">Cadastre-se</a>

                        @endif

                    </h3>
                </div>
            </div>
        </nav>

        @yield('main')

        <footer id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <a href="#"><img src="/img/dark.png" alt="B4F_logo" width="80"></a>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Rua sobe e desce
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">123456789</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Categorias</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Shows</a></li>
                        <li><a class="text-decoration-none" href="#">Teatro</a></li>
                        <li><a class="text-decoration-none" href="#">Infantil</a></li>
                        <li><a class="text-decoration-none" href="#">Stand-up comedy</a></li>
                        <li><a class="text-decoration-none" href="#">Eventos</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Cidades</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">São Paulo</a></li>
                        <li><a class="text-decoration-none" href="#">Belo Horizonte</a></li>
                        <li><a class="text-decoration-none" href="#">Rio de Janeiro</a></li>
                        <li><a class="text-decoration-none" href="#">Salvador</a></li>
                        <li><a class="text-decoration-none" href="#">Campinas</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>

</body>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/templatemo.js"></script>
</html>
