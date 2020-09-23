<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Size;
use App\Color;
class VariableControler extends Controller
{
    //
    public function index(){
    	$sizes=Size::all();
    	$colors=Color::all();
    	return view('admin.product.variable',['sizes'=>$sizes,'colors'=>$colors]);
    }
    public function store(Request $request){
    	$size=new Size;
    	$size->size=$request->size_name;
    	$size->status='active';
    	$size->user_id=1;
    	$size->save();
    	return back();
    }
    public function updateSize(Request $request){
    	$size=Size::find($request->size_id);
    	$size->size=$request->size_name;
    	$size->status='active';
    	$size->user_id=1;
    	$size->save();
    	return back();
    }
    public function deletSize($id){

    }
    public function color(Request $request){
    	$color=new Color;
    	$color->color=$request->color_name;
    	$color->status='active';
    	$color->user_id=1;
    	$color->save();
    	return back();
    }
    public function updateColor(Request $request){
    	$color=Color::find($request->color_id);
    	$color->color=$request->color_name;
    	$color->status='active';
    	$color->user_id=1;
    	$color->save();
    	return back();
    }

}
