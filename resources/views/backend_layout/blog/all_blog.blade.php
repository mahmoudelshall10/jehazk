@extends('layouts.admin_layout')
@section('admin_content')

<!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"  aria-current="page">Blog</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Blog</h1>
            </div>
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif

            <div class="row">
              <div class="col">
                <div class="alert alert-info" role="alert">
                  <strong><a style="text-decoration: none;" href="{{url('/add-blog')}}"><i class="fas fa-plus"></i> add Blog</a></strong><br/>
                 
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
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Image</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($all_blog as $blog)
                        <tr>
                          
                          <td>{{$blog->pk_id}}</td>
                          <td>{{$blog->title}}</td>
                          <td>{{$blog->description}}</td>
                          <td><img src="{{URL::to('/')}}/storage/{{$blog->image}}" width="150px" height="50px"></td>

                          <td>
                           <a class="btn btn-sm btn-info" href="{{url('/edit-blog/' . $blog->pk_id)}}">Edit</a>
                          </td>

                          <td> 
                            <a href="{{url('/delete-blog/' . $blog->pk_id)}}" class="btn btn-sm btn-danger" data-toggle="confirmation" data-title="Delete brand?">Delete</a>
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