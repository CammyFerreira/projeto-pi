@extends('layout')
@section('main')
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Destaques</h1>
            </div>
        </div>
        <div class="row">
        @foreach ($categories as $cat)
        <div class="col-12 col-md-4 mb-4">
            <div class="card card-radius h-100">
                <a href="{{route('category.show', $cat->CATEGORIA_ID) }}">
                    <img src="/img/comic-con.png" height="300" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <a href="" class="h2 text-decoration-none text-dark">{{$cat->CATEGORIA_NOME}}</a>
                        <p class="card-text">
                            {{$cat->CATEGORIA_DESC}}
                        </p>
                        <button class="btn-primary"><a href="{{route('category.show', $cat->PRODUTO_ID) }}">Ver Mais</a></button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/templatemo.js"></script>
@endsection