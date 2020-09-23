<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Banner;
use App\Slider;
use Auth;
class SettingController extends Controller
{
    public function index(){
    		$setting=Setting::find(1);
    		return view('admin.setting.setting',['setting'=>$setting]);
    }
    public function update(Request $request){
    		$web_logo = $request->file('web_logo');
		    $web_icon = $request->file('web_icon');
            

    		$setting=Setting::find(1);
    		
    		if($web_logo){
	            $orginalname=$web_logo->getClientOriginalName();
	            $str=str_replace(' ','-', $orginalname);
	            $name=time().'_'.$str;
	            $web_logo->move(public_path('images'), $name);                     
	            $imageUrl =$name;
	            $setting->web_logo=$imageUrl;

	        }
            if($web_icon){
                $orginalname_one=$web_icon->getClientOriginalName();
                $str_one=str_replace(' ','-', $orginalname_one);
                $name_one=time().'_'.$str_one;
                $web_icon->move(public_path('images'), $name_one);                     
                $imageUrl_one =$name_one;
                $setting->web_icon=$imageUrl_one;

            }
    		$setting->web_name=$request->web_name;
    		$setting->address=$request->web_address;
    		$setting->city=$request->web_city;
    		$setting->email=$request->web_email;
    		$setting->telephone=$request->web_telephone;
    		$setting->phone=$request->web_phone;
    		$setting->phone_2=$request->web_phone_2;
    		$setting->short_description=$request->web_short_description;
    		$setting->save();
    		return back();
    }
    public function banner(){
    		$banners=Banner::all();
    		return view('admin.setting.bannerinfo',['banners'=>$banners]);
    }
    public function createBanner(Request $request){

	    	$image = $request->file('image');
	    	$banner=new Banner;
	    	$banner->title=$request->title;
	    	$banner->slugan=$request->slugan;
	    	$banner->link=$request->link;    	
	    	if($image){
		            $orginalname=$image->getClientOriginalName();
		            $str=str_replace(' ','-', $orginalname);
		            $name=time().'_'.$str;
		            $image->move(public_path('images'), $name);                     
		            $imageUrl =$name;
		           $banner->image=$imageUrl;

		        }
		    $banner->user_id=1;    
		    $banner->save();
		    return back();    

    }
    public function updateBanner(Request $request){
	    	$image = $request->file('update_image');
	    	$banner=Banner::find($request->banner_id);    	
	    	$banner->title=$request->banner_title;
	    	$banner->slugan=$request->slugan;
	    	$banner->link=$request->link;    	
	    	if($image){
		            $orginalname=$image->getClientOriginalName();
		            $str=str_replace(' ','-', $orginalname);
		            $name=time().'_'.$str;
		            $image->move(public_path('images'), $name);                     
		            $imageUrl =$name;
		           	$banner->image=$imageUrl;

		        }
		    $banner->user_id=1;    
		    $banner->save();
		    return back();
    }
    public function slider(){
    	$sliders=Slider::all();
    	return view('admin.setting.sliderinfo',['sliders'=>$sliders]);
    } 
    public function storeSlider(Request $request){
	    	$image = $request->file('slider_image');
	    	$slider=new Slider;
	    	$slider->slider_title=$request->slider_title;
	    	$slider->slider_slugan=$request->slider_slugan;
	    	$slider->short_text=$request->short_text;    	
	    	if($image){
		            $orginalname=$image->getClientOriginalName();
		            $str=str_replace(' ','-', $orginalname);
		            $name=time().'_'.$str;
		            $image->move(public_path('images'), $name);                     
		            $imageUrl =$name;
		           $slider->slider_image=$imageUrl;

		        }
		    $slider->user_id=1;    
		    $slider->save();
		    return back();  
    }
    public function updateSlider(Request $request){
    		$image = $request->file('update_image');
	    	$slider=Slider::find($request->slider_id);
	    	$slider->slider_title=$request->slider_title;
	    	$slider->slider_slugan=$request->slider_slugan;
	    	$slider->short_text=$request->short_text;    	
	    	if($image){
		            $orginalname=$image->getClientOriginalName();
		            $str=str_replace(' ','-', $orginalname);
		            $name=time().'_'.$str;
		            $image->move(public_path('images'), $name);                     
		            $imageUrl =$name;
		           $slider->slider_image=$imageUrl;

		        }
		    $slider->user_id=1;    
		    $slider->save();
		    return back(); 
    }
}
