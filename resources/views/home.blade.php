    @extends('layout')
    @section('main')

    <div class="carousel">
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                @if($produto = App\Models\Product::find(104))
                    <a href="{{route('product.show', $produto->PRODUTO_ID)}}" class="text-dark text-decoration-none container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="/img/primavera-sound.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                        <h1>{{$produto->PRODUTO_NOME}}</h1>
                                        <p>{{$produto->PRODUTO_DESC}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
                </div>

                <div class="carousel-item">
                @if($produto = App\Models\Product::find(87))
                    <a href="{{route('product.show', $produto->PRODUTO_ID)}}" class="text-dark text-decoration-none container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="/img/banner2.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                        <h1>{{$produto->PRODUTO_NOME}}</h1>
                                        <p>{{$produto->PRODUTO_DESC}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
                </div>

                <div class="carousel-item">
                @if($produto = App\Models\Product::find(103))
                    <a href="{{route('product.show', $produto->PRODUTO_ID)}}" class="text-dark text-decoration-none container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="/img/banner3.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                        <h1>{{$produto->PRODUTO_NOME}}</h1>
                                        <p>{{$produto->PRODUTO_DESC}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
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
        <div class="creations-header">
            
            <div class="row text-center mb-3">
                <div class="col-md-12">
                <h2>Categorias</h2>
                <hr id=mrCategory>
                @foreach($categories as $cat)
                    <a href="{{route('category.show', $cat->CATEGORIA_ID) }}" id="buttonCategory">{{ $cat->CATEGORIA_NOME }}</a>
                @endforeach
                </div>
            </div>
        </div>
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
                                <a href="{{route('product.show', $product->PRODUTO_ID) }}">
                                    @if (isset($product->imagem[0]))
                                        <img src="{{$product->imagem[0]->IMAGEM_URL}}" height="300" class="card-img-top" alt="...">
                                    @else
                                        <img src="/img/comic-con.png" height="300" class="card-img-top" alt="...">
                                    @endif

                                </a>
                                <div class="card-body">
                                    <a href="" class="h2 text-decoration-none text-dark">{{$product->PRODUTO_NOME}}</a>
                                    <p class="card-text">
                                        {{$product->PRODUTO_DESC}}
                                    </p>
                                    <a href="{{route('product.show', $product->PRODUTO_ID) }}">
                                        <button class="btn-primary">Ver Mais</button>
                                    </a>
                                </div>
                            </div>
                    </div>
                    @endforeach

                    {!! $products->links() !!}
            </div>
        </section>

        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/templatemo.js"></script>

        @endsection
