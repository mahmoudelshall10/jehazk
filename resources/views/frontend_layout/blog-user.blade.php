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
                                    Blog
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <div class="blog-area">
                    <div class="container">
                        <div class="row">
                            @foreach($all_blog as $blog)
                            <!-- Start blog post -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="blog-post2">
                                    <div class="blog-box2">
                                        <div class="entry-date">
                                            <div class="day">{{ $blog->created_at->day }}</div>
                                            <div class="month">{{ date("M", mktime($blog->created_at->month) ) }}</div>
                                        </div>  
                                        <div class="entry-main-content">
                                            <div class="entry-thumbnail">
                                                <img alt="" src="{{URL::to('/')}}/storage/{{ $blog->image }}">
                                                <div class="block_hover">
                                                    <div class="blog-link">
                                                        <a class="fancybox" href="{{URL::to('/')}}/storage/{{ $blog->image }}"><i class="fa fa-search" data-fancybox-group="gallery"></i></a> 
                                                        {{-- <a href="single-blog.html"><i class="fa fa-link"></i></a> --}}
                                                    </div>
                                                </div>
                                            </div>                 
                                            <div class="entry-content-other">
                                                <h3><a href="single-blog.html">{{$blog->title}}</a></h3>
                                                <div class="summary">
                                                    <p>{{$blog->description}}</p>    
                                                    {{-- <a href="single-blog.html" class="read-more-link">Read More</a>  --}}
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End blog post -->
                            @endforeach
                            <!-- Start blog pagination -->
                            <div class="blog-pagination">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End blog pagination -->
                        </div>
                    </div>
                </div>
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