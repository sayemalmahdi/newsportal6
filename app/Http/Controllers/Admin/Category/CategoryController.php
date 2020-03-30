<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;

class CategoryController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function category(){
    	$category=Category::all();
    	return view('admin.category.category',compact('category'));
    }

    public function storecategory(Request $request){
    	$validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:75',
        // 'category_icon' => 'required',
    	]);

        // $data=array();
        // $data['category_name']=$request->category_name;
        // DB::table('categories')->insert($data);



        // $data=array();
        // $data['category_name']=$request->category_name;
        // $image=$request->file('category_icon');
        // if($image) {
        //     $image_name=date('d-m-y_H_s_i');
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     $image_full_name=$image_name.'.'.$ext;
        //     $upload_path='public/media/category/';
        //     $image_url=$upload_path.$image_full_name;
        //     $success=$image->move($upload_path,$image_full_name);

        //     $data['category_icon']=$image_url;
        //     $category=DB::table('categories')
        //         ->insert($data);
        //     $notification=array(
        //         'message'=>'Category Inserted Succesfully',
        //         'alert-type'=>'success'
        //     );
        // return redirect()->back()->with($notification);
        // }else{
        //     $category=DB::table('categories')
        //         ->insert($data);
        //     $notification=array(
        //         'message'=>'Done',
        //         'alert-type'=>'success'
        //     );
        // return redirect()->back()->with($notification);
        // }

    	$category = new Category();
    	$category ->category_name=$request->category_name;
    	$category ->save();

    	$notification=array(
    		'message'=>'Category Inserted Succesfully',
    		'alert-type'=>'success'
    	);
    	return redirect()->back()->with($notification);
    }



    
}
