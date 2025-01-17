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
        $filters = $request->all();
        $product_category = ProductCategory::find($id);
        $category_products = Product::
            where('product_status', 1)
            ->groupBy('id');
        if($id!=0){
            $category_products = $category_products->where('product_category', $id);
        }
        if((isset($filters['min_price']) && $filters['min_price'] != '') && ($filters['min_price'] != 1 && $filters['max_price'] != 1)){
            $category_products = $category_products->where('product_price', '>=', $filters['min_price']);
        }
        if(isset($filters['length']) && $filters['length'] != ''){
            $category_products = $category_products->where('length', $filters['length']);
        }
        if(isset($filters['width']) && $filters['width'] != ''){
            $category_products = $category_products->where('width', $filters['width']);
        }
        if(isset($filters['thickness']) && $filters['thickness'] != ''){
            $category_products = $category_products->where('thickness', $filters['thickness']);
        }
        if(isset($filters['color']) && $filters['color'] != ''){
            $category_products = $category_products->where('color', $filters['color']);
        }
        if(isset($filters['usage_of_panels']) && $filters['usage_of_panels'] != ''){
            $category_products = $category_products->where('usage_of_panel', $filters['usage_of_panels']);
        }
        if(isset($filters['instock']) && $filters['instock'] != ''){
            $category_products = $category_products->where('instock', $filters['instock']);
        }
        if(isset($filters['panel_included']) && $filters['panel_included'] != ''){
            $category_products = $category_products->where('panel_included', $filters['panel_included']);
        }
        $category_products = $category_products->paginate(12);
        return view('frontend.dynamic_cat_page', ['settings' => $request->settings, 'category' => $product_category, 'category_products' => $category_products,'filters' => $filters]);
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
        if(!$product){
            return redirect()->back()->with('error', 'Product not found');
        }
        return view('frontend.dynamic_product_page', ['settings' => $request->settings, 'product' => $product]);
    }
}
