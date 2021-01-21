<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact as contact; 
use DB;
use Redirect;
use Mail;
use Session;
use App\Model\Brand as brand;
use Validator;

class ContactUSController extends Controller
{
    
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       $all_brand = brand::all();
       return view('frontend_layout.contact-us',compact('all_brand'));
   }
    public function show(){
        $all_contact = contact::all();
        return view('backend_layout.contact-us.all_contact',compact('all_contact'));
    }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
    $this->validate($request, [ 'name' => 'required|string', 'email' => 'required|email', 'message' => 'required|string' , 'phone' => 'required|digits:11|string' ]);
    contact::create($request->all()); 
    
    // if ($validator->fails()) {
    //     return redirect('/contact-us')
    //                 ->withErrors($validator)
    //                 ->withInput();
    // }
    
    $data =  array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message'),
           'phone' => $request->get('phone'),
          
       );
   
   /*Mail::send('front.email' ,$data, function($message) use ($data)
   {
       $message->from($data['email']);
       $message->to('info@barakacomputer.net');
       $message->subject($data['name']);
   });*/
        Session::flash('message' , 'Sent successfully');
 
    return redirect('/contact-us'); 
     }

//        public function mesg(){
//        $data = contact::all();
//        return view('admin.message')->with('data',$data);
//    }

    public function delete_mesg($mesg_id){

            contact::where('pk_id',$mesg_id)->delete();
            Session::flash('message' , 'Delete successfully');
            return Redirect::to('/all-message');

    }




}
