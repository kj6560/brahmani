<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function loadPage(Request $request){
        return view('frontend.dynamic_page',['settings'=>$request->settings]);
    }
    public function loadProductCategory(Request $request,$id){

        $product_category = ProductCategory::find($id);
        $category_products = Product::where('product_category', $id)->get();
        return view('frontend.dynamic_cat_page', ['settings'=>$request->settings,'category'=>$product_category,'category_products'=>$category_products]);
    }
}
