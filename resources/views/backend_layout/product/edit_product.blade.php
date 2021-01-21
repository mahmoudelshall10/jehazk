@extends('layouts.admin_layout')
@section('admin_content')

<!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/category')}}">category</a></li>
                <li class="breadcrumb-item active"  aria-current="page">edit product</li>
              </ol>
            </nav>

            <div class="text-center alert alert-dark">
              <h1><strong>Edit product</strong></h1>
            </div>

            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="card mb-grid">

                  <div class="card-body collapse show" id="card1">
                  		@foreach ($errors->all() as $message) 
                        <p class="alert alert-danger">{{$message}}</p>
                  		@endforeach
                    <form method="post" action="{{url('/update-product' , $product -> pk_id)}}" enctype="multipart/form-data">
                    	@csrf

                      <div class="form-group">
                        <label class="form-label">product name</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}" required>
                      </div>

                      <div class="form-group">
                      <label class="form-label">Select Manufacture</label>
                      <select name="fk_manufacture_id" class="form-control js-choice" required="">

                        <option value="{{$product->fk_manufacture_id}}">{{$product->manufacture->name}}</option>
                      @foreach($all_manufacture as $all) 
                        <option value="{{$all->pk_id}}">{{$all->name}}</option>
                      @endforeach  
                      
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="form-label">Select Category</label>
                      <select name="fk_category_id" id="fk_category_id" class="form-control js-choice" required="">
                        <option value=""></option>
                        @foreach($all_category as $category)
                          <option value="{{$category->pk_id}}">{{$category->name}}</option>
                            @foreach($category->children as $subcategory)
                              <option value="{{$subcategory->pk_id}}">--{{$subcategory->name}}</option>
                            @endforeach
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" value="{{$product->price}}" required>
                      </div>

                      <div class="form-group">
                        <label class="form-label">Old Price</label>
                        <input type="text" class="form-control" name="old_price" value="{{$product->old_price}}">
                      </div>

                      <div class="form-group">
                        <label class="form-label">Offer</label>
                        <input type="text" class="form-control" name="offer" value="{{$product->offer}}">
                      </div>
                    
                            
                        <div class="form-group">
                          <div class="row"> 

                             <div class="imgUp">
                              <div class="imagePreview">
                                <img src="{{URL::to('/')}}/storage/{{$product->image}}">      
                              </div>
                             <label class="btn btn-primary">Upload
                              <input type="file" class="uploadFile img" name="product_image" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
                             </div> 

             
                          </div>
                         </div>



                      <button type="submit" class="btn btn-success">update</button>

                    </form>
                  </div>

                </div>

        
              </div>

            
            </div>

          </div>
        </div>
      </div>
      <!-- // Main Content -->

@endsection      