@extends('layout')
@section('main')
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
                                        <a class="col l4 m4 s4" href="#" onclick="carrinhoRemoverProduto()">
                                            <i class="material-icons small">remove_circle_outline</i>
                                        </a>
                                        <span class="col l4 m4 s4"> {{ $item->ITEM_QTD }}</span>
                                        <a class="col l4 m4 s4" href="#" onclick="carrinhoAdicionarProduto()">
                                            <i class="material-icons small">add_circle_outline</i>
                                        </a>
                                    </div>
                                    
                                </td>
                                <td>{{ $item->Produto->PRODUTO_NOME }}</td>
                                <td>{{ $item->Produto->PRODUTO_PRECO }}</td>
                                <td>{{ $item->Produto->PRODUTO_DESCONTO }}</td>
                                <td>Total</td>
                            </tr>
                        </tbody>
                        <tfoot>
                        
                        </tfoot>
                    </table>
                    <button class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?" onclick="removeItem()" name="removeBtn" value="true">Retirar produto</button>
                </form>
        </div>
        @endif
        
        @endforeach
        @if (count($cart) > 0)
        <tr>
            <td colspan="3"></td>
            <td><strong>Total do pedido</strong></td>
            <td></td>
            <td>Total</td>
        </tr>
        @endif
            @endif
            @foreach ($cart as $item)
            <div class="divider"></div>
            <div class="row col s12 m12 l12">
                    <form method="POST" action="">

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
                                            <a class="col l4 m4 s4" href="#" onclick="carrinhoRemoverProduto()">
                                                <i class="material-icons small">remove_circle_outline</i>
                                            </a>
                                            <span class="col l4 m4 s4"> {{ $item->ITEM_QTD }}</span>
                                            <a class="col l4 m4 s4" href="#" onclick="carrinhoAdicionarProduto()">
                                                <i class="material-icons small">add_circle_outline</i>
                                            </a>
                                        </div>
                                        <a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?">Retirar produto</a>
                                    </td>
                                    <td>{{ $item->Produto->PRODUTO_NOME }}</td>
                                    <td>{{ $item->Produto->PRODUTO_PRECO }}</td>
                                    <td>{{ $item->Produto->PRODUTO_DESCONTO }}</td>
                                    <td>Total</td>
                                </tr>
                            </tbody>
                            <tfoot>


                            </tfoot>
                        </table>
                    </form>
            </div>
            @endforeach
            @if (count($cart) > 0)
            <tr>
                <td colspan="3"></td>
                <td><strong>Total do pedido</strong></td>
                <td></td>
                <td>Total</td>
            </tr>
            @endif
        </div>

    </div>

    @endsection
</main>

@yield('footer')

