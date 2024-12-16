<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynamicPageController extends Controller
{
        public function loadPage(Request $request)
    {
        return view('frontend.dynamic_page',['settings'=>$request->settings]);

    }
    public function loadProductCategory(Request $request,$id){

        $product_category = ProductCategory::find($id);
        $category_products = Product::leftJoin('product_images as pi','pi.product_id','=','products.id')
                            ->where('product_category', $id)
                            ->select('products.*', 'pi.image as image','pi.image_alias as image_alias')
                            ->where('pi.image_status',1)
                            ->where('products.product_status',1)
                            ->get();
        dd($category_products);
        return view('frontend.dynamic_cat_page', ['settings'=>$request->settings,'category'=>$product_category,'category_products'=>$category_products]);
    }
}
