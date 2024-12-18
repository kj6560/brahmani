<?php

namespace App\Http\Middleware;

use App\Models\Pages;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Sliders;
use App\Models\WebsiteSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class settings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allSettings = [];
        //header search
        if (isset($request->s)) {
            $query = $request->s;
            if (strlen($query) > 2) {
                $product = Product::join('product_category as pc', 'pc.id', '=', 'products.product_category')
                    ->select(
                        'products.id as id',
                        'products.product_name as product_name',
                        'products.product_banner as product_banner',
                        'products.product_description as product_description',
                        'pc.pro_cat_name as category_name'
                    )
                    ->where('products.product_name', 'like', '%' . $query . '%')
                    ->get();
                $allSettings['search'] = $product;
            }
        }
        //fetch general website settings
        $settings = WebsiteSetting::where('is_active', 1)->first();
        if (!empty($settings) && $settings != null) {
            $attr = $settings->getAttributes();
            foreach ($attr as $key => $value) {
                $allSettings[$key] = $value;
            }
        }
        //fetch product categories for menu
        $productCategories = ProductCategory::where('pro_cat_active', 1)->orderBy('product_category_order','asc')->get();
        $allSettings['product_categories'] = $productCategories;
        //page settings
        $current_url = parse_url(url()->current());
        if (empty($current_url['path'])) {
            $page = Pages::where('page_url', null)->first();
        } else {
            $page = Pages::where('page_url', last(explode("/", $current_url['path'])))->first();
        }
        if (!empty($page->id)) {
            $allSettings['page_data'] = $page;
            
        }
        
        $request->merge(['settings' => $allSettings]);
        return $next($request);

    }
}
