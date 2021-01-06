<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SubdistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

     public function index()
    {
    	$subdistrict=DB::table('subdistricts')->Join('districts','subdistricts.district_id','districts.id')->select('districts.district_en','subdistricts.*')->get();

    	$district=DB::table('districts')->get();
    	return view('backend.subdistrict.index',compact('subdistrict','district'));
    }


    //store=========
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'subdistrict_en' => 'required|unique:subdistricts|max:100',
	        'subdistrict_bn' => 'required|unique:subdistricts|max:100',
	        'district_id' => 'required',
	    ]);

	    $data=array();
	    $data['subdistrict_bn']=$request->subdistrict_bn;
	    $data['subdistrict_en']=$request->subdistrict_en;
	    $data['district_id']=$request->district_id;
	    DB::table('subdistricts')->insert($data);

	    $notification=array(
                        'messege'=>'Successfully Added',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //delete division
    public function destroy($id)
    {
    	DB::table('subdistricts')->where('id',$id)->delete();
    	$notification=array(
                        'messege'=>'Successfully Deleted',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //Edit=============

    public function edit($id)
    {
    	$subdistrict=DB::table('subdistricts')->where('id',$id)->first();
    	$district=DB::table('districts')->get();
    	return view('backend.subdistrict.edit',compact('subdistrict','district'));
    }

     //update===========

    public function update(Request $request,$id)
    {
    	$validatedData = $request->validate([
	        'subdistrict_en' => 'required|max:55',
	        'subdistrict_bn' => 'required|max:55',
	        'district_id' => 'required',
	    ]);

	    $data=array();
	    $data['subdistrict_bn']=$request->subdistrict_bn;
	    $data['subdistrict_en']=$request->subdistrict_en;
	    $data['district_id']=$request->district_id;
	    DB::table('subdistricts')->where('id',$id)->update($data);

	    $notification=array(
                        'messege'=>'Successfully Updated',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('subdistrict')->with($notification);
    }


}
