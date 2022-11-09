<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        //direciona para o HTML

        $search = request('search');
        if($search){
            $products = Product::where([
                ['produto_nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $products = Product::all();
        }

        return view('home', ['products' => $products, 'serach' => $search]);
    }

    public function show(Product $product){
        return view('product.pagina-produto')->with('product', $product);
    }

}
