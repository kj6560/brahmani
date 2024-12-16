<?php

namespace App\Http\Middleware;

use App\Models\Pages;
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
        $settings = WebsiteSetting::where('is_active', 1)->first();
        $allSettings = [];
        if (!empty($settings) && $settings !=null) {
            $attr = $settings->getAttributes();
            foreach ($attr as $key => $value) {
                $allSettings[$key] = $value;
            }
        }
        $current_url = parse_url(url()->current());
        if (empty($current_url['path'])) {
            $page = Pages::where('page_url', null)->first();
        } else {
            $cp_ar = explode("/", $current_url['path']);
            $check_url = !is_int(intval(end($cp_ar))) ? end($cp_ar) : prev($cp_ar) ;
            $page = Pages::where('page_url', $check_url)->first();
        }
        if (!empty($page->id)) {
            $productCategories = ProductCategory::where('pro_cat_active', 1)->get();
            
            $allSettings['product_categories'] = $productCategories;
            $allSettings['page_data'] = $page;
            $request->merge(['settings' => $allSettings]);
            return $next($request);
        } else {
            return redirect("/pageError");
        }

    }
}
