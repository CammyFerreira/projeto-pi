    @extends('layout')
    @section('main')

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/img/banner1.jpg" alt="">
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
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<div class="container">
    <div class="row text-center mb-3">
        <div class="col-md-12">
            <h2>Categorias</h2>

            <hr>
        </div>
    </div>
	<div class="row">
		<!-- Swiper -->
  <div class="swiper-container">
<div class="swiper-wrapper">
      <div class="swiper-slide">
          <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img"><img src="/img/show.jpg" width="260"></div>
                                <div class="card-body">
                                   <h5>Shows</h5>
                                   <h4 class="pt-1 pb-2">Saiba mais</h4>

                                   <button id="bt1" type= "button" class="btn btn-outline-danger btn-block btn-sm">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img"><img src="/img/teatro.jpg" width="260"></div>
                                <div class="card-body">
                                   <h5>Teatro</h5>
                                   <h4 class="pt-1 pb-2">Saiba mais</h4>

                                   <button type= "button" class="btn btn-outline-danger btn-block btn-sm">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img"><img src="/img/standup.jpg" width="260"></div>
                                <div class="card-body">
                                   <h5>Stand-up</h5>
                                   <h4 class="pt-1 pb-2">Saiba mais</h4>

                                   <button type= "button" class="btn btn-outline-danger btn-block btn-sm">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img"><img src="/img/show.jpg" width="260"></div>
                                <div class="card-body">
                                   <h5>Show</h5>
                                   <h4 class="pt-1 pb-2">Saiba mais</h4>


                                    <button type= "button" class="btn btn-outline-danger btn-block btn-sm">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
      </div>
      <div class="swiper-slide">

      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
  </div>

	</div>
</div>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Destaques</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="/img/banner1.jpg" height="300" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Guns n' Roses</a>
                            <p class="card-text">
                                Uma das maiores bandas de rock está de volta ao Brasil
                            </p>
                            <button>Ver Mais</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-90">
                        <a href="shop-single.html">
                            <img src="/img/banner2.jpg" height="300" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Lollapalooza Brasil</a>
                            <p class="card-text">
                                Esse é o Lollapalooza Brasil,
                                    um festival que ocupa os 600mil m² do Autódromo de Interlagos em São Paulo com música, arte, gastronomia, moda e muito mais.
                            </p>
                            <button>Ver Mais</button>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-90">
                        <a href="shop-single.html">
                            <img src="/img/product1.jpg" class="card-img-top" alt="..."height="220">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Brasil Game Show</a>
                            <p class="card-text">
                                A cada edição apresenta mais atrações para o público se divertir com milhares de estações, sejam máquinas arcade, plataformas mobile, PCs, óculos de realidade virtual, consoles, board games, card games ou qualquer outra forma jogar.
                            </p>
                            <button>Ver Mais</button>
                            <style>
                                button {
                                    background-color: #126E82;
                                    border-radius: 10px;
                                    border: none;
                                    color:white;

                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-90">
                        <a href="shop-single.html">
                            <img src="/img/comic-con.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Comic Con 2022</a>
                            <p class="card-text">
                                Daria para ficar o dia inteiro tentando definir o maior festival de cultura pop do planeta e não seria suficiente. A CCXP não é só um lugar físico, ela é uma ideia, um sentimento. É cada pessoa que se permite viver o épico.
                            </p>
                            <button>Ver Mais</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-90">
                        <a href="shop-single.html">
                            <img src="/img/comic-con.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Comic Con 2022</a>
                            <p class="card-text">
                                Daria para ficar o dia inteiro tentando definir o maior festival de cultura pop do planeta e não seria suficiente. A CCXP não é só um lugar físico, ela é uma ideia, um sentimento. É cada pessoa que se permite viver o épico.
                            </p>
                            <button>Ver Mais</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-90">
                        <a href="shop-single.html">
                            <img src="/img/comic-con.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Comic Con 2022</a>
                            <p class="card-text">
                                Daria para ficar o dia inteiro tentando definir o maior festival de cultura pop do planeta e não seria suficiente. A CCXP não é só um lugar físico, ela é uma ideia, um sentimento. É cada pessoa que se permite viver o épico.
                            </p>
                            <button>Ver Mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

@endsection

