@extends('layout')
@section('main')
@php
    $soma = 0;
@endphp
<script>
        function removeItem(route){
            if(confirm('Deseja remover o produto?'))
                window.location = route;
            }
    </script>
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<main>
    <div class="container">
        <div class="row">
            <h3>Carrinho de compras</h3>
            @if (count($cart) == 0)
            <div>
                <p>Seu carrinho de compras está vazio</p>
                <img src="/img/cart.png" width="250" height="250">
                <div>
                <a class="backButton" href="../">Voltar</a>
                </div>
            </div>
            </div>
            @endif
        <form method="POST" action="{{route('cart.pedidos')}}">
        @foreach ($cart as $item)
        @if($item->ITEM_QTD > 0)
        <div class="divider"></div>
        <div class="row col s12 m12 l12" id="">
                <form method="POST" action="{{route('cart.update')}}">
                    @csrf
                    <input type="hidden" name="pedido_id" value="{{$item->PRODUTO_ID}}">
                    <table id="">
                        <thead>
                            <tr>
                                <th colspan="2"></th>
                                <th>Produto</th>
                                <th>Valor</th>
                                <th>Desconto</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <img width="100" height="100" src="/img/banner2.jpg">
                                </td>
                                <td class="center-align">
                                    <div class="center-align">
                                        <input type="number" id="quantidade" name="qtd" value="1" min="1" value="{{$item->ITEM_QTD}}">
                                    </div>

                                </td>
                                <td>{{ $item->Produto->PRODUTO_NOME }}</td>
                                <td>{{ $item->Produto->PRODUTO_PRECO }}</td>
                                <td>{{ $item->Produto->PRODUTO_DESCONTO }}</td>

                                @php

                                $totalItem = $item->ITEM_QTD * ($item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO);
                                $soma += $totalItem;

                                @endphp

                                <td>{{ $totalItem }} </td>

                            </tr>
                        </tbody>
                    </table>
                    <button class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?" onclick="removeItem()" name="removeBtn" value="true">Retirar produto</button>
                </div>
                @endif
                @endforeach
                @if (count($cart) > 0)

                <div>Total do carrinho: {{$soma}}</div>


                <button type="submit">Fechar pedido</button>

                </form>
                 @endif
        </div>

    </div>

@endsection
</main>

@yield('footer')

