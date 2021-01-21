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
                <li class="breadcrumb-item active"  aria-current="page">Contact-Us</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Contact-us</h1>
            </div>
            {{-- @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif --}}

            <div class="row">
              <div class="col">
                <div class="alert alert-info" role="alert">
                  {{-- <strong><a style="text-decoration: none;" href="{{url('/add-contact-us')}}"><i class="fas fa-plus"></i> add manufacture</a></strong><br/> --}}
                 
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
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Message</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($all_contact as $all)
                        <tr>
                          
                          <td>{{$all->pk_id}}</td>
                          <td>{{$all->name}}</td>
                          <td>{{$all->email}}</td>
                          <td>{{$all->phone}}</td>
                          <td>{{$all->message}}</td>

                           <td> 
                            <a href="{{url('/delete-message/' . $all->pk_id)}}" class="btn btn-sm btn-danger" data-toggle="confirmation" data-title="Delete message?">Delete</a>
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