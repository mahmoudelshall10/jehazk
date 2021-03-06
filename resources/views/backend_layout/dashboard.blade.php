@extends('layouts.admin_layout')
@section('admin_content')

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{'/dashboard'}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>

            <div class="row">

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Users</div>
                      <h3 class="card-title mb-0">
                          {{$all_user}}
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                  <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                    <div class="d-flex flex-row align-items-center h-100">
                      <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                        <i data-feather="users"></i>
                      </div>
                      <div class="card-body">
                        <div class="card-info-title">Vendor</div>
                        <h3 class="card-title mb-0">
                           {{$all_vendor}} 
                        </h3>
                      </div>
                    </div>
                  </div>
              </div>
              
              <div class="col-md-6 col-lg-3 d-flex">
                  <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                    <div class="d-flex flex-row align-items-center h-100">
                      <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                        <i data-feather="shopping-cart"></i>
                      </div>
                      <div class="card-body">
                        <div class="card-info-title">Active Products</div>
                        <h3 class="card-title mb-0">
                            {{$all_product_active}}
                        </h3>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                  <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                    <div class="d-flex flex-row align-items-center h-100">
                      <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                        <i data-feather="shopping-cart"></i>
                      </div>
                      <div class="card-body">
                        <div class="card-info-title">Inactive Products</div>
                        <h3 class="card-title mb-0">
                            {{$all_product_inactive}}
                        </h3>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                  <div class="card border-0 bg-danger text-white text-center mb-grid w-100">
                    <div class="d-flex flex-row align-items-center h-100">
                      <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                        <i data-feather="shopping-cart"></i>
                      </div>
                      <div class="card-body">
                        <div class="card-info-title">Manufacture</div>
                        <h3 class="card-title mb-0">
                          {{$all_manufacture}}
                        </h3>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                  <div class="card border-0 bg-danger text-white text-center mb-grid w-100">
                    <div class="d-flex flex-row align-items-center h-100">
                      <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                        <i data-feather="users"></i>
                      </div>
                      <div class="card-body">
                        <div class="card-info-title">Category</div>
                        <h3 class="card-title mb-0">
                          {{$all_category}}
                        </h3>
                      </div>
                    </div>
                  </div>
              </div>

            </div>

           <!-- <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Featured</div>

                    <nav class="card-header-actions">
                      <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                        <i data-feather="minus-circle"></i>
                      </a>
                      
                      <div class="dropdown">
                        <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i data-feather="settings"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>

                      <a href="#" class="card-header-action">
                        <i data-feather="x-circle"></i>
                      </a>
                    </nav>
                  </div>
                  <div class="card-body collapse show" id="card1">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>
      

  @endsection    