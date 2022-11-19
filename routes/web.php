<?php

use App\Http\Controllers\ProductController;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\EditProduct;
use App\Http\Livewire\ShowProducts;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/items/{category}/{subcategory}/{type}', function () {
    return view('items');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('admin');

    Route::get('products', ShowProducts::class);
    Route::get('/product/add', CreateProduct::class);
    Route::get('/product/edit/{product}', EditProduct::class);
});
