<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoryType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ItemsController extends Controller
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
    public function index($category, $subCategory = null, $subCategoryType = null)
    {
        // $category = (new Category)->where('slug', $category)->first();
        // $products = $category->products;
         $products =  Product::all();
        if (isset($category)) {

            $category = (new Category)->where('slug', $category)->first();
            $products = Product::with('multimedia', 'attributeValues.attribute', 'tags','subCategoryType.subCategory.category')->where('fk_category_id', $category->id)->get();
        }  if (isset($subCategory)) {
            $category = (new SubCategory)->where('slug', $subCategory)->first();
             $products = Product::with('multimedia', 'attributeValues.attribute', 'tags','subCategoryType.subCategory.category')->where('fk_sub_category_id', $category->id)->get();
        }  if (isset($subCategoryType)) {
            $category = (new SubCategoryType)->where('slug', $subCategoryType)->first();
             $products = Product::with('multimedia', 'attributeValues.attribute', 'tags','subCategoryType.subCategory.category')->where('fk_sub_category_type_id', $category->id)->get();
        }
        // $product =  Product::where('multimedia')->where('slug', $productSlug)->first();
        // $similarProducts =  Product::whereHas('subCategoryType', function ($q) use ($subCategoryType) {
        //     $q->where('slug', $subCategoryType);
        // })->where('slug', $productSlug)->get();
        return view('items', compact('products','category'));
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
