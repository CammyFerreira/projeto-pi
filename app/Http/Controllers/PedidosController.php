<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\Product;
use Carbon\Carbon;


class PedidosController extends Controller
{
    public function index()
    {
        return view('cart.pedidos')->with('pedidos', Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
    }

    public function store(){

        $date = Carbon::createFromFormat('d/m/Y', date('d/m/Y'));

        $carrinho = Cart::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get()->all();

        $pedido = Pedido::create([
            'USUARIO_ID'  => Auth::user()->USUARIO_ID,
            'STATUS_ID'   => 1,
            'PEDIDO_DATA' => $date,
        ]);

        foreach ($carrinho as $produto) {
            $product = Product::find($produto->PRODUTO_ID);
            $totalItem = $produto->ITEM_QTD * ($product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO);
            PedidoItem::create([
                'PRODUTO_ID' => $produto->PRODUTO_ID,
                'PEDIDO_ID'  => $pedido->id,
                'ITEM_QTD'   => $produto->ITEM_QTD,
                'ITEM_PRECO' => $totalItem,
            ]);


        }

        Cart::where('USUARIO_ID', Auth::user()->USUARIO_ID)->update(['ITEM_QTD' => 0]);





        return view('cart.pedidos')->with('pedidos', Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
    }

}
