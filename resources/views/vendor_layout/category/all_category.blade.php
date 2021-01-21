@extends('layouts.vendor_layout')
@section('vendor_content')

<!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/vendor/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"  aria-current="page">Category</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Category</h1>
            </div>
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif

            <div class="row">
              <div class="col">
                <div class="alert alert-info" role="alert">
                  <strong><a style="text-decoration: none;" href="{{url('/vendor/add-category')}}"><i class="fas fa-plus"></i> add category</a></strong><br/>
                 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <div class="table-responsive-md">
                    <table id="example" class="table table-actions table-striped table-hover mb-0" data-table>
                      <thead>
                        <tr>

                          <th scope="col">ID</th>
                          <th scope="col">Category name</th>
                          <th scope="col">Image</th>
                          <th scope="col">Status</th>
                          <th scope="col">Products</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($all_category as $all)
                        <tr>
                          
                          <td>{{$all->pk_id}}</td>
                          <td>{{$all->name}}</td>
                          <td><img src="{{URL::to('/')}}/storage/{{$all->image}}" width="150px" height="50px"></td>
                          <td>
                            @if($all->status == 1)
                            <span class="badge badge-pill badge-success">Active</span>
                            @else
                            <span class="badge badge-pill badge-danger">Blocked</span>
                            @endif
                          </td>

                        
                           
                           <td>
                            <a class="btn btn-sm btn-secondary" href="{{url('/vendor/show-product/' . $all->pk_id)}}">Show</a>
                           </td>


                        </tr>
                        @endforeach
                      
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // Main Content -->


@endsection      