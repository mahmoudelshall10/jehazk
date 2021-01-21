<?php

namespace App\Http\Controllers;

use App\Model\Brand as brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use Redirect;
use Session;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_brand = brand::all();
        return view('backend_layout.brand.all_brand', compact('all_brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('backend_layout.brand.add_brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        // print_r($request->brand_image);die;
        try {
           
            if(isset($request->image) ){
                $image=$request->image;
                $path=$image->store('brand');    
            }
            $new_brand = new brand();
            $new_brand->image =$path;
            $new_brand->save();
            session()->flash('message' ,'Brand successfully Added.');
        } catch (\Exception $e) {
            session()->flash('message' ,'Please Check Your Data');
        }
        return redirect('/brand');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // print_r($id);die;
        $brand = brand::find($id);
        return view('backend_layout.brand.edit_brand' ,compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request , $id)
    {
        
        try {
            if(isset($request->image) ){
                $image=$request->image;
                $path=$image->store('brand');

                $edit_brand = brand::find($id);
                $edit_brand->image =$path;
                $edit_brand->update();
        
                }else{
                $edit_brand = brand::find($id);
                $edit_brand->update();
                }

            session()->flash('message' ,'Brand successfully updated.');
        } catch (\Exception $e) {
            session()->flash('message' ,'Please Check Your Data');
        }
        return redirect('/brand');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            brand::where('pk_id', $id)->delete();
            // print_r($brand);die;
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please check data');
         }
         return redirect('/brand');
    }

    public function unactive_brand($id){
        try { 
            brand::where('pk_id', $id)
	           ->update(['status' => 0]);
             Session::flash('message' , 'Successfully blocked!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please check data');
         }
    
         return redirect('/brand');
    }


    public function active_brand($id){
        try {
            brand::where('pk_id', $id)
               ->update(['status' => 1]);
               Session::flash('message' , 'Successfully active!!');
        } catch (\Exception $e) {
            Session()->flash('message' ,'Please check data');
        }
        return redirect('/brand');
    }

}
