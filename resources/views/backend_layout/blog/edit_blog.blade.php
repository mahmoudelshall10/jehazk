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
                <li class="breadcrumb-item"><a href="{{url('/blog')}}">blog</a></li>
                <li class="breadcrumb-item active"  aria-current="page">edit blog</li>
              </ol>
            </nav>

            <div class="text-center alert alert-dark">
              <h1><strong>Edit blog</strong></h1>
            </div>

            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="card mb-grid">

                  <div class="card-body collapse show" id="card1">
                  		@foreach ($errors->all() as $message) 
                        <p class="alert alert-danger">{{$message}}</p>
                  		@endforeach
                    <form method="post" action="{{url('/update-blog' , $objBlog->pk_id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label class="form-label">blog title</label>
                                <input type="text" class="form-control" name="title" required value="{{ $objBlog->title }}" value="{{ old('title') }}">
                        </div>
    
                        <div class="form-group">
                                <label class="form-label">blog description</label>
                                <input type="text" class="form-control" name="description" required value="{{ $objBlog->description }}" value="{{ old('description') }}">
                        </div>

                        <div class="form-group">
                          <div class="row"> 
                            <div class="imgUp">
                              <div class="imagePreview">
                                <img src="{{URL::to('/')}}/storage/{{$objBlog->image}}">      
                              </div>
                             <label class="btn btn-primary">Upload
                              <input type="file" class="uploadFile img" name="image" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
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