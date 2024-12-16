<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Pages;
use App\Models\ProductCategory;
use App\Models\State;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $product_categories = ProductCategory::where('pro_cat_active', 1)->orderBy('id','desc')->limit(9)->get();
        return view('frontend.index',['settings'=>$request->settings,'latest_categories'=>$product_categories]);
    }
    public function companyProfile(Request $request)
    {
        return view('frontend.companyProfile', ['settings'=>$request->settings]);
    }
    public function sitemap(Request $request)
    {
        return view('frontend.sitemap', ['settings'=>$request->settings]);
    }
    public function ourPresence(Request $request)
    {
        
        $countryWisePagesData = [];
        $countries = Country::where('is_active', 1)->get();
        foreach ($countries as $country) {
            $page = Pages::where('page_city', $country->country_name)->where('page_status', 1)->first();
            if(!empty($page->id)){
                $countryWisePagesData[$country->country_name] = $page->page_url;
            }
        }
        $states = State::where('is_active', 1)->get();
        foreach ($states as $state) {
            $page = Pages::where('page_city', $state->state_name)->where('page_status', 1)->first();
            if(!empty($page->id)){
                $stateWisePagesData[$state->state_name] = $page->page_url;
            }
        }
        $cities = City::where('is_active', 1)->get();
        foreach ($cities as $city) {
            $page = Pages::where('page_city', $city->city_name)->where('page_status',1)->first();
            if(!empty($page->id)){
                $cityWisePagesData[$city->city_name] = $page->page_url;
            }
        }
        
        
        return view('frontend.ourPresence', ['settings'=>$request->settings,'countryWiseData'=>$countryWisePagesData,'stateWiseData'=>$stateWisePagesData,'cityWiseData'=>$cityWisePagesData]);
    }
    public function contactUs(Request $request)
    {
        return view('frontend.contactUs', ['settings'=>$request->settings]);
    }
    public function pageError(Request $request)
    {
        return view('frontend.pageError');
    }
    
}
