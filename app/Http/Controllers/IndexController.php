<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slider as slider;
use App\Model\Category as category;
use App\Model\Product as product;
use App\Model\Brand as brand;
use App\Model\Category_Product as category_product;
class IndexController extends Controller
{
    public function show_all(){
        $all_category = category::whereNull('fk_parent_id')->get();
        $all_product_left = product::where('status',1)->where('hotdeal',1)->paginate(2);
        $all_product_right = product::where('status',1)->where('hotdeal',1)->latest()->paginate(1);  
        $all_product_featured = product::where('status',1)->where('featured',1)->get();
        $all_slider = slider::all();
        $all_product_bestseller = product::where('status',1)->where('bestseller',1)->get();

        $all_product_saleoff  = product::where('status',1)->where('saleoff',1);
        $saleoff_count  = product::where('status',1)->where('saleoff',1)->count();
        $three_product_saleoff = product::where('status',1)->where('saleoff',1)->paginate(3);
        $all_brand = brand::where('status',1)->get();
        $all_product_latest = product::where('status',1)->latest()->paginate(10);
        $all_category_star = category::where('status',1)->where('star',1)->paginate(2);
        $all_category_popular = category::where('status',1)->where('popular',1)->paginate(6);
        // $all_category = category::whereNull('fk_parent_id')->get();
        // $all_category_star = category::where('status',1)->where('star',1); two_category_star
        // $star_count  = category::where('status',1)->where('star',1)->count();
                
        // $all_product = product::where('status',1)->where('hotdeal',1);
        // $product_count = product::where('status',1)->where('hotdeal',1)->count();
                // for($i = 0; $i < $product_count;){
        //     $all_product_right = $all_product->skip($i+1)->take(1)->get();
        //     $i = $i+1; 
        // }
        // print_r($all_product_right);die;
        return view('frontend_layout.home')->with(['all_slider' => $all_slider ,
                                                    'all_category' => $all_category, 
                                                    'all_product_latest' => $all_product_latest ,
                                                   'all_product_left' => $all_product_left,
                                                   'all_product_right' => $all_product_right,
                                                    'three_product_saleoff' => $three_product_saleoff, 
                                                    'all_product_saleoff' => $all_product_saleoff ,
                                                    'all_product_featured' => $all_product_featured ,
                                                     'saleoff_count' => $saleoff_count,
                                                     'all_brand' => $all_brand,
                                                     'all_product_bestseller' => $all_product_bestseller,
                                                     'all_category_star' => $all_category_star,
                                                    //  'star_count' => $star_count,
                                                     'all_category_popular' => $all_category_popular,
                                                     ]);
    }

    public function single_product($id)
    {
       
        $objProduct = product::with('category.parent')
                         ->with('user')
                         ->with('manufacture')
                         ->find($id);
        $categories = $objProduct->category->groupBy('fk_parent_id');  

        $all_brand = brand::where('status',1)->get();
        // print_r();die;
        $all_product_category  = category_product::where('fk_category_id',$id)->latest()->paginate(16);
        // print_r($all_product_category);die;
        $categories = category::all();
        return view ('frontend_layout.single-product',compact('all_brand','objProduct','categories','all_product_category'));
    }

    public function category_product($id){
        $objCategory = category::find($id);
        // print_r($objCategory->pk_id);die;
        $all_product_category = product::where('fk_category_id',$objCategory->pk_id)->where('status',1)->get();
        // print_r($all_product_category);die;
        $countProducts = $all_product_category->count();
        // print_r($countProducts);die;
        return view ('frontend_layout.product_category',compact('all_product_category' , 'countProducts'));

    }
}
