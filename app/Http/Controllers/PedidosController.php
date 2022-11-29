<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Pedido;
use App\Models\PedidoItem;


class PedidosController extends Controller
{
    public function index()
    {
        return view('cart.pedidos')->with('pedidos', Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
    }

    public function store(Pedido $pedidos){

        $carrinho = Cart::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get()->all();

        $pedido = Pedido::create([
            'USUARIO_ID'  => Auth::user()->USUARIO_ID,
            'STATUS_ID'   => 1,
            'PEDIDO_DATA' => $pedidos->PEDIDO_DATA,
        ]);

        if ( isset($pedido->PEDIDO_ID) ) {
            foreach ($carrinho as $produto) {
                PedidoItem::create([
                    'PRODUTO_ID' => $produto->PRODUTO_ID,
                    'PEDIDO_ID'  => $pedido->PEDIDO_ID,
                    'ITEM_QTD'   => $produto->ITEM_QTD,
                    'ITEM_PRECO' => $produto->produto->PRODUTO_PRECO - $produto->produto->PRODUTO_DESCONTO
                ]);

        
        }
    }
}

}
