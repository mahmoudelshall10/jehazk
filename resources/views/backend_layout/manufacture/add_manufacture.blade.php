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
                <li class="breadcrumb-item"><a href="{{url('/manufacture')}}">Manufacture</a></li>
                <li class="breadcrumb-item active"  aria-current="page">add manufacture</li>
              </ol>
            </nav>

            <div class="text-center alert alert-dark">
              <h1><strong>Add manufacture</strong></h1>
            </div>

            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="card mb-grid">

                  <div class="card-body collapse show" id="card1">
                  		@foreach ($errors->all() as $message) 
                        <p class="alert alert-danger">{{$message}}</p>
                  		@endforeach
                    <form method="post" action="{{url('/save-manufacture')}}" enctype="multipart/form-data">
                    	@csrf

                      <div class="form-group">
                        <label class="form-label">manufacture name</label>
                        <input type="text" class="form-control" name="name" required>
                      </div>
                    
                      <button type="submit" class="btn btn-success">Save</button>

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