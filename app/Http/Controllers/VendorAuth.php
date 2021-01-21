<?php

namespace App\Http\Controllers;
use Auth;
use App\Model\Vendor as vendor;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use Hash;

class VendorAuth extends Controller
{
    public function login() {
		return view('vendor_layout.login');
	}

	public function register() {
		return view('vendor_layout.register');
	}


	public function save_vendor(Request $request){

		$validator = Validator::make($request->all(), [
            'firstname' =>'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'username'  => 'required|string|max:255|unique:vendors',
            'email'     => 'required|string|email|max:255|unique:vendors',
            'address'   => 'required|string|max:255',
            'password'  => 'required|string|min:6|confirmed',
            'avatar'    => 'image|mimes:jpeg,bmp,png,jpg',
            'phone'     => 'required|digits:11|string|unique:vendors'
        ]);

        if ($validator->fails()) {
            return redirect('/vendor/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        if(isset($request->avatar) ){
        $avatar=$request->avatar;
	    $path=$avatar->store('vendor'); 

	    $vendor = new vendor();
        $vendor->firstname=$request->firstname;
        $vendor->lastname=$request->lastname;
        $vendor->username=$request->username;
        $vendor->email=$request->email;
        $vendor->address=$request->address;
        $vendor->avatar=$path;
        $vendor->phone=$request->phone;
        $vendor->password=Hash::make($request->password);
        $vendor->save();

	    }else{
	    $vendor = new vendor();
        $vendor->firstname=$request->firstname;
        $vendor->lastname=$request->lastname;
        $vendor->username=$request->username;
        $vendor->email=$request->email;
        $vendor->address=$request->address;
        $vendor->phone=$request->phone;
        $vendor->password=Hash::make($request->password);
        $vendor->save();
	    }

        
        Session::put('message','successfully registered, wait until the activation of the Admin');
        return redirect('/vendor/login');


	}


	public function dologin() {
		$rememberme = request('rememberme') == 1?true:false;
		if (Auth::guard('vendor')->attempt(['username' => request('username'), 'password' => request('password')], $rememberme)) {

			return redirect('vendor/dashboard');
		} else {
			Session::put('message','username or password is wrong');
			return redirect('vendor/login');
		}
	}

	public function logout() {
		auth()->guard('vendor')->logout();
		return redirect('vendor/login');
	}
	/**************************************************************************************************/
    



}
