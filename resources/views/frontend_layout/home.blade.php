@extends('layouts.user_layout')
@section('user_content')

            <!-- Start slider area -->
            <div class="slider-area">
                    <div id="slider" class="nivoSlider">
                
                    @foreach ($all_slider as $s)    
                        <img style ="display:none" src="{{URL::to('/')}}/storage/{{$s->image}}" data-thumb="{{URL::to('/')}}/storage/{{$s->image}}"  alt="" title="#htmlcaption{{$s->pk_id}}"/> 
                    @endforeach
                    </div>

                @foreach ($all_slider as $s)

                    <div id="htmlcaption{{$s->pk_id}}" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                        <div class="timing-bar"></div>
                        <div class="pos-slideshow-info pos-slideshow-info{{$s->pk_id}}">
                            <div class="container">
                                <div class="pos_description hidden-xs hidden-sm">
                                    <div class="title1"><span class="txt">{{$s->title1}}</span></div>
                                    <div class="title2"><span class="txt">{{$s->title2}}</span></div>
                                    <div class="pos-slideshow-readmore">
                                        <a href="{{url('/shop/product_id/ASC')}}" title="Shop now">Shop now</a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
                <!-- End slider area -->

            <!-- Start categori area -->
            <div class="categori-area">
                    <div class="container">
                        <div class="row">
                            <!-- Start categori menu -->
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="categori-menu">
                                    <div class="sidebar-menu-title">
                                        <h2><i class="fa fa-th-list"></i>Categories</h2>
                                    </div>
                                    <div class="sidebar-menu">
                                        <ul>
                                            {{-- {{dd($all_category)}} --}}
                                            {{-- @if(category::where('pk_id',$pk_id)->whereNull('fk_parent_id')->get()) --}}
                                            @foreach($all_category as $category)
                                            <li>
                                                <a href="{{URL::to('/')}}/show-products/{{$category->pk_id}}">{{ $category->name }}</a>
                                                <div class="megamenudown-sub">
                                                    <div class="mega-top">
                                                        @foreach($category->children as $subcategory)
                                                        <div class="mega-item-menu">
                                                            <a href="{{URL::to('/')}}/show-products/{{$subcategory->pk_id}}" class="title"><span>{{ $subcategory->name }}</span></a>
                                                            {{-- @foreach($subcategory->product as $product)
                                                            <a href="#"><span>{{ $product->name }}</span></a>
                                                            @endforeach --}}
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- <li><a href="shop-grid.html" class="single-menu">Bags, Shoes & Accessories</a></li> --}}
                                            @endforeach
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End categori menu -->
                            
                            <!-- Start categori banner -->
                            <div class="col-xs-12 col-sm-8 col-md-6">
                                <div class="categori-banner">
                                    <div class="banner-left">
                                    @foreach($all_product_left as $product)
                                        <div class="banner-image">
                                            <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">
                                                <img src="{{URL::to('/')}}/storage/{{$product->image}}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                    </div>
                                    
                                     <div class="banner-right">
                                        @foreach($all_product_right as $product)
                                        <div class="banner-image">
                                            <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">
                                                <img src="{{URL::to('/')}}/storage/{{ $product->image }}" alt="">
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>  
                                    
                                </div>
                            </div>
                            <!-- End categori banner -->
                            
                        <!-- Start categori slide product -->
                        <div class="col-xs-12 col-sm-12 col-md-3">
                                <div class="categori-slide-product">
                                    <div class="slide-product-title">
                                        <h3>sale off</h3>
                                    </div>
                                    <div class="slide-product">
    
                                        <!-- Start slide product item -->
                                        <div class="slide-product-item">
                                                 
    
                                            @foreach ($three_product_saleoff as $saleoff) 
                                                                     
                                            <div class="item3">
                                                <div class="product-image">
                                                    <a href="{{URL::to('/')}}/single-product/{{$saleoff->pk_id}}">
                                                        <img src="{{URL::to('/')}}/storage/{{$saleoff->image}}" alt="">
                                                    </a>
                                                    @if($saleoff->offer != NULL)
                                                    <span class="price-percent-reduction">-{{$saleoff->offer}}%</span>
                                                    @endif
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{URL::to('/')}}/single-product/{{$saleoff->pk_id}}">{{$saleoff->name}}</a>
                                                </div>
                                            </div>
    
                                                 @endforeach
                                           
                                        </div>
                                        <!-- End slide product item -->
    
                                        @for($i=0; $i < $saleoff_count;)
    
                                        <!-- Start slide product item -->
                                        <div class="slide-product-item">
                                                   
                                            <?php 
                                            $other_product_saleoff  = $all_product_saleoff
                                                                                ->skip($i+3)
                                                                                ->take(3)
                                                                                ->get(); 
                                              $i=$i+3;                      
                                            ?>    
    
                                            @foreach($other_product_saleoff as $saleoff) 
    
                                            <div class="item3">
                                                <div class="product-image">
                                                    <a href="{{URL::to('/')}}/single-product/{{$saleoff->pk_id}}">
                                                        <img src="{{URL::to('/')}}/storage/{{$saleoff->image}}" alt="">
                                                    </a>
                                                    @if($saleoff->offer != NULL)
                                                    <span class="price-percent-reduction">-{{$saleoff->offer}}%</span>
                                                    @endif
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{URL::to('/')}}/single-product/{{$saleoff->pk_id}}">{{$saleoff->name}}</a>
                                                </div>
                                            </div>
    
                                            @endforeach
                                           
                                        </div>
                                        <!-- End slide product item -->
                                           
                                           @endfor
                                         
    
                                       
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- End categori slide product -->
                        </div>
                    </div>
                </div>
            <!-- End categori area -->

            {{-- <!-- Start purches progress -->
            <div class="purches-progress-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>Purchase progress</h3>
                            </div>
                        </div>
                        <div class="progress-area">
                            <div class="col-sm-3">
                                <div class="progrtee-box icon">
                                    <h4>step 1</h4>
                                    <p>select your items</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="progrtee-box icon1">
                                    <h4>step 1</h4>
                                    <p>select your items</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="progrtee-box icon2">
                                    <h4>step 1</h4>
                                    <p>select your items</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="progrtee-box icon3">
                                    <h4>step 1</h4>
                                    <p>select your items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End purches progress --> --}}

            <!-- Start featured product -->
            <div class="featured-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>Featured Products</h3>
                            </div>
                        </div>
                        <div class="featured-product">
                            <div class="featured-item">
                                <!-- Start featured item -->
                                @foreach($all_product_featured as $product)
                                <div class="col-sm-3">
                                    <div class="featured-inner">
                                        <div class="featured-image">
                                            <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">
                                                <img src="{{URL::to('/')}}/storage/{{ $product->image }}" alt="">
                                            </a>
                                            <span class="price-percent-reduction">{{ $product->offer }}%</span>
                                        </div>
                                        <div class="featured-info">
                                            <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">{{ $product->name }}</a>
                                            <span class="price">{{ $product->price }} L.E</span>
                                            <div class="featured-button">
                                                <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                
                                                <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End featured item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End featured product -->

            {{-- <!-- Start two banner area -->
            <div class="two-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="banner-left">
                                <div class="banner-image">
                                    <a href="#">
                                        <img src="img/banner/cms14.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="banner-right">
                                <div class="banner-image">
                                    <a href="#">
                                        <img src="img/banner/cms15.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End two banner area --> --}}

            <!-- Start best sellar area -->
            <div class="best-sellar-area featured-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>BESTSELLER</h3>
                            </div>
                        </div>
                        <div class="featured-product">
                            <div class="featured-item">
                                @foreach($all_product_bestseller as $product)
                                <!-- Start featured item -->
                                <div class="col-xs-12 col-sm-3">
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
                                            <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">{{ $product->name }}</a>
                                            <span class="price">$16.51</span>
                                            <div class="featured-button">
                                                <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                
                                                <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End featured item -->                  
                                @endforeach          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End best sellar area -->
            
            <!-- Start camera and cosmatic area -->
            <div class="camera-and-cosmatic-area">
                <div class="container">
                    <div class="row">
                    @foreach($all_category_star as $category_star)
                        <div class="col-xs-12 col-sm-6">
                            <div class="area-title">
                                <h3>{{ $category_star->name}}</h3>
                            </div>
                            <div class="camera-area">
                                {{-- <p class="extra-link">
                                    <a href="#"><i class="fa fa-bar-chart"></i>10 products here</a>
                                    <a href="#"><i class="fa fa-star-o"></i>View more in category</a>
                                </p> --}}
                                <div class="row">
                                    <div class="camera-slide featured-product-area">
                                        @foreach($category_star->product as $cat_star_prod)

                                        <!-- Start featured item -->
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="{{URL::to('/')}}/single-product/{{$cat_star_prod->pk_id}}">
                                                    <img src="{{URL::to('/')}}/storage/{{ $cat_star_prod->image }}" alt="">
                                                </a>
                                                <span class="price-percent-reduction">-{{$cat_star_prod->offer}}%</span>
                                            </div>
                                            <div class="featured-info">
                                                <a href="{{URL::to('/')}}/single-product/{{$cat_star_prod->pk_id}}">{{$cat_star_prod->name}}</a>
                                                <span class="price">{{$cat_star_prod->price}}</span>
                                                <div class="featured-button">
                                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                    
                                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End featured item -->

                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- End camera and cosmatic area -->

            <!-- Start popular tab categori -->
            <div class="popular-tab-categori">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>Popular categories</h3>
                            </div>
                        </div>

                        
                        <div id="content" class="tab-menu-slide">
                            <ul id="tabs" class="popular-tab-menu" data-tabs="tabs">
                                @foreach($all_category_popular as $category_popular)
                                        @switch($category_popular->pk_id) 
                                        
                                        @case(1)
                                            <li class="{{ Request::segment(2) === '/' ? 'active' : '' }}">
                                                <a href="#tab{{$category_popular->pk_id}}" data-toggle="tab">
                                                    <i class="fa fa-laptop"></i>
                                                    <h3>{{$category_popular->name}}</h3>
                                                </a>
                                            </li>
                                        @break              
                                        
                                        @case(2)
                                            <li>
                                                <a href="#tab{{$category_popular->pk_id}}" data-toggle="tab">
                                                    <i class="fa fa-mobile"></i>
                                                    <h3>{{$category_popular->name}}</h3>
                                                </a>
                                            </li>
                                        @break
                                        
                                        @case(3)
                                            <li>
                                                <a href="#tab{{$category_popular->pk_id}}" data-toggle="tab">
                                                    <i class="fa fa-plug"></i>
                                                    <h3>{{$category_popular->name}}</h3>
                                                </a>
                                            </li>
                                        @break
                                        
                                        @case(4)
                                            <li>
                                                <a href="#tab{{$category_popular->pk_id}}" data-toggle="tab">
                                                    <i class="fa fa-microphone"></i>
                                                    <h3>{{$category_popular->name}}</h3>
                                                </a>
                                            </li>
                                        @break

                                        @case(5)
                                            <li>
                                                <a href="#tab{{$category_popular->pk_id}}" data-toggle="tab">
                                                    <i class="fa fa-gamepad"></i>
                                                    <h3>{{$category_popular->name}}</h3>
                                                </a>
                                            </li>
                                        @break

                                        @case(6)
                                            <li>
                                                <a href="#tab{{$category_popular->pk_id}}" data-toggle="tab">
                                                    <i class="fa fa-camera-retro"></i>
                                                    <h3>{{$category_popular->name}}</h3>
                                                </a>
                                            </li>
                                        @break 

                                        @default
                                            NO POPULAR CATEGORY
                                        @break
                                    @endswitch 
                                @endforeach
                            </ul>
                            
                            <div id="my-tab-content" class="tab-content row">
                                
                                @foreach($all_category_popular as $category_popular)
                                <!-- Start popular tab product -->
                                <div class="{{ Request::segment(2) === '/' ? 'tab-pane active' : 'tab-pane' }}" id="tab{{$category_popular->pk_id}}">
                                    <div class="popular-tab-product featured-product-area">
                                  
                                    <?php
                                        $results = \App\Model\Product::where('fk_category_id', $category_popular->pk_id)->get();
                                    ?>
                                    
                                        @foreach ($results as $product)
                                        <!-- Start featured item -->
                                            <div class="col-sm-3">
                                                <div class="featured-inner">
                                                    <div class="featured-image">
                                                        <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">
                                                            <img src="{{URL::to('/')}}/storage/{{ $product->image }}" alt="">
                                                        </a>
                                                        <span class="price-percent-reduction">-{{ $product->offer }}%</span>
                                                    </div>
                                                    <div class="featured-info">
                                                        <a href="{{URL::to('/')}}/single-product/{{$product->pk_id}}">{{ $product->name }}</a>
                                                        <span class="price">{{$product->price}}</span>
                                                        <div class="featured-button">
                                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                            
                                                            <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- End featured item -->
                                        
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End popular tab product -->
                                @endforeach

                               
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End popular tab categori -->

            <!-- Start brand and client -->
            <div class="brand-and-client">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="area-title">
                                    <h3>BRAND & CLIENTS</h3>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="brand-logo featured-product-area">
                                    @foreach($all_brand as $brand)
                                    <div class="clients">
                                        <a href="#"><img src="{{URL::to('/')}}/storage/{{ $brand->image }}" alt=""></a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End brand and client -->
                <script type="text/javascript">
                        $( document ).ready(function() {
                            alert( "ready!" );
                        });
                </script>
@endsection
