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
                <li class="breadcrumb-item active"  aria-current="page">Slider</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Slider</h1>
            </div>
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif

            <div class="row">
              <div class="col">
                <div class="alert alert-info" role="alert">
                  <strong><a style="text-decoration: none;" href="{{url('/add-slider')}}"><i class="fas fa-plus"></i> add slider</a></strong><br/>
                 
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
                          <th scope="col">Title one</th>
                          <th scope="col">Title two</th>
                          <th scope="col">Image</th>
                          <th scope="col">Status</th>
                          <th scope="col">Display</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                        @foreach($all_slider as $all)
                        <tr>
                          
                          <td>{{$all->pk_id}}</td>
                          <td>{{$all->title1}}</td>
                          <td>{{$all->title2}}</td>
                          <td><img src="{{URL::to('/')}}/storage/{{$all->image}}" width="150px" height="50px"></td>
                          <td>
                            @if($all->status == 1)
                            <span class="badge badge-pill badge-success">Active</span>
                            @else
                            <span class="badge badge-pill badge-danger">Blocked</span>
                            @endif
                          </td>

                          <td>
                            @if($all->status == 1)
                            <a class="btn btn-sm btn-danger" href="{{url('/unactive-slider/' . $all->pk_id)}}">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            @else
                                <a class="btn btn-sm btn-success" href="{{url('/active-slider/' . $all->pk_id)}}">
                                     <i class="fas fa-thumbs-up"></i>
                                </a>
                            @endif
                          </td>

                           <td>
                            <a class="btn btn-sm btn-info" href="{{url('/edit-slider/' . $all->pk_id)}}">Edit</a>
                           </td>

                           <td> 
                            <a href="{{url('/delete-slider/' . $all->pk_id)}}" class="btn btn-sm btn-danger" data-toggle="confirmation" data-title="Delete slider?">Delete</a>
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