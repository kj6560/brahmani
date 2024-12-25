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
        return view('frontend.dynamic_page', ['settings' => $request->settings]);

    }
    public function loadProductCategory(Request $request, $id)
    {

        $product_category = ProductCategory::find($id);
        $category_products = Product::
            where('product_status', 1)
            ->groupBy('id');
        if($id!=0){
            $category_products = $category_products->where('product_category', $id);
            
        }
        $category_products = $category_products->paginate(12);
        return view('frontend.dynamic_cat_page', ['settings' => $request->settings, 'category' => $product_category, 'category_products' => $category_products]);
    }
    public function loadProducts(Request $request, $id)
    {
        $product = Product::leftJoin('product_images as pi', 'pi.product_id', '=', 'products.id')
            ->where('products.id', $id)
            ->where('pi.image_status', 1)
            ->where('products.product_status', 1)
            ->select(
                'products.*',
                DB::raw('GROUP_CONCAT(pi.image SEPARATOR ",") as all_images'),
                DB::raw('GROUP_CONCAT(CONCAT(pi.image_alias) SEPARATOR ",") as image_aliases')
            )
            ->groupBy('products.id')
            ->first();
        return view('frontend.dynamic_product_page', ['settings' => $request->settings, 'product' => $product]);
    }
}
