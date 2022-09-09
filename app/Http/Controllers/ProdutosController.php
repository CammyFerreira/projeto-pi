<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(){
        //direciona para o HTML
        return view('produto.index');
    }

    public function create(){
        return view('produto.criar');
    }

    public function store(Request $request){
        Produto::create($request->all());
        return redirect(route('produto.index'));
    }
}
