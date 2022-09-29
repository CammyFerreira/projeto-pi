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

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantidade:
                                                    <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn" id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-primary" id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn" id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-auto">

                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-lg" name="submit" value="buy" id="btnBuy">Comprar</button>
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
   