<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [ProductsController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [ProductsController::class, 'show'])->name('product.show');

//public const HOME = '/dashboard'; --> Arquivo app\Providers\RouteServiceProvider.php


Route::get('/category', [CategoriesController::class, 'index'])->name('category.index');