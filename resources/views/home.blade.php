    @extends('layout')
    @section('main')

    <div class="carousel">
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="/img/banner2.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h1 class="h1">Guns n' Roses</h1>
                                    <h3 class="h2">Venha viver esse momento</h3>
                                    <p>
                                        Uma das maiores bandas de rock está de volta ao Brasil.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="/img/banner2.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1">Lollapalooza Brasil</h1>
                                    <h3 class="h2">A experiência #LollaBR</h3>
                                    <p>
                                        Quatro palcos com o que tem de mais quente na música e muitas, mas muitas experiências pra você curtir. Esse é o Lollapalooza Brasil,
                                        um festival que ocupa os 600mil m² do Autódromo de Interlagos em São Paulo com música, arte, gastronomia, moda e muito mais.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="/img/banner3.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1">Rock in Rio</h1>
                                    <h3 class="h2">Garanta o seu lugar </h3>
                                    <p>
                                        Durante sete dias, o Parque Olímpico da Barra transforma-se na Cidade do Rock, com mais de 250 shows, 670 artistas e 500 horas de entretenimento.
                                        Além de grandes shows nos palcos, há apresentações de dança, games, experiências imersivas, ritmos e culturas do Brasil e do mundo!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col-md-12">
                <h2>Categorias</h2>

                <hr>
            </div>
        </div>

        <section class="container">


            <div class="creations-header">
            <link rel="stylesheet" href="/public/css/teste.css">
                <h2>Outros Eventos</h2>
                <button class="btn">Veja mais</button>
            </div>
            <ul class="creations">
                
                <li style="background: url(/img/teatro.jpg) center top/cover no-repeat"></li>
                <li style="background: url(/img/show.jpg) center top/cover no-repeat">Show</li>
                <li style="background: url(/img/standup.jpg) center top/cover no-repeat">Standup</li>
                <li style="background: url(/img/show.jpg) center top/cover no-repeat">Cinema</li>
                <li style="background: url(/img/teatro.jpg) center top/cover no-repeat">Teatro</li>
           
            </ul>
        </section>
    </div>
    
    
        <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Destaques</h1>
                    </div>
                </div>
                    <div class="row">
                    @foreach ($products as $product)
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card card-radius h-100">
                                <a href="shop-single.html">
                                    <img src="/img/comic-con.png" height="300" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <a href="shop-single.html" class="h2 text-decoration-none text-dark">{{$product->PRODUTO_NOME}}</a>
                                    <p class="card-text">
                                        {{$product->PRODUTO_DESC}}
                                    </p>
                                    <button class="btn-primary">Ver Mais</button>
                                </div>
                            </div>
                    </div>
                    @endforeach
            </div>
        </section>

        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/templatemo.js"></script>

        @endsection
