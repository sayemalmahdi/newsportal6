<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\DB;

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

        

    	$category = new Category();
    	$category ->category_name=$request->category_name;
    	$category ->save();

    	$notification=array(
    		'message'=>'Category Inserted Succesfully',
    		'alert-type'=>'success'
    	);
    	return redirect()->back()->with($notification);
    }

    public function DeleteCategory($id){
        // $data=DB::table('categories')->where('id',$id)->first();
        // $image=$data->category_icon;
        // unlink($image);
        
        DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'message'=>'Category Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditCategory($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));
    }

    public function UpdateCategory(Request $request,$id){
        $validatedData = $request->validate([
        'category_name' => 'required|max:75',
        ]);

        
        $data=array();
        $data['category_name']=$request->category_name;
        
        $update=DB::table('categories')->where('id',$id)->update($data);

        if ($update) {
            $notification=array(
                'message'=>'Successfully Category Updated',
                'alert-type'=>'success'
            );
        return redirect()->route('admin.categories')->with($notification);
        }else{
            $notification=array(
                'message'=>'Nothing To Updated',
                'alert-type'=>'success'
            );
        return redirect()->route('admin.categories')->with($notification);
        } 
    }



    
}
