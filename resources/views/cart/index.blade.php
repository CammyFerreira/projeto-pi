@extends('layout')
@section('main')
<script>
        function remove(route){
            if(confirm('Deseja remover o produto?'))
                window.location = route;
        }
    </script>
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        @endif
        <form method="POST" action="">
        @foreach ($cart as $item)
        <div class="divider"></div>
        <div class="row col s12 m12 l12">
                    <input type="hidden" name="pedido_id" value="">
                    <table>
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
                                        <input type="number" id="quantidade" name="qtd">
                                    </div>
                                    <a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?">Retirar produto</a>
                                </td>
                                <td>{{ $item->Produto->PRODUTO_NOME }}</td>
                                <td>{{ $item->Produto->PRODUTO_PRECO }}</td>
                                <td>{{ $item->Produto->PRODUTO_DESCONTO }}</td>
                                {{dd($item->Produto)}}
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endforeach
                @if (count($cart) > 0)

                <div>Total</div>

                <a>
                    <button>Fechar pedido</button>
                </a>
            </form>
        @endif
    </div>

</div>

@endsection
