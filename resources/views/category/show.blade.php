@extends('layout')

@section('main')
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">{{$category->CATEGORIA_NOME}}</h1>
            </div>
        </div>
        <div class="row">
        <div id="produto-cat">
            @foreach($category->categorias as $product)

            <div id="imagem-produto-categoria">
                @if(isset($product->imagem[0]))
                <a href="{{route('category.show', $category->CATEGORIA_ID) }}">
                    <img src="{{$product->imagem[0]}}" height="300" class="card-img-top" alt="...">
                </a>
                @elseif(!empty($product->imagem[0]))
                    echo '<img src="../../public\img\imagem-indisponivel.jpg">'
                @endif
                <div id="produto-categoria">
                    <a href="" class="h2 text-decoration-none text-dark"></a>
                        <p class="cardName">{{$product->PRODUTO_NOME}}</p>
                        <a id="verMaisCat" class="btn" href="{{route('product.show', $product->PRODUTO_ID)}}">Ver Mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/templatemo.js"></script>
@endsection