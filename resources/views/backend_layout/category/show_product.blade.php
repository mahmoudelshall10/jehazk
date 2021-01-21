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
            <li class="breadcrumb-item"><a href="{{url('/category')}}">Category</a></li>
            <li class="breadcrumb-item active"  aria-current="page">Products</li>
          </ol>
        </nav>

        <div class="pb-3">
          <h1>Product</h1>
        </div>
        @if (session('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
        @endif

        <div class="row">
          <div class="col">
            <div class="alert alert-info" role="alert">
              <strong><a style="text-decoration: none;" href="{{url('/add-product')}}"><i class="fas fa-plus"></i> add product</a></strong><br/>
             
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
                      <th scope="col">Category Name</th>
                      <th scope="col">SubCategory Name</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Manufacture Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Status</th>
                      <th scope="col">Display</th>
                      <th scope="col">Hot Deal</th>
                      <th scope="col">Sale Off</th>
                      <th scope="col">Featured</th>
                      <th scope="col">BestSeller</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($all_category as $category)
                    @foreach($category->product as $item)
                    <tr>
                        <td>
                                {{ $category->name}}
                        </td>
                        @foreach ($objSubcategory as $i)
                        <td>
                          {{ $i->name}}
                        </td>
                        @endforeach


                        <td>
                                {{ $item->name }}   
                        </td>

                        <td>
                                {{ $item->manufacture->name }}   
                        </td>
                        
                        <td>
                            <img src="{{URL::to('/')}}/storage/{{$item->image}}" width="150px" height="50px"> 
                        </td>
                        <td>
                                @if($item->status == 1)
                                <span class="badge badge-pill badge-success">Active</span>
                                @else
                                <span class="badge badge-pill badge-danger">Blocked</span>
                                @endif
                              </td>

                              <td>
                                  @if($item->status == 1)
                                  <a class="btn btn-sm btn-danger" href="{{url('/unactive-product/' . $item->pk_id)}}">
                                      <i class="fas fa-thumbs-down"></i>
                                  </a>
                                  @else
                                      <a class="btn btn-sm btn-success" href="{{url('/active-product/' . $item->pk_id)}}">
                                           <i class="fas fa-thumbs-up"></i>
                                      </a>
                                  @endif
                                </td>

                              <td>
                                  @if($item->hotdeal == 1)
                                  <a class="btn btn-sm btn-danger" href="{{url('/unactive-product-hotdeal/' . $item->pk_id)}}">
                                      <i class="fas fa-thumbs-down"></i>
                                  </a>
                                  @else
                                      <a class="btn btn-sm btn-success" href="{{url('/active-product-hotdeal/' . $item->pk_id)}}">
                                           <i class="fas fa-thumbs-up"></i>
                                      </a>
                                  @endif
                              </td>

                              <td>
                                  @if($item->saleoff == 1)
                                  <a class="btn btn-sm btn-danger" href="{{url('/unactive-product-saleoff/' . $item->pk_id)}}">
                                      <i class="fas fa-thumbs-down"></i>
                                  </a>
                                  @else
                                      <a class="btn btn-sm btn-success" href="{{url('/active-product-saleoff/' . $item->pk_id)}}">
                                           <i class="fas fa-thumbs-up"></i>
                                      </a>
                                  @endif
                              </td>

                              <td>
                                  @if($item->featured == 1)
                                  <a class="btn btn-sm btn-danger" href="{{url('/unactive-product-featured/' . $item->pk_id)}}">
                                      <i class="fas fa-thumbs-down"></i>
                                  </a>
                                  @else
                                      <a class="btn btn-sm btn-success" href="{{url('/active-product-featured/' . $item->pk_id)}}">
                                           <i class="fas fa-thumbs-up"></i>
                                      </a>
                                  @endif
                              </td>

                              <td>
                                  @if($item->bestseller == 1)
                                  <a class="btn btn-sm btn-danger" href="{{url('/unactive-product-bestseller/' . $item->pk_id)}}">
                                      <i class="fas fa-thumbs-down"></i>
                                  </a>
                                  @else
                                      <a class="btn btn-sm btn-success" href="{{url('/active-product-bestseller/' . $item->pk_id)}}">
                                           <i class="fas fa-thumbs-up"></i>
                                      </a>
                                  @endif
                              </td>

                               <td>
                                <a class="btn btn-sm btn-info" href="{{url('/edit-product/' . $item->pk_id)}}">Edit</a>
                               </td>
    
                               <td> 
                                <a href="{{url('/delete-product/' . $item->pk_id)}}" class="btn btn-sm btn-danger" data-toggle="confirmation" data-title="Delete product?">Delete</a>
                              </td>
                    </tr>
                    @endforeach
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