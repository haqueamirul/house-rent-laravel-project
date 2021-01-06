<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$divi=DB::table('divisions')->Join('countries','divisions.country_id','countries.id')->select('countries.country_en','divisions.*')->get();

    	$country=DB::table('countries')->get();
    	return view('backend.division.index',compact('divi','country'));
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'division_en' => 'required|unique:divisions|max:55',
	        'division_bn' => 'required|unique:divisions|max:55',
	        'country_id' => 'required',
	    ]);

	    $data=array();
	    $data['division_bn']=$request->division_bn;
	    $data['division_en']=$request->division_en;
	    $data['country_id']=$request->country_id;
	    DB::table('divisions')->insert($data);

	    $notification=array(
                        'messege'=>'Successfully Added',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //delete division
    public function destroy($id)
    {
    	DB::table('divisions')->where('id',$id)->delete();
    	$notification=array(
                        'messege'=>'Successfully Deleted',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //Edit=============

    public function edit($id)
    {
    	$divi=DB::table('divisions')->where('id',$id)->first();
    	$country=DB::table('countries')->get();
    	return view('backend.division.edit',compact('divi','country'));
    }


    //update===========

    public function update(Request $request,$id)
    {
    	$validatedData = $request->validate([
	        'division_en' => 'required|max:55',
	        'division_bn' => 'required|max:55',
	        'country_id' => 'required',
	    ]);

	    $data=array();
	    $data['division_bn']=$request->division_bn;
	    $data['division_en']=$request->division_en;
	    $data['country_id']=$request->country_id;
	    DB::table('divisions')->where('id',$id)->update($data);

	    $notification=array(
                        'messege'=>'Successfully Updated',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('divisions')->with($notification);
    }

}
