<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category as subcategory;

use Session;
use Redirect;
use Validator;

class SubCategoryController extends Controller
{

	public function all_subcategory(){

		$all_subcategory = subcategory::whereHas('parent')
										->with('parent')
										->get();
		return view('backend_layout.subcategory.all_subcategory')->with('all_subcategory',$all_subcategory);
	}
    
    public function add_subcategory(){
        
        $all_category = subcategory::where('status',1)->get();
    	return view('backend_layout.subcategory.add_subcategory')->with('all_category' , $all_category);
    }

    public function save_subcategory(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' =>   'required|string',
            'fk_parent_id' =>   'required|numeric',
            'subcategory_image'=> 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/add-subcategory')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->subcategory_image) ){
        $image=$request->subcategory_image;
	    $path=$image->store('subcategory'); }


        $new_subcategory = new subcategory();
        $new_subcategory->name=$request->name;
        $new_subcategory->fk_parent_id=$request->fk_parent_id;
        $new_subcategory->image =$path;
        $new_subcategory->save();

        return redirect('/subcategory')->with('message','subcategory successfully added');


    }

    public function unactive_subcategory($id){

     subcategory::where('pk_id', $id)
	           ->update(['status' => 0]);

        return redirect('/subcategory')->with('message','subcategory successfully Blocked');
    }


    public function active_subcategory($id){
        subcategory::where('pk_id', $id)
	           ->update(['status' => 1]);

        return redirect('/subcategory')->with('message','subcategory successfully Active');
    }

    public function edit_subcategory($id){
        
        $all_category = subcategory::where('status',1)->get();

        $subcategory = subcategory::whereHas('parent')
										->with('parent')
										->where('pk_id',$id)
										->first();

        return view('backend_layout.subcategory.edit_subcategory')->with(['subcategory' => $subcategory,
                                                                          'all_category'=> $all_category]);
        
    }

    public function update_subcategory(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'fk_parent_id' =>   'required|numeric',
            'subcategory_image'=> 'mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/edit-subcategory/'. $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        if(isset($request->subcategory_image) ){
        $image=$request->subcategory_image;
	    $path=$image->store('subcategory'); 
        
        $edit_subcategory = subcategory::find($id);
        $edit_subcategory->name=$request->name;
        $edit_subcategory->fk_parent_id=$request->fk_parent_id;
        $edit_subcategory->image =$path;
        $edit_subcategory->update();

	    }else{
	    $edit_subcategory = subcategory::find($id);
        $edit_subcategory->name=$request->name;
        $edit_subcategory->fk_parent_id=$request->fk_parent_id;
        $edit_subcategory->update();
	    }
	    

        return redirect('/subcategory')->with('message','subcategory successfully update');

      


    }
    public function delete_subcategory($id){

           $subcategory = subcategory::find($id);
           $subcategory->delete();
           
           return redirect('/subcategory')->with('message','subcategory successfully delete');

    }

    public function GetsubCategory($pk_id)
    {
        $arrSubCategoryies = subcategory::where('fk_parent_id',$pk_id)->get();
        return response($arrSubCategoryies, 200) ;   /// json 
         
    }
   


}
