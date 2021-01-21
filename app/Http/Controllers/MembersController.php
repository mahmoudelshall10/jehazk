<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vendor as Vendor;
use App\User as user;

use Session;
use Redirect;
use Validator;

class MembersController extends Controller
{

	/************************vendor*****************************/
    public function all_vendor(){
		$all_vendor = vendor::all();
		return view('backend_layout.members.vendors')->with('all_vendor',$all_vendor);
	}

	public function unactive_vendor($id){

        vendor::where('id', $id)
	           ->update(['status' => 0]);

        return redirect('/all-vendor')->with('message','vendor successfully Blocked');
    }


    public function active_vendor($id){
        vendor::where('id', $id)
	           ->update(['status' => 1]);

        return redirect('/all-vendor')->with('message','vendor successfully Active');
    }

    public function delete_vendor($id){

           $vendor = vendor::find($id);
           $vendor->delete();
           
           return redirect('/all-vendor')->with('message','vendor successfully delete');

    }

    /************************users**********************************/
    public function all_user(){
		$all_user = user::where('account_type',0)->get();
		return view('backend_layout.members.users')->with('all_user',$all_user);
	}

	public function unactive_user($id){

        user::where('id', $id)
	           ->update(['status' => 0]);

        return redirect('/all-user')->with('message','user successfully Blocked');
    }


    public function active_user($id){
        user::where('id', $id)
	           ->update(['status' => 1]);

        return redirect('/all-user')->with('message','user successfully Active');
    }

    public function delete_user($id){

           $user = user::find($id);
           $user->delete();
           
           return redirect('/all-user')->with('message','user successfully delete');

    }  

     /************************admin**********************************/
    public function all_admin(){
		$all_admin = user::where('account_type',1)->get();
		return view('backend_layout.members.admins')->with('all_admin',$all_admin);
	}

	public function unactive_admin($id){

        user::where('id', $id)
	           ->update(['status' => 0]);

        return redirect('/all-admin')->with('message','admin successfully Blocked');
    }


    public function active_admin($id){
        user::where('id', $id)
	           ->update(['status' => 1]);

        return redirect('/all-admin')->with('message','admin successfully Active');
    }

    public function delete_admin($id){

           $admin = user::find($id);
           $admin->delete();
           
           return redirect('/all-admin')->with('message','admin successfully delete');

    }    


}
