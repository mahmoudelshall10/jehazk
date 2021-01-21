<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category as category;
use Session;
use Redirect;
use Validator;

class CategoryController extends Controller
{
    	public function all_category(){
		$all_category = category::whereNull('fk_parent_id')->get();
		return view('backend_layout.category.all_category')->with('all_category',$all_category);
	}
    
    public function add_category(){
    	return view('backend_layout.category.add_category');
    }

    public function save_category(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' =>   'required|string',
            'category_image'=> 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/add-category')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->category_image) ){
        $image=$request->category_image;
	    $path=$image->store('category'); }


        $new_category = new category();
        $new_category->name=$request->name;
        $new_category->image =$path;
        $new_category->save();

        return redirect('/category')->with('message','category successfully added');


    }

    public function unactive_category($id){

        category::where('pk_id', $id)
	           ->update(['status' => 0]);

        return redirect('/category')->with('message','category successfully Blocked');
    }


    public function active_category($id){
        category::where('pk_id', $id)
	           ->update(['status' => 1]);

        return redirect('/category')->with('message','category successfully Active');
    }

    public function edit_category($id){

        $category = category::find($id);
        return view('backend_layout.category.edit_category')->with('category',$category);
        
    }

    public function update_category(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'category_image'=> 'mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/edit-category/'. $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        if(isset($request->category_image) ){
        $image=$request->category_image;
	    $path=$image->store('category'); 
        
        $edit_category = category::find($id);
        $edit_category->name=$request->name;
        $edit_category->image =$path;
        $edit_category->update();

	    }else{
	    $edit_category = category::find($id);
        $edit_category->name=$request->name;
        $edit_category->update();
	    }
	    

        return redirect('/category')->with('message','category successfully update');

      


    }
    public function delete_category($id){

           $category = category::find($id);
           $category->delete();
           
           return redirect('/category')->with('message','category successfully delete');

    }

     public function show_product($id){
        $all_category = category::where('pk_id',$id)->whereNull('fk_parent_id')->with('product')->get();
        $objSubcategory = category::where('pk_id',$id)->get();
      
        return view('backend_layout.category.show_product',compact('all_category','objSubcategory'));
    }

    public function unpopular_category($id){

        category::where('pk_id', $id)
             ->update(['popular' => 0]);
      
        return redirect()->back()->with('message','Unpopular');
      }
      
      
      public function popular_category($id){
      
      
        category::where('pk_id', $id)
             ->update(['popular' => 1]);
      
        return redirect()->back()->with('message','Popular');
      }

      public function unstar_category($id){

        category::where('pk_id', $id)
             ->update(['star' => 0]);
      
        return redirect()->back()->with('message','Unimportant');
      }
      
      
      public function star_category($id){
      
      
        category::where('pk_id', $id)
             ->update(['star' => 1]);
      
        return redirect()->back()->with('message','Star');
      }

}
