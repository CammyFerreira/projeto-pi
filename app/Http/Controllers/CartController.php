<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index')->with('cart', Cart::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
    }

    public function store(Request $product, $id)
    {
        Cart::create([
            "USUARIO_ID" => Auth::user()->USUARIO_ID,
            "PRODUTO_ID" => $id,
            "ITEM_QTD"   => $product->qtd
        ]
        );

        session()->flash('success', 'Produto foi adicionado no carrinho!');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $carrinho = Auth::user()->USUARIO_ID;
        $produtoCarrinho = Cart::where([['PRODUTO_ID','=', $request->pedido_id], ['USUARIO_ID', '=', $carrinho]])->first();

        if($request->removeBtn){        
            $produtoCarrinho->update([
                "ITEM_QTD" => 0 
            ]);
            
            session()->flash('success', 'Produto foi removido do carrinho!');

            return view('cart.index')->with('cart', Cart::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
        }  
        
        if(empty($produtoCarrinho) || empty($carrinho)){
            session()->flash('success', 'Produto foi não encontrado!');
        }
    }
}
