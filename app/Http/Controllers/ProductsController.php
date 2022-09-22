<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        //direciona para o HTML
        return view('home')->with('products', Product::all());
    }

    public function show(Product $product){
        return view('product.pagina-produto')->with('product', $product);
    }

}
