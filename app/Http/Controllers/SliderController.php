<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slider as slider;
use App\Model\Category as category;
use Session;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Validator;


class SliderController extends Controller
{

	public function all_slider(){
		$all_slider = slider::all();
		return view('backend_layout.slider.all_slider')->with('all_slider',$all_slider);
    }
    
    
    public function add_slider(){
    	return view('backend_layout.slider.add_slider');
    }

    public function save_slider(Request $request){

    	$validator = Validator::make($request->all(), [
            'title1' => 'required|string|max:25',
            'title2' => 'required|string|max:25',
            'slider_image'=> 'required|mimes:jpeg,bmp,png,jpg|dimensions:width=1920,height=556',
        ]);

        if ($validator->fails()) {
            return redirect('/add-slider')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        if(isset($request->slider_image) ){
        $image=$request->slider_image;
	    $path=$image->store('slider'); 
        
        // Storage::disk('public')->put('filename', $image);
    }
        $new_slider = new slider();
        $new_slider->title1=$request->title1;
        $new_slider->title2=$request->title2;
        $new_slider->image =$path;
        $new_slider->save();

        return redirect('/slider')->with('message','Slider successfully added');


    }

    public function unactive_slider($id){

        slider::where('pk_id', $id)
	           ->update(['status' => 0]);

        return redirect('/slider')->with('message','Slider successfully Blocked');
    }


    public function active_slider($id){
        slider::where('pk_id', $id)
	           ->update(['status' => 1]);

        return redirect('/slider')->with('message','Slider successfully Active');
    }

    public function edit_slider($id){

        $slider = slider::find($id);
        return view('backend_layout.slider.edit_slider')->with('slider',$slider);
        
    }

    public function update_slider(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'title1' => 'required|string|max:25',
            'title2' => 'required|string|max:25',
            'slider_image'=> 'required|mimes:jpeg,bmp,png,jpg|dimensions:width=1920,height=556',
        ]);

        if ($validator->fails()) {
            return redirect('/edit-slider/'. $id)
                        ->withErrors($validator)
                        ->withInput();
        }

        if(isset($request->slider_image) ){
        $image=$request->slider_image;
	    $path=$image->store('slider'); 
        
        $edit_slider = slider::find($id);
        $edit_slider->title1=$request->title1;
        $edit_slider->title2=$request->title2;
        $edit_slider->image =$path;
        $edit_slider->update();

	    }else{
	    $edit_slider = slider::find($id);
        $edit_slider->title1=$request->title1;
        $edit_slider->title2=$request->title2;
        $edit_slider->update();
	    }
	    

        return redirect('/slider')->with('message','Slider successfully update');

      


    }
    public function delete_slider($id){

           $slider = slider::find($id);
           $slider->delete();
           
           return redirect('/slider')->with('message','Slider successfully delete');

    }



}
