<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Auth;


class NewsController extends Controller
{
    public function AddNews(){
    	$category=DB::table('categories')->get();
    	$district=DB::table('districts')->get();
    	return view('admin.news.add_news',compact('category','district'));
    }

    //subcategory collect by ajax request
    public function GetSubcat($cat_id)
    {
    	$cat = DB::table("subcategories")->where("category_id",$cat_id)->get();
        return json_encode($cat);
    }

    //subdistrict collect by ajax request
    public function GetSubDist($dist_id)
    {
        $dist = DB::table("subdistricts")->where("district_id",$dist_id)->get();
        return json_encode($dist);
    }

    public function StoreNews(Request $request){
        $data=array();
        $data['user_id']=Auth::user()->id;
        $data['cat_id']=$request->cat_id;
        $data['subcat_id']=$request->subcat_id;
        $data['dist_id']=$request->dist_id;
        $data['subdist_id']=$request->subdist_id;
        $data['title']=$request->title;
        $data['details']=$request->details;
        $data['video_link']=$request->video_link;
        $data['tags']=$request->tags;
        $data['top_section']=$request->top_section;
        $data['big_thumbnail']=$request->big_thumbnail;
        $data['small_thumbnail']=$request->small_thumbnail;
        $data['notice']=$request->notice;
        $data['published']=$request->published;
  
        $image_one=$request->image_one;

        if ($image_one) {
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(300,300)->save('public/media/news/'.$image_one_name);
                $data['image_one']='public/media/news/'.$image_one_name;

                $product=DB::table('news')
                          ->insert($data);
                    $notification=array(
                     'message'=>'Successfully News Inserted ',
                     'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                // return Redirect()->route('admin.all.product')->with($notification);
                
        }
        

        

    }




}
