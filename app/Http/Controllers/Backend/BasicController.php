<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PrivacyTerms;

class BasicController extends Controller
{
    //
    public function index(){
    	$privacy=PrivacyTerms::all();
    	return view('admin.basic.privacy_policy_terms',['privacy'=>$privacy]);
    }
    public function store(Request $request){
    	$privacy_terms=new PrivacyTerms;
    	$privacy_terms->description=$request->description;    	
    	$privacy_terms->save();
    	return back();
    }
    public function edit($id){
    	$privacy_terms=PrivacyTerms::find($id);
    	return view('admin.basic.editPrivacyTerms',['privacy_terms'=>$privacy_terms]);
    }
    public function update(Request $request){
    	$privacy_terms=PrivacyTerms::findorfail($request->id);
    	$privacy_terms->description=$request->description;    	
    	$privacy_terms->save();
    	return redirect('/admin/basic/privacy');
    }
}
