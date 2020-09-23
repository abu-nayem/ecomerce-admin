<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class Admincontroller extends Controller
{
    public function index(){

    	return view('admin.home.main');
    }
    public function user(){
    	return view('admin.user.newuser');
    }
    public function addUser(Request $request){
    		$user=new User;
    		$images = $request->file('image');
    		$user->name=$request->name;
    		$user->email=$request->email;
    		$user->address=$request->address;
    		$user->phone=$request->phone;
    		$user->status=$request->status;
    				if($images){
	            $orginalname=$images->getClientOriginalName();
	            $str=str_replace(' ','-', $orginalname);
	            $name=time().'_'.$str;
	            $images->move(public_path('images'), $name);                     
	            $imageUrl =$name;
	            $user->image=$imageUrl;

	        }
    		$user->user_type=$request->user_type;
    		$user->per_edit=$request->per_edit;
    		$user->per_delete=$request->per_delete;
    		$user->password=bcrypt($request->password);
    		$user->save();
    		return back();
    }
}
