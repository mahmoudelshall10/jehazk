@extends('layouts.user_layout')
@section('user_content')


<!-- Start page content -->
            <div class="page-content">
                <!-- Start breadcume area -->
                <div class="breadcume-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="breadcrumb">
                                    <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                                    <span class="navigation-pipe">&gt;</span>
                                    All Products
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <!-- Start shop area -->
                <div class="shop-area">
                    <div class="container">
                        <div class="row">
                   
                            <!-- End shop categori area -->
                            <!-- Start categori content -->
                            <div class=" col-md-12">
                                <div id="content-shop" class="categori-content">
                                    <div class="categori-baner">
                                        <img src="{{asset('img/shop/sports-outdoors.jpg')}}" alt="">
                                    </div>
                                    @if($countProducts === 1 || $countProducts === 0)
                                        <h1 class="page-heading product-listing"><span class="cat-name">All Products</span><span class="heading-counter">There is {{ $countProducts}} product.</span>
                                            </h1>
                                    @else
                                        <h1 class="page-heading product-listing"><span class="cat-name">All Products</span><span class="heading-counter">There are {{ $countProducts}} products.</span>
                                            </h1>
                                    @endif
                                    <!-- Start catagori short -->
                                    <div class="catagori-short">
                                        <ul id="gridlist" class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active"><a href="#grid" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                            <li><a href="#list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <div class="chose-box">
                                            <p class="selector1 hidden-xs">
                                                <label>Sort by</label>
                                                <select class="selectProductSort form-control" id="selectProductSort1">
                                                    <option selected="selected" value="position:asc">--</option>
                                                    <option value="price:asc">Price: Lowest first</option>
                                                    <option value="price:desc">Price: Highest first</option>
                                                    <option value="name:asc">Product Name: A to Z</option>
                                                    <option value="name:desc">Product Name: Z to A</option>
                                                    <option value="quantity:desc">In stock</option>
                                                    <option value="reference:asc">Reference: Lowest first</option>
                                                    <option value="reference:desc">Reference: Highest first</option>
                                                </select>
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <!-- End catagori short -->
                                     <div id="my-tab-content" class="tab-content">
                                        <!-- Start categori grid view -->
                                        <div id="grid" class="tab-pane active categoti-grid-view row">
                                           
                                           
                                            @foreach($all_product_category as $product)
                                            <!-- Start featured item -->
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="featured-inner">
                                                    <div class="featured-image">
                                                        <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">
                                                            <img src="{{URL::to('/')}}/storage/{{$product->image}}" alt="">
                                                        </a>
                                                        @if($product->offer != NULL)
                                                        <span class="price-percent-reduction">-{{$product->offer}}%</span>
                                                        @endif
                                                    </div>
                                                    <div class="featured-info">
                                                        <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">{{$product->name}}</a>                                             
                                                        <span class="price">
                                                            @if($product->old_price != NULL)
                                                            <del><small>{{$product->old_price}} LE</small></del>
                                                            @endif <strong> {{$product->price}} LE </strong>
                                                        </span>
                                                       
                                                        <div class="featured-button">
                                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                            
                                                            <a href="{{URL::to('/add-to-cart/' .$product->pk_id)}}" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End featured item -->
                                            @endforeach
                                        </div>
                                        <!-- End categori grid view -->

                                    </div>
                                    <!-- Start categori show item -->
                                    <div class="categori-show-item">
                                        <div class="cat-show-item">
                                            {{-- <p> {{ $results->links() }}</p> --}}
                                        </div>
                                     <!--   <div class="cat-show-button">
                                            <a class="cat-button" href="#"><span>Compare(0)<i class="fa fa-angle-right"></i></span></a>
                                        </div>-->
                                    </div>
                                    <!-- End categori show item -->
                                </div>
                            </div>
                            <!-- Start categori content -->
                        </div>
                    </div>
                </div>
                <!-- End shop area -->
            </div>
            <!-- End page content -->

@endsection            