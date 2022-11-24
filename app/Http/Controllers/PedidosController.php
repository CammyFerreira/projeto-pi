<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordered;
use Illuminate\Support\Facades\Auth;


class PedidosController extends Controller
{

    public function index()
    {
        return view('cart.pedidos')->with('ordered', Ordered::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
