<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use Image;

class ExtraController extends Controller
{
    public function English()
    {
    	Session::get('lang');
    	session()->forget('lang');
    	Session()->put('lang','english');
    	return redirect()->back();
    }

    public function Bangla()
    {
    	Session::get('lang');
    	session()->forget('lang');
    	Session()->put('lang','bangla');
    	return redirect()->back();
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function properties()
    {
        return view('frontend.properties');
    }

    public function contact()
    {
        return view('frontend.contact');
    }


    //guest user post
    public function guestUser()
    {
        $category=DB::table('categories')->get();
        $country=DB::table('countries')->get();
        $division=DB::table('divisions')->get();
        $district=DB::table('districts')->get();
        $subdistrict=DB::table('subdistricts')->get();

        return view('frontend.userpost',compact('category','country','division','district','subdistrict'));
    } 


    //Store post
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cat_id' => 'required',
            'country_id' => 'required',
            'division_id' => 'required',
            'dist_id' => 'required',
            'subdist_id' => 'required',
            'title_en' => 'required',
            'desc_en' => 'required',
            'price_fixed' => 'required',
            'gas' => 'required',
            'area_en' => 'required',
            'fulladdress_en' => 'required',
            'phone_en' => 'required',
        ]);

        $data=array();
        $data['cat_id']=$request->cat_id;
        $data['user_id']=Auth::id();
        $data['country_id']=$request->country_id;
        $data['division_id']=$request->division_id;
        $data['dist_id']=$request->dist_id;
        $data['subdist_id']=$request->subdist_id;
        $data['title_en']=$request->title_en;
        $data['title_bn']=$request->title_bn;
        $data['bed_en']=$request->bed_en;
        $data['bath_en']=$request->bath_en;
        $data['belconi_en']=$request->belconi_en;
        $data['garage_en']=$request->garage_en;
        $data['price_en']=$request->price_en;
        $data['price_fixed']=$request->price_fixed;
        $data['gas']=$request->gas;
        $data['area_en']=$request->area_en;
        $data['fulladdress_en']=$request->fulladdress_en;
        $data['phone_en']=$request->phone_en;
        $data['email']=$request->email;
        $data['post_date']=date('d-m-Y');
        $data['post_month']=date('M');
        $data['status']=$request->status;


        // $images=$request->images;
        $images = $request->file('images');

           if ($images) {
                foreach ($images as $image) {

                    $image_one= uniqid().'.'.$image->getClientOriginalExtension();    
                    Image::make($image->getRealPath())->resize(500,310)->save('public/postimages/'.$image_one); 
                    $image[]='public/postimages/'.$image_one;
                    $data['image']=$image;
                     DB::table('propertyposts') ->insert($data);
                    $notification=array(
                         'messege'=>'Successfully Post Inserted ',
                         'alert-type'=>'success'
                        );
                    return Redirect()->back()->with($notification);
                    
                }
                
           }else{
             return Redirect()->back();
           }
           
    }

    
}
