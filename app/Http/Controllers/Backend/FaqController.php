<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\faq;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq=faq::all();
        return view('admin.basic.allfaq',['faq'=>$faq]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.basic.addnewfaq');

    //     return view('admin.basic.addnewfaq');
    //     Str::limit($value, $limit = 100, $end = '...')

    // str_limit() // is a helper
    // Str::words($value, $words = 100, $end = '...')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq=new faq;
        $faq->question=$request->question;
        $faq->ans=$request->answer;
        $faq->status='active';
        $faq->user_id=1;
        $faq->save();
       return redirect('/admin/faq');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $faq=faq::find($id);
        return view('admin.basic.editfaq',['faq'=>$faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $faq=faq::findorfail($request->id);
        $faq->question=$request->question;
        $faq->ans=$request->answer;
        $faq->status=$request->status;
        $faq->user_id=1;
        $faq->save();
        return redirect('/admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $faq=faq::findorfail($id);
        $faq->delete();
        return redirect('/admin/faq');
    }
}
