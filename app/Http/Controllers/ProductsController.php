<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    private $qtdPorPagina = 6;

    public function index(Request $request ){

        //direciona para o HTML
        if(isset($request->search)){
            $search = request('search');
            if($search){
                $products = Product::where([
                    ['produto_nome', 'like', '%'.$search.'%']
                ])->paginate($this->qtdPorPagina);
            }else{
                $products = Product::all();
            }
    
            return view('home', ['products' => $products, 'search' => $search]);
        }

        
        //dd($request->search);

        $products = Product::orderBy('PRODUTO_ID', 'ASC')->paginate($this->qtdPorPagina);

        return view('home', compact('products'))
                ->with('i', ($request->input('page', 1)-1)* $this->qtdPorPagina);


    }

    public function show(Product $product){
        return view('product.pagina-produto')->with('product', $product);
    }

}
