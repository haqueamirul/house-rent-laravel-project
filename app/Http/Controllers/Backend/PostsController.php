<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    //all posts show here
    public function index()
    {
        $post=DB::table('propertyposts')
            ->join('categories','propertyposts.cat_id','categories.id')
            // ->join('countries','propertyposts.country_id','countries.id'); 
            // ->join('divisions','propertyposts.division_id','divisions.id'); 
            // ->join('districts','propertyposts.dist_id','districts.id'); 
            // ->join('subdistricts','propertyposts.subdist_id','subdistricts.id'); 
            ->select('propertyposts.*','categories.category_bn')
            ->get();
            return view('backend.posts.index',compact('post'));
    }

    //inser post
    public function create()
    {
    	$category=DB::table('categories')->get();
    	$country=DB::table('countries')->get();
    	$district=DB::table('districts')->get();

    	return view('backend.posts.create',compact('category','country','district'));

    }

    //Store post
    public function store(Request $request)
    {
        $relPath = 'public/postimages/';
        if (!file_exists(public_path($relPath))) {
            mkdir(public_path($relPath), 777, true);
        }

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


        $image=$request->image;

           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    
                Image::make($image->getRealPath())->resize(500,310)->save('public/postimages/'.$image_one);   
                $data['image']='public/postimages/'.$image_one;
                 DB::table('propertyposts') ->insert($data);
                $notification=array(
                     'messege'=>'Successfully Post Inserted ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
           }else{
             return Redirect()->back();
           }
           
    }


    //json data return
    public function GetSubcountry($country_id)
    {
        $divi=DB::table('divisions')->where('country_id',$country_id)->get();
        return response()->json($divi);
    }

    public function GetSubcat($dist_id)
    {
        $subdist=DB::table('subdistricts')->where('district_id',$dist_id)->get();
        return response()->json($subdist);
    }
}



