<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\AddCategories;
use App\Http\Livewire\AddSliderImages;
use App\Http\Livewire\AddSubCategories;
use App\Http\Livewire\AddSubCategoryTypes;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\EditProduct;
use App\Http\Livewire\ShowCategories;
use App\Http\Livewire\ShowProducts;
use App\Http\Livewire\ShowSliderImages;
use App\Http\Livewire\ShowSubCategories;
use App\Http\Livewire\ShowSubCategoryTypes;
use App\Models\Product;
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

Route::get('/', [HomeController::class,'index']);


Route::get('/items/{category}/{subCategory}/{subCategoryType}', function () {
    return view('items');
});
Route::get('/details/{category}/{subCategory}/{subCategoryType}/{productSlug}', [DeatilsController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('admin');

    Route::get('/category/add', AddCategories::class);
    Route::get('/categories', ShowCategories::class);

    Route::get('/sub-category/add', AddSubCategories::class);
    Route::get('/sub-categories', ShowSubCategories::class);

    Route::get('/sub-category-type/add', AddSubCategoryTypes::class);
    Route::get('/sub-categories-types', ShowSubCategoryTypes::class);


    Route::get('products', ShowProducts::class);
    Route::get('/product/add', CreateProduct::class);
    Route::get('/product/edit/{product}', EditProduct::class);
    Route::get('/actions', function () {
        return view('actions', ['products' => Product::all()]);
    });

    Route::get('slider-images', ShowSliderImages::class);
    Route::get('/slider-images/add', AddSliderImages::class);
});
