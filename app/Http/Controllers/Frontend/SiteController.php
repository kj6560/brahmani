<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\ContactQuery;
use App\Models\Country;
use App\Models\Pages;
use App\Models\ProductCategory;
use App\Models\State;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $product_categories = ProductCategory::where('pro_cat_active', 1)->orderBy('id', 'desc')->limit(9)->get();
        return view('frontend.index', ['settings' => $request->settings, 'latest_categories' => $product_categories]);
    }
    public function companyProfile(Request $request)
    {
        return view('frontend.companyProfile', ['settings' => $request->settings]);
    }
    public function sitemap(Request $request)
    {
        return view('frontend.sitemap', ['settings' => $request->settings]);
    }
    public function testimonial(Request $request)
    {
        return view('frontend.testimonial', ['settings' => $request->settings]);
    }
    public function contactUs(Request $request)
    {
        return view('frontend.contactUs', ['settings' => $request->settings]);
    }
    public function storeQuery(Request $request)
    {
        $defaultMessage = "To Get Best Quotes describe your requirements in detail like";
        $data = $request->all();
        if (!empty($request->input('address'))) {
            return back()->with('error', 'Spam detected. Submission rejected.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^[6-9]\d{9}$/',
            'message' => 'required|string|min:10|max:2000',
        ]);
        if (str_contains($data['message'],$defaultMessage)) {
            return redirect()->back()->with('error', 'Please describe your requirements in detail');
        }
        if(!$this->validateMobileNumber($data['phone'])){
            return redirect()->back()->with('error', 'Please enter valid mobile number');
        }
        if(empty($data['name'])){
            return redirect()->back()->with('error', 'Please enter your name');
        }
        $query = new ContactQuery();
        $query->name = $data['name'];
        $query->number = $data['phone'];
        $query->message = $data['message'];
        if($query->save()){
            return redirect()->back()->with('success', 'Your query has been submitted successfully. We will get back to you soon');
        }else{
            return redirect()->back()->with('error', 'Something went wrong. Please try again later');
        }
    }
    public function validateMobileNumber($number) {
        // Regular expression for Indian mobile numbers
        $pattern = '/^[6-9]\d{9}$/';
    
        if (preg_match($pattern, $number)) {
            return true;
        } else {
            return false;
        }
    }
    public function pageError(Request $request)
    {
        return view('frontend.pageError');
    }

}
