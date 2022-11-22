<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('category.index')->with('categories', Category::all());
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Category $category){
        return view('category.index')->with('category', $category);
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
