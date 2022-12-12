<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\SliderImages;
use App\Models\SubCategory;
use App\Models\SubCategoryType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param Category $category
     * @param SubCategory $subCategory
     * @param SubCategoryType $subCategoryType
     * @return Response
     */
    public function index()
    {
         $slider = SliderImages::all();
        $products = Product::with('attributeValues.attribute', 'tags', 'subCategoryType.subCategory.category', 'multimedia')->inRandomOrder()->limit(5)->get();
        return view('home', compact('products','slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
