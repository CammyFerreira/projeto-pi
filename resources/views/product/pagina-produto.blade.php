@extends('layout')
@section('main')


    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="col-lg-12" id="ajusteP" href="{{route('product.show', $product->PRODUTO_ID) }}">
                                    @if (isset($product->imagem[1]))
                                        <img src="{{$product->imagem[1]->IMAGEM_URL}}" height="300" class="card-img-top" alt="...">
                                    @else
                                        <img src="/img/comic-con.png" height="300" class="card-img-top" alt="...">
                                    @endif
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

                                        Quantidade: <input type="number" id="quantidade" name="qtd" value="1" min="1" max="{{$product->estoque->PRODUTO_QTD}}">

                                    <div class="col-auto">

                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <button type="submit">Comprar</button>
                                    <div class="col d-grid">
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
