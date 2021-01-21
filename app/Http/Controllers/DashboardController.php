<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category as category;
use App\Model\Product as product;
use App\Model\Manufacture as manufacture;
use App\Model\Vendor as vendor;
use App\User as user;
use Auth;
class DashboardController extends Controller
{
    public function all_count(){
        $all_category = category::whereNull('fk_parent_id')->get()->count();
        // print_r($all_category);die;
        $all_product_active = product::where('status',1)->count();
        // print_r($all_product_active);die;
        $all_product_inactive = product::where('status',0)->count(); 
        // print_r($all_product_inactive);die;
        $all_manufacture = manufacture::count();
        // print_r($all_manufacture);die;
        $all_user = user::count();
        // print_r($all_user);die;
        $all_vendor = vendor::count();
        return view('backend_layout.dashboard',compact('all_category','all_product_active' ,'all_product_inactive','all_manufacture','all_user','all_vendor'));
    }
}
