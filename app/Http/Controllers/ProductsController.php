<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        //direciona para o HTML
        return view('product.index')->with('products', Product::all());
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect(route('product.index'));
    }

    function edit(Product $product){
        return view('product.edit')->with('product', $product);
    }

    function update(Product $product, Request $request){
        $product->update(['name' => $request->name]);
        return redirect(route('product.index'));
    }
}
