<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{

    static public function index()
    {
        return Category::all();
        //$categories = Category::all();

        //dd($categories);

        //return view('home', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Category $category){
        $category = Category::findOrFail($category);

        return view('category.show')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        //
    }
}
