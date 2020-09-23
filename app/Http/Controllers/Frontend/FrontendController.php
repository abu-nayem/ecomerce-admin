<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Subcatgory;
use App\Setting;
use App\Product;
use App\Banner;
use App\Slider;
use App\PrivacyTerms;
use App\faq;

class FrontendController extends Controller
{
    public function index(){
    	$category=Category::where('status','active')->get();
    	$banners=Banner::all();
    	$sliders=Slider::all();

    	return view('frontend.home.mainContent',['banners'=>$banners,'sliders'=>$sliders]);
    }
    public function contactUs(){
    	$contactInfo=Setting::first();
    	return view ('frontend.contact.contact_us',['contactInfo'=>$contactInfo]);
    }
    public function privacy(){
        $privacy=PrivacyTerms::where('id',2)->first();
        return view('frontend.shop.privacy_policy',['privacy'=>$privacy]);
    }
    public function terms(){
       
         $terms=PrivacyTerms::where('id',1)->first();
        return view('frontend.shop.terms_condition',['terms'=>$terms]);
    }
    public function faq(){
        $faq=faq::where('status','active')->get();
        return view('frontend.shop.faq',['faq'=>$faq]);
    }
    public function about(){
        return view('frontend.shop.about');
    }

}
