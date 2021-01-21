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
                <li class="breadcrumb-item active"  aria-current="page">Admins</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>admins</h1>
            </div>
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif

            <div class="row">
              <div class="col">
   
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
                          <th scope="col">admin name</th>
                          <th scope="col">admin username</th>
                          <th scope="col">email</th>
                          <th scope="col">phone</th>
                          <th scope="col">address</th>
                          <th scope="col">Image</th>
                          <th scope="col">Status</th>
                          <th scope="col">Display</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($all_admin as $all)
                        <tr>
                          
                          <td>{{$all->id}}</td>
                          <td>{{$all->firstname}} {{$all->lastname}}</td>
                          <td>{{$all->name}}</td>
                          <td>{{$all->email}}</td>
                          <td>{{$all->phone}}</td>
                          <td>{{$all->address}}</td>
                          <td><img src="{{URL::to('/')}}/storage/{{$all->avatar}}" width="50px" height="50px"></td>
                          <td>
                            @if($all->status == 1)
                            <span class="badge badge-pill badge-success">Active</span>
                            @else
                            <span class="badge badge-pill badge-danger">Blocked</span>
                            @endif
                          </td>

                          <td>
                            @if($all->status == 1)
                            <a class="btn btn-sm btn-danger" href="{{url('/unactive-admin/' . $all->pk_id)}}">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            @else
                                <a class="btn btn-sm btn-success" href="{{url('/active-admin/' . $all->pk_id)}}">
                                     <i class="fas fa-thumbs-up"></i>
                                </a>
                            @endif
                          </td>
                           

                           <td> 
                            <a href="{{url('/delete-admin/' . $all->pk_id)}}" class="btn btn-sm btn-danger" data-toggle="confirmation" data-title="Delete admin?">Delete</a>
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