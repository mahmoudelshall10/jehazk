<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category as category;
use App\Model\Manufacture as manufacture;
use App\Model\Category as subcategory;
use App\Model\Product as product;
use App\Model\Category_Product as cp;


use Session;
use Redirect;
use Validator;

class VendorController extends Controller
{
  /**************************************dashboard******************************************/

   public function all_count(){
        $all_category = category::whereNull('fk_parent_id')->get()->count();
        // print_r($all_category);die;
        $all_product_active = product::where('status',1)->where('fk_vendor_id',auth()->guard('vendor')->user()->id)->count();
        // print_r($all_product_active);die;
        $all_product_inactive =product::where('status',0)->where('fk_vendor_id',auth()->guard('vendor')->user()->id)->count(); 
        // print_r($all_product_inactive);die;
        $all_manufacture = manufacture::count();
        // print_r($all_manufacture);die;
       
        return view('vendor_layout.dashboard',compact('all_category','all_product_active' ,'all_product_inactive','all_manufacture'));
    }

	/********************************category***************************************************/
	public function all_category(){
		$all_category = category::whereNull('fk_parent_id')->get();
		return view('vendor_layout.category.all_category')->with('all_category',$all_category);
	}
    
    public function add_category(){
    	return view('vendor_layout.category.add_category');
    }

    public function save_category(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' =>   'required|string',
            'category_image'=> 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/vendor/add-category')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->category_image) ){
        $image=$request->category_image;
	    $path=$image->store('category'); }


        $new_category = new category();
        $new_category->name=$request->name;
        $new_category->status=0;
        $new_category->image =$path;
        $new_category->save();

        return redirect('/vendor/category')->with('message','category successfully added , wait for activation for Admin');


    }


    

    /******************************************manufacture**********************************************/
    public function all_manufacture(){
		$all_manufacture = manufacture::all();
		return view('vendor_layout.manufacture.all_manufacture')->with('all_manufacture',$all_manufacture);
	}
    
    public function add_manufacture(){
    	return view('vendor_layout.manufacture.add_manufacture');
    }

    public function save_manufacture(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' =>   'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/vendor/add-manufacture')
                        ->withErrors($validator)
                        ->withInput();
        }
       

        $new_manufacture = new manufacture();
        $new_manufacture->name=$request->name;
        $new_manufacture->status=0;
        $new_manufacture->save();

        return redirect('/vendor/manufacture')->with('message','manufacture successfully added , wait for activation for Admin');


    }
    /**********************************************subcategory********************************************************/
    public function all_subcategory(){

		$all_subcategory = subcategory::whereHas('parent')
										->with('parent')
										->get();
		return view('vendor_layout.subcategory.all_subcategory')->with('all_subcategory',$all_subcategory);
	}
    
    public function add_subcategory(){
        
        $all_category = subcategory::where('status',1)->get();
    	return view('vendor_layout.subcategory.add_subcategory')->with('all_category' , $all_category);
    }

    public function save_subcategory(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' =>   'required|string',
            'fk_parent_id' =>   'required|numeric',
            'subcategory_image'=> 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/vendor/add-subcategory')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->subcategory_image) ){
        $image=$request->subcategory_image;
	    $path=$image->store('subcategory'); }


        $new_subcategory = new subcategory();
        $new_subcategory->name=$request->name;
        $new_subcategory->fk_parent_id=$request->fk_parent_id;
        $new_subcategory->status =0;
        $new_subcategory->image =$path;
        $new_subcategory->save();

        return redirect('/vendor/subcategory')->with('message','subcategory successfully added , wait for activation for Admin');


    }
    /*******************************************product*********************************************************/

     public function add_product(){
        
        $all_category    = category::where('status',1)->whereNull('fk_parent_id')->get();
        $all_subcategory = category::where('status',1)->whereNotNull('fk_parent_id')->get();
        $all_manufacture = manufacture::where('status',1)->get();

    	return view('vendor_layout.product.add_product')->with(['all_category' => $all_category ,
                                                                 'all_subcategory'=> $all_subcategory,
    	                                                         'all_manufacture' => $all_manufacture]);
    }

    public function save_product(Request $request){

    	$validator = Validator::make($request->all(), [
            'fk_category_id' =>   'required|numeric',
            'fk_manufacture_id' =>   'required|numeric',
            'name' =>   'required|string',
            'price' =>   'required|numeric',
            'old_price' =>   'nullable|numeric',
            'offer' =>   'nullable|numeric',
            'product_image'=> 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/vendor/add-product')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->product_image) ){
        $image=$request->product_image;
	    $path=$image->store('product'); }
        
       if($request->fk_category_id2 != NULL) {
       $fk_category_id = $request->fk_category_id2;
       }else{
        $fk_category_id = $request->fk_category_id;
       }


        $new_product = new product();
        $new_product->fk_category_id=$request->fk_category_id;
        $new_product->fk_manufacture_id=$request->fk_manufacture_id;
        $new_product->fk_vendor_id = auth()->guard('vendor')->user()->id;
        $new_product->name=$request->name;
        $new_product->price=$request->price;
        $new_product->old_price=$request->old_price;
        $new_product->offer=$request->offer;
        $new_product->image =$path;
        $new_product->status=0;
        $new_product->save();
        
         
         while ($fk_category_id != NULL) { 
          $new_cp = new cp();
          $new_cp->fk_category_id = $fk_category_id;
          $new_cp->fk_product_id  = $new_product->pk_id;
          $new_cp->save();

          $category = category::where('pk_id',$fk_category_id)->first();
          $fk_parent_id = $category->fk_parent_id;

          if (isset($fk_parent_id)) {
            $fk_category_id = $category->fk_parent_id;
          }else{

             $fk_parent_id = NULL;
             $fk_category_id = $fk_parent_id;
             
          }
          
          
        }


        return redirect('/vendor/show-product/'.$request->fk_category_id)->with('message','product successfully added , wait for activation for Admin');


    }



    public function edit_product($id){

        $objProduct = product::find($id);
        $all_category    = category::where('status',1)->whereNull('fk_parent_id')->get();
        $all_subcategory = category::where('status',1)->whereNotNull('fk_parent_id')->where('fk_parent_id',$objProduct->fk_category_id)->get();
        $all_manufacture = manufacture::where('status',1)->get();

        $product = product::with('category.parent')
                         ->with('user')
                         ->with('manufacture')
                         ->find($id);

        $categories = $product->Category->groupBy('fk_parent_id');                 

        return view('vendor_layout.product.edit_product')->with(['all_category' => $all_category ,
                                                                 'all_subcategory'=> $all_subcategory,
                                                                 'all_manufacture' => $all_manufacture,
                                                                 'product'         => $product,
                                                                 'categories' =>$categories    ]);
        
    }

    public function update_product(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'product_image'=> 'mimes:jpeg,bmp,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect('/edit-product/'. $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->fk_category_id2 != NULL) {
         $fk_category_id = $request->fk_category_id2;
       }else{
         $fk_category_id = $request->fk_category_id;
       } 

        
         if(isset($request->product_image) ){
        $image=$request->product_image;
        $path=$image->store('product');
        $edit_product = product::find($id);
        $edit_product->fk_category_id=$request->fk_category_id;
        $edit_product->fk_manufacture_id=$request->fk_manufacture_id;
        $edit_product->fk_vendor_id = auth()->guard('vendor')->user()->id;
        $edit_product->name=$request->name;
        $edit_product->price=$request->price;
        $edit_product->old_price=$request->old_price;
        $edit_product->offer=$request->offer;
        $edit_product->image =$path;
        $edit_product->update();

        }else{
        $edit_product = product::find($id);
        $edit_product->fk_category_id=$request->fk_category_id;
        $edit_product->fk_manufacture_id=$request->fk_manufacture_id;
        $edit_product->fk_vendor_id = auth()->guard('vendor')->user()->id;
        $edit_product->name=$request->name;
        $edit_product->price=$request->price;
        $edit_product->old_price=$request->old_price;
        $edit_product->offer=$request->offer;
        $edit_product->update();
        } 

        cp::where('fk_product_id',$edit_product->pk_id)->delete();
             
         while ($fk_category_id != NULL) { 
          $new_cp = new cp();
          $new_cp->fk_category_id = $fk_category_id;
          $new_cp->fk_product_id  = $edit_product->pk_id;
          $new_cp->save();

          $category = category::where('pk_id',$fk_category_id)->first();
          $fk_parent_id = $category->fk_parent_id;

          if (isset($fk_parent_id)) {
            $fk_category_id = $category->fk_parent_id;
          }else{

             $fk_parent_id = NULL;
             $fk_category_id = $fk_parent_id;
             
          }
          
          
        }

	    

        return  redirect('/vendor/show-product/'.$request->fk_category_id)->with('message','product successfully update');



    }
    public function delete_product($id){

           $product = product::find($id);
           $product->delete();
           
           return redirect()->back()->with('message','product successfully delete');

    }


     public function show_product($id){

     	$vendor_id =  auth()->guard('vendor')->user()->id;
        // print_r($id);die;
        $product = product::where('fk_vendor_id',$vendor_id);

        $all_category = category::where('pk_id',$id)
                                ->whereNull('fk_parent_id')
                                ->with('product')
                                ->get();

        return view('vendor_layout.category.show_product',compact('all_category'));
    }

    /**********************************************************************************************************/






    


}
