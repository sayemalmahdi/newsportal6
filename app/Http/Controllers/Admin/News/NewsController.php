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
        $validatedData = $request->validate([
        'cat_id' => 'required',
        'subcat_id' => 'required',
        // 'dist_id' => 'required',
        // 'subdist_id' => 'required',
        'title' => 'required',
        'details' => 'required',
        'image_one' => 'required',
        ]);

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

   

    public function AllNews(){
        $news=DB::table('news')
                ->join('categories','news.cat_id','categories.id')
                ->join('subcategories','news.subcat_id','subcategories.id')
                // ->join('districts','news.dist_id','districts.id')
                // ->join('subdistricts','news.subdist_id','subdistricts.id')
                // ->select('news.*','categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name')
                ->select('news.*','categories.category_name','subcategories.subcategory_name')
                ->orderBy('id', 'desc')
                ->paginate(10);
              
        return view('admin.news.all_news',compact('news'));

    }

    public function Inactive($id)
    {
         DB::table('news')->where('id',$id)->update(['published'=> 0]);
         $notification=array(
                     'message'=>'Successfully News Inactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);  
    }

    public function Active($id)
    {
         DB::table('news')->where('id',$id)->update(['published'=> 1]);
         $notification=array(
                     'message'=>'Successfully News Aactive ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);
    }

    public function DeleteNews($id)
    {
        $news=DB::table('news')->where('id',$id)->first();
        $image1=$news->image_one;
        
        if ($image1) {
            unlink($image1);
            DB::table('news')->where('id',$id)->delete();
            $notification=array(
                         'message'=>'Successfully News Deleted ',
                         'alert-type'=>'success'
                        );
            return Redirect()->back()->with($notification);
            }
    }

    public function ViewNews($id){
        $news=DB::table('news')
                ->join('categories','news.cat_id','categories.id')
                ->join('subcategories','news.subcat_id','subcategories.id')
                ->join('districts','news.dist_id','districts.id')
                ->join('subdistricts','news.subdist_id','subdistricts.id')                
                ->select('news.*','categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name')
                ->where('news.id',$id)
                ->first();
        return view('admin.news.view_news',compact('news'));

    }

    public function EditNews($id)
    {
        $news=DB::table('news')->where('id',$id)->first();

        return view('admin.news.edit_news',compact('news'));
    }
    

    





}
