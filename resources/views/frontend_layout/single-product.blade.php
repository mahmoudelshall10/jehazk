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
                                    <a title="Return to Home" href="{{url('/')}}" class="home"><i class="fa fa-home"></i></a>
                                    <span class="navigation-pipe">&gt;</span>
                                    @foreach($categories as  $children)

                                    @if($children->first()->parent)
          
          
                                    @foreach($children as $child)
                                       {{$child->name}}
                                    @endforeach
          
                                   
          
                                    @endif
          
                                    @endforeach
                                            @foreach($categories as $children)

                                            @if($children->first()->parent)
                                            <a class="hidden-xs" title="Automotive & Motorcycle">
                                             {{$children->first()->parent->name}}
                  
                                            </a>

                                            @endif
                  
                                           @endforeach
                                    <span class="hidden-xs navigation-pipe">&gt;</span>
                                    {{-- {{$objProduct->category->parent}}  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <!-- Start single product area -->
                <div class="container">
                    <div class="row">
                        <div class="single-products">
                            <!-- Start single product image -->
                            <div class="col-sm-5">
                                <div class="single-product-image"> 
                                    <div id="content-eleyas">
                                        <div id="my-tab-content" class="tab-content">
                                            <div class="tab-pane active" id="view1">
                                                <span class="new-box">
                                                    <span class="new-label">New</span>
                                                </span>
                                                <a class="fancybox" href="{{URL::to('/')}}/storage/{{ $objProduct->image }}" data-fancybox-group="gallery" title="">
                                                    <img src="{{URL::to('/')}}/storage/{{ $objProduct->image }}" alt="">
                                                    <span>View larger<i class="fa fa-search-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single product image -->
                            <!-- Start single product details -->
                            <div class="col-sm-7">
                                <div class="single-product-details">
                                    <h1>{{ $objProduct->name }}</h1>
                                    <div class="sin-social">
                                        <p>
                                            <a class="btn btn-default twitter" href="#"><i class="fa fa-twitter"></i>Tweet</a>
                                            <a class="btn btn-default facebook" href="#"><i class="fa fa-facebook"></i>Share</a>
                                            <a class="btn btn-default google-plus" href="#"><i class="fa fa-google-plus"></i>Google+</a>
                                            <a class="btn btn-default pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a>
                                        </p>
                                    </div>
                                    {{-- <p class="rating-and-review">
                                        <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        <a href="#">Read reviews (0)</a>
                                        <a href="#">Write a review</a>
                                    </p> --}}
                                    <h2><span>{{$objProduct->price}}</span></h2>
                                    {{-- <p><strong>Reference:</strong> {{ $objProduct->category->name }} </p> --}}
                                    {{-- <p><strong>Condition:</strong> {{ $objProduct}} </p> --}}
                                    <p>{{$objProduct->description}}</p>
                                    {{-- <p class="sin-item"><span class="sin-item-text"> 292 Items </span><span class="sin-item-btn">In stock</span></p> --}}
                                    {{-- <form method="post" action="#">
                                        {<div class="numbers-row">
                                            <label>Quantity</label>
                                           <input type="number" name="french-hens" id="french-hens">
                                        </div> 
                                    </form> --}}
                                    {{-- <p class="selector1">
                                        <label>Size</label>
                                        <select id="selectProductSort1" class="selectProductSort form-control">
                                            <option value="position:asc" selected="selected">S</option>
                                            <option value="price:asc">M</option>
                                            <option value="price:desc">L</option>
                                        </select>
                                    </p> --}}
                                    {{-- <p class="selector1">
                                        <label>Color</label>
                                        <a href="#" title="Orange" class="color orange"></a><a href="#" title="Blue" class="color blue"></a>
                                    </p> --}}
                                    <p class="buttons_bottom_block no-print" id="add_to_cart">
                                        <button class="exclusive" name="Submit" type="submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </p>
                                    <p class="sin-adto-cart-bottom">
                                        <a href="#"><i class="fa fa-envelope-o"></i>Send to a friend</a>
                                        <a href="#"><i class="fa fa-print"></i>Print</a>
                                        <a href="#"><i class="fa fa-heart"></i>Add to wishlist</a>
                                    </p>
                                </div>
                            </div>
                            <!-- End single product details -->
                        </div>
                    </div>
                </div>
                <!-- End single product area -->
                <!-- Start single product info -->
                <div class="container">
                    <div class="row">
                        <div class="single-product-info">
                            <div id="content-product-review">
                                <div class="col-xs-12 col-sm-3">
                                    <ul id="tabs" class="review-tab" data-tabs="tabs">
                                        <li class="active"><a href="#info3" data-toggle="tab">Price Compare</a></li>
                                        <li><a href="#info1" data-toggle="tab">More info</a></li>
                                        <li><a href="#info2" data-toggle="tab">Data sheet</a></li>
                                        <!-- <li><a href="#info4" data-toggle="tab">Reviews</a></li> -->
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <div id="my-tab-content-2" class="tab-content">
                                        <div class="tab-pane" id="info1">
                                            <p class="tab-info-one">{{ $objProduct->description }}</p>
                                        </div>
                                        <div class="tab-pane" id="info2">
                                            <table class="table-data-sheet">            
                                                <tbody>
                                                    <tr class="odd">
                                                        <td>Category</td>
                                                        {{-- <td>{{$objProduct->category->name}}</td> --}}
                                                    </tr>
                                                    <tr class="even">
                                                        <td>Manufacture</td>
                                                        {{-- <td>{{$objProduct->manufacture->name}}</td> --}}
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Price</td>
                                                        <td>{{$objProduct->price}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="tab-pane  active" id="info3">
                                            <div class="tab-info-product">

                                                <!-- Start featured item -->
                                                <div class="featured-inner">
                                                    <div class="featured-image">
                                                        <a href="single-product.html">
                                                            <img src="img/brand-logo/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="featured-info">
                                                        <a href="single-product.html">Company1</a>
                                                        <span class="price">$16.51</span>
                                                    </div>
                                                </div>
                                                <!-- End featured item -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single product info -->
                <!-- Start featured product -->
                <div class="featured-product-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="area-title">
                                    <h3>16 other products in the same category: </h3>
                                </div>
                            </div>
                            <div class="featured-product">
                                <div class="featured-item">
                                    @foreach ($all_product_category as $item)
                                    <div class="col-xs-12 col-sm-3">
                                            <div class="featured-inner">
                                                <div class="featured-image">
                                                    <a href="{{URL::to('/')}}/single-product/{{ $item->pk_id }}">
                                                        <img src="{{URL::to('/')}}/storage/{{ $item->product->image }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="featured-info">
                                                    <a href="{{URL::to('/')}}/single-product/{{$item->pk_id}}">{{$item->name}}</a>
                                                <span class="price">{{$item->price}}</span>
                                                    <div class="featured-button">
                                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                        
                                                        <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End featured item -->
                                    @endforeach
                                    {{-- <!-- Start featured item -->
                                    <div class="col-sm-3">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="single-product.html">
                                                    <img src="img/product/faded-short-sleeves-tshirt.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-info">
                                                <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </p>
                                                <span class="price">$16.51</span>
                                                <div class="featured-button">
                                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                    
                                                    <a href="cart.html" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End featured item --> --}}

                                    <!-- Start featured item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End featured product -->
            </div>
            <!-- End page content -->  

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
@endsection