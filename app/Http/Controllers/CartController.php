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

    public function store(Product $product)
    {
        Cart::create($product->all());
        session()->flash('success', 'Produto foi adicionado no carrinho!');
        return redirect(route('product.index')); 
    }

    public function destroy($id)
    {
        $product->delete();
        session()->flash('success', 'Item foi removido do carrinho!');
        return redirect(route('product.index'));
    }
}
