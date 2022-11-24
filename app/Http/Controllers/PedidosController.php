<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordered;
use Illuminate\Support\Facades\Auth;


class PedidosController extends Controller
{
    public function index()
    {
        return view('cart.pedidos')->with('pedidos', Ordered::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
    }

}
