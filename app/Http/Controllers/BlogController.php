<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog as blog;
use App\Http\Requests\blogRequest;
use Session;
use Redirect;
use Carbon\Carbon;
use App\Model\Brand as brand;
class BlogController extends Controller
{
    public function index()
    {
        $all_blog = blog::all();
        return view('backend_layout.blog.all_blog', compact('all_blog'));
    }

    public function create(){
    	return view('backend_layout.blog.add_blog');
    }

    public function store(blogRequest $request){
        try {
            if(isset($request->image) ){
                $image=$request->image;
                $path=$image->store('blog'); }
                $new_blog = new blog();
                // $new_blog->created_at = Carbon::parse($request->created_at);
                $new_blog->title=$request->title;
                $new_blog->description=$request->description;
                $new_blog->image =$path;
                $new_blog->save();
        
            session()->flash('message' ,'blog successfully Added.');
        } catch (\Exception $e) {
            session()->flash('message' ,'Please Check Your Data');
        }
        return redirect('/blog');

    }

    public function show(){

        $all_blog = blog::all();
        $all_brand = brand::all();
        return view('frontend_layout.blog-user', compact('all_blog' , 'all_brand'));
    }

    public function edit($id){
        $objBlog = blog::find($id);
        return view('backend_layout.blog.edit_blog',compact('objBlog'));
    }

    public function update(blogRequest $request , $id)
    {

    try {
          if(isset($request->image)){
                $image=$request->image;
                $path=$image->store('blog');

                $edit_blog = blog::find($id);
                $edit_blog->title = $request->title;
                $edit_blog->description=$request->description;
                $edit_blog->image =$path;
                $edit_blog->update();

            }else{
                $edit_blog = blog::find($id);
                $edit_blog->title = $request->title;
                $edit_blog->description=$request->description;
                $edit_blog->update();
                }

        session()->flash('message' ,'blog successfully updated.');
    } catch (\Exception $e) {
        session()->flash('message' ,'Please Check Your Data');
    }
    return redirect('/blog');
    }

    public function destroy($id)
    {
        // print_r($id);die;
        try { 
            blog::where('pk_id', $id)->delete();
            // print_r($brand);die;
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please check data');
         }
         return redirect('/blog');
        }
}
