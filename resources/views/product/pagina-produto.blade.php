@extends('layout')
@section('main')


    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="rounded" src="/img/banner1.jpg" alt="Card image cap" id="product-detail">
                    </div>
                </div>

                @if (session('success'))
                    <h1>{{session('success')}}</h1>
                @endif

                <div class="col-lg-7 mt-5">
                    <div class="card" id="card">
                        <div class="card-body">
                            <h1 class="h2">{{$product->PRODUTO_NOME}}</h1>
                            <p
                            @if($product->PRODUTO_DESCONTO > 0)
                            class="h3 py-2 text-decoration-line-through"
                            @else
                            class= "h3 py-2"
                            @endif
                            >
                            R${{$product->PRODUTO_PRECO}}
                            </p>
                            @if($product->PRODUTO_DESCONTO > 0)
                                <p>{{$product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO}}</p>
                            @endif
                            <h6>Descrição:</h6>
                            <p>{{$product->PRODUTO_DESC}}</p>

                            <form action="{{route('cart.store', $product->PRODUTO_ID)}}" method="POST">
                                @csrf
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="col-auto">

                                        Quantidade: <input type="number" id="quantidade" name="qtd">

                                    <div class="col-auto">

                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <button type="submit">Comprar</button>
                                    <div class="col d-grid">
                                    @if (Auth::user())
                                        <a class="btn btn-lg" name="submit" id="btnBuy" href="{{route('cart.index')}}">Comprar</a>
                                    @else
                                        <a class="btn btn-lg" name="submit" id="btnBuy" href="{{route('login')}}">Comprar</a>
                                    @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
