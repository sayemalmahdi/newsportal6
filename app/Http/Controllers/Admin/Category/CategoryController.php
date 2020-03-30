<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Model\Admin\District;
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
    		'message'=>'Category Inserted Successfully',
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

    public function district(){
        $district=District::all();
        return view('admin.category.district',compact('district'));
    }

    public function StoreDistrict(Request $request){
        $validatedData = $request->validate([
        'district_name' => 'required|unique:districts|max:75',
        ]);

        

        $district = new District();
        $district ->district_name=$request->district_name;
        $district ->save();

        $notification=array(
            'message'=>'District Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function DeleteDistrict($id){       
        DB::table('districts')->where('id',$id)->delete();
        $notification = array(
            'message'=>'District Successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditDistrict($id){
        $district = DB::table('districts')->where('id',$id)->first();
        return view('admin.category.edit_district',compact('district'));
    }

    public function UpdateDistrict(Request $request,$id){
        $validatedData = $request->validate([
        'district_name' => 'required|max:75',
        ]);

        
        $data=array();
        $data['district_name']=$request->district_name;
        
        $update=DB::table('districts')->where('id',$id)->update($data);

        if ($update) {
            $notification=array(
                'message'=>'Successfully District Updated',
                'alert-type'=>'success'
            );
        return redirect()->route('admin.districts')->with($notification);
        }else{
            $notification=array(
                'message'=>'Nothing To Updated',
                'alert-type'=>'success'
            );
        return redirect()->route('admin.districts')->with($notification);
        } 
    }







    public function subcategories()
    {
        $category=DB::table('categories')->get();
        $subcat=DB::table('subcategories')
               ->join('categories','subcategories.category_id','categories.id')
               ->select('subcategories.*','categories.category_name')
               ->get();
        return view('admin.category.subcategory',compact('category','subcat'));
    }

    public function storesubcat(Request $request){
        $validatedData = $request->validate([
        'category_id' => 'required',
        'subcategory_name' => 'required|unique:subcategories|max:75',
        ]);

        $data=array();
        $data['category_id']=$request->category_id;
        $data['subcategory_name']=$request->subcategory_name;
        DB::table('subcategories')->insert($data);  
            $notification=array(
                'message'=>'Sub-Category Inserted',
                'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }

    




    
}
