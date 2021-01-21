<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Manufacture as manufacture;
use Session;
use Redirect;
use Validator;

class ManufactureController extends Controller
{
        	public function all_manufacture(){
		$all_manufacture = manufacture::all();
		return view('backend_layout.manufacture.all_manufacture')->with('all_manufacture',$all_manufacture);
	}
    
    public function add_manufacture(){
    	return view('backend_layout.manufacture.add_manufacture');
    }

    public function save_manufacture(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' =>   'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/add-manufacture')
                        ->withErrors($validator)
                        ->withInput();
        }
       

        $new_manufacture = new manufacture();
        $new_manufacture->name=$request->name;
        $new_manufacture->save();

        return redirect('/manufacture')->with('message','manufacture successfully added');


    }

    public function unactive_manufacture($id){

        manufacture::where('pk_id', $id)
	           ->update(['status' => 0]);

        return redirect('/manufacture')->with('message','manufacture successfully Blocked');
    }


    public function active_manufacture($id){
        manufacture::where('pk_id', $id)
	           ->update(['status' => 1]);

        return redirect('/manufacture')->with('message','manufacture successfully Active');
    }

    public function edit_manufacture($id){

        $manufacture = manufacture::find($id);
        return view('backend_layout.manufacture.edit_manufacture')->with('manufacture',$manufacture);
        
    }

    public function update_manufacture(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/edit-manufacture/'. $id)
                        ->withErrors($validator)
                        ->withInput();
        }

       
	    $edit_manufacture = manufacture::find($id);
        $edit_manufacture->name=$request->name;
        $edit_manufacture->update();
	    

        return redirect('/manufacture')->with('message','manufacture successfully update');

      


    }
    public function delete_manufacture($id){

           $manufacture = manufacture::find($id);
           $manufacture->delete();
           
           return redirect('/manufacture')->with('message','manufacture successfully delete');

    }
}
