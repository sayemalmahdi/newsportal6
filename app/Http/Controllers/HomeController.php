<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function NewsDetails($id,$category_name,$title){
        $news=DB::table('news')
                ->join('categories','news.cat_id','categories.id')
                ->join('subcategories','news.subcat_id','subcategories.id')
                ->join('districts','news.dist_id','districts.id')
                ->join('subdistricts','news.subdist_id','subdistricts.id')                
                ->select('news.*','categories.category_name','subcategories.subcategory_name','districts.district_name','subdistricts.subdistrict_name')
                ->where('news.id',$id)
                ->first();
        return view('frontend.home.single_page_view_news',compact('news'));
    }


}
