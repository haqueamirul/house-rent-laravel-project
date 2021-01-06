<?php

namespace App\Http\Controllers\Backend; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function countries()
    {
    	$countries = DB::table('countries')->get();
    		return view('backend.country.index',compact('countries'));
    }

    public function stores(Request $request)
    {
    	$validatedData = $request->validate([
	        'country_en' => 'required|unique:countries|max:55',
	        'country_bn' => 'required|unique:countries|max:55',
	    ]);

	    $data=array();
	    $data['country_bn']=$request->country_bn;
	    $data['country_en']=$request->country_en;
	    DB::table('countries')->insert($data);

	    $notification=array(
                        'messege'=>'Successfully Added',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //delete country
    public function destroy($id)
    {
    	DB::table('countries')->where('id',$id)->delete();
    	$notification=array(
                        'messege'=>'Successfully Deleted',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    //Edit=============

    public function edit($id)
    {
    	$country=DB::table('countries')->where('id',$id)->first();
    	return view('backend.country.edit',compact('country'));
    }

    //update===========

    public function update(Request $request,$id)
    {
    	$validatedData = $request->validate([
	        'country_en' => 'required|max:55',
	        'country_bn' => 'required|max:55',
	    ]);

	    $data=array();
	    $data['country_bn']=$request->country_bn;
	    $data['country_en']=$request->country_en;
	    DB::table('countries')->where('id',$id)->update($data);

	    $notification=array(
                        'messege'=>'Successfully Updated',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('countries')->with($notification);
    }


}
