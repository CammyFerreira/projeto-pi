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
        <div class="col-12 col-md-4 mb-4">
            @foreach($category->categorias as $product)

            <div class="card card-radius h-100">
                @if(isset($product->imagem[0]))
                <a href="{{route('category.show', $category->CATEGORIA_ID) }}">
                    <img src="{{$product->imagem[0]}}" height="300" class="card-img-top" alt="...">
                </a>
                @endif

                <div class="card-body">
                    <a href="" class="h2 text-decoration-none text-dark"></a>
                        <p class="card-text">
                        {{$product->PRODUTO_NOME}}
                        </p>
                        <button class="btn-primary"><a href="{{route('product.show', $product->PRODUTO_ID)}}">Ver Mais</a></button>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/templatemo.js"></script>
@endsection