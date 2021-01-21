<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product as product;
use App\Model\Category as category;
use App\Model\Category_Product as cp;
use App\Model\Manufacture as manufacture;

use Session;
use Redirect;
use Validator;

class ProductController extends Controller
{

    public function add_product(){
        
        $all_category    = category::where('status',1)->whereNull('fk_parent_id')->get();
        // $all_subcategory = category::where('status',1)->whereNotNull('fk_parent_id')->get();
        $all_manufacture = manufacture::where('status',1)->get();

    	return view('backend_layout.product.add_product')->with(['all_category' => $all_category ,
                                                                //  'all_subcategory'=> $all_subcategory,
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
            'product_image'=> 'required|mimes:jpeg,bmp,png,jpg|dimensions:width=250,height=250',
        ]);

        if ($validator->fails()) {
            return redirect('/add-product')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->product_image) ){
        $image=$request->product_image;
      $path=$image->store('product');
     }
        
      //  if($request->fk_category_id2 != NULL) {
      //  $fk_category_id = $request->fk_category_id2;
      //  }else{
        $fk_category_id = $request->fk_category_id;
      //  }


        $new_product = new product();
        $new_product->fk_category_id=$request->fk_category_id;
        $new_product->fk_manufacture_id=$request->fk_manufacture_id;
        $new_product->fk_user_id = auth()->user()->id;
        $new_product->name=$request->name;
        $new_product->price=$request->price;
        $new_product->old_price=$request->old_price;
        $new_product->offer=$request->offer;
        $new_product->image =$path;
        $new_product->save();
        
         
        //  while ($fk_category_id != NULL) { 
        //   $new_cp = new cp();
        //   $new_cp->fk_category_id = $fk_category_id;
        //   $new_cp->fk_product_id  = $new_product->pk_id;
        //   $new_cp->save();

          // $category = category::where('pk_id',$fk_category_id)->first();
          // $fk_parent_id = $category->fk_parent_id;

          // if (isset($fk_parent_id)) {
          //   $fk_category_id = $category->fk_parent_id;
          // }else{

          //    $fk_parent_id = NULL;
          //    $fk_category_id = $fk_parent_id;
             
          // }
          
          
        // }


        return redirect('/show-product/'.$request->fk_category_id)->with('message','product successfully added');


    }

    public function unactive_product($id){

        product::where('pk_id', $id)
	           ->update(['status' => 0]);

        return redirect()->back()->with('message','product successfully Blocked');
    }


    public function active_product($id){


        product::where('pk_id', $id)
	           ->update(['status' => 1]);

        return redirect()->back()->with('message','product successfully Active');
    }

    public function edit_product($id){
        $objProduct = product::find($id);
        $all_category    = category::where('status',1)->whereNull('fk_parent_id')->get();
        $all_manufacture = manufacture::where('status',1)->get();

        $product = product::with('category.parent')
                         ->with('user')
                         ->with('manufacture')
                         ->find($id);

                   

        return view('backend_layout.product.edit_product')->with(['all_category' => $all_category ,
                                                                 'all_manufacture' => $all_manufacture,
                                                                 'product'         => $product,
                                                                 ]);
        
    }

    public function update_product(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'product_image'=> 'mimes:jpeg,bmp,png,jpg|dimensions:width=250,height=250',
        ]);

        if ($validator->fails()) {
            return redirect('/edit-product/'. $id)
                        ->withErrors($validator)
                        ->withInput();
        }

      //   if ($request->fk_category_id2 != NULL) {
      //    $fk_category_id = $request->fk_category_id2;
      //  }else{
         $fk_category_id = $request->fk_category_id;
      //  } 

        
         if(isset($request->product_image) ){
        $image=$request->product_image;
        $path=$image->store('product');
        $edit_product = product::find($id);
          
        $edit_product->fk_category_id=$request->fk_category_id;
        $edit_product->fk_manufacture_id=$request->fk_manufacture_id;
        $edit_product->fk_user_id = auth()->user()->id;
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
        $edit_product->fk_user_id = auth()->user()->id;
        $edit_product->name=$request->name;
        $edit_product->price=$request->price;
        $edit_product->old_price=$request->old_price;
        $edit_product->offer=$request->offer;
        $edit_product->update();
        } 

        cp::where('fk_product_id',$edit_product->pk_id)->delete();
             
        //  while ($fk_category_id != NULL) { 
        //   $new_cp = new cp();
        //   $new_cp->fk_category_id = $fk_category_id;
        //   $new_cp->fk_product_id  = $edit_product->pk_id;
        //   $new_cp->save();

        //   $category = category::where('pk_id',$fk_category_id)->first();
        //   $fk_parent_id = $category->fk_parent_id;

        //   if (isset($fk_parent_id)) {
        //     $fk_category_id = $category->fk_parent_id;
        //   }else{

        //      $fk_parent_id = NULL;
        //      $fk_category_id = $fk_parent_id;
             
        //   }
          
          
        // }

	    

        return  redirect('/show-product/'.$request->fk_category_id)->with('message','product successfully update');

      


    }
    public function delete_product($id){

           $product = product::find($id);
           $product->delete();
           
           return redirect()->back()->with('message','product successfully delete');

    }

    public function unactive_product_hotdeal($id){

      product::where('pk_id', $id)
           ->update(['hotdeal' => 0]);

      return redirect()->back()->with('message','product successfully hidden');
  }


  public function active_product_hotdeal($id){


      product::where('pk_id', $id)
           ->update(['hotdeal' => 1]);

      return redirect()->back()->with('message','product successfully display ');
  }

  public function unactive_product_saleoff($id){

    product::where('pk_id', $id)
         ->update(['saleoff' => 0]);

    return redirect()->back()->with('message','product successfully saleoff hidden');
  }


public function active_product_saleoff($id){


    product::where('pk_id', $id)
         ->update(['saleoff' => 1]);

    return redirect()->back()->with('message','product successfully saleoff display ');
}

public function unactive_product_featured($id){

  product::where('pk_id', $id)
       ->update(['featured' => 0]);

  return redirect()->back()->with('message','product successfully unfeatured');
}


public function active_product_featured($id){


  product::where('pk_id', $id)
       ->update(['featured' => 1]);

  return redirect()->back()->with('message','product successfully featured');
}


public function unactive_product_bestseller($id){

  product::where('pk_id', $id)
       ->update(['bestseller' => 0]);

  return redirect()->back()->with('message','product is not successfully bestseller');
}


public function active_product_bestseller($id){


  product::where('pk_id', $id)
       ->update(['bestseller' => 1]);

  return redirect()->back()->with('message','product is successfully bestseller');
}


}
