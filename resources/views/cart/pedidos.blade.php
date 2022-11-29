@extends('layout')
@section('main')


<h1 style="padding: 30px;">Meus Pedidos</h1>
@if (count($pedidos) == 0)
        <div style="padding:40px;">
            <p>Você não tem pedidos</p>
            <img src="/img/cart.png" width="250" height="250">
            <div>
            <a class="backButton" href="../">Voltar</a>
            </div>
        </div>
@endif
@foreach ($pedidos as $pedido)
    @foreach ($pedido->itens as $item)
        <div class="card mb-3" style="max-width: 540px; padding: 30px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$item->produto->imagem[0]->IMAGEM_URL}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Número do Pedido: {{$pedido->PEDIDO_ID}}</h5>
                <div class="row">
                    <h6>Data da compra: {{$pedido->PEDIDO_DATA}}</h6>
                </div>
                <p class="card-text">{{$item->produto->PRODUTO_NOME}}</p>

                <p class="card-text"><small class="text-muted">R$ {{$item->ITEM_PRECO}}</small></p>
                <a href="{{route('product.show', $item->produto->PRODUTO_ID) }}">
                <button class="btn btn-outline-danger btn-block btn-sm">Evento</button>
                </a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endforeach

@endsection
