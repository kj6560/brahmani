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
        if (!empty($settings) && $settings != null) {
            $attr = $settings->getAttributes();
            foreach ($attr as $key => $value) {
                $allSettings[$key] = $value;
            }
        }
        $productCategories = ProductCategory::where('pro_cat_active', 1)->get();

        $allSettings['product_categories'] = $productCategories;
        $request->merge(['settings' => $allSettings]);
        return $next($request);

    }
}
