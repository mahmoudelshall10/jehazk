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
                                    Contact Us
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <!-- Start contact page area -->
                <div class="container">
                    <!-- Start contact-map -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h4 class="cart-title">Contact Us</h4>
                            <div class="contact-map">
                                <div id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End contact-map -->

                    <!-- Start contact from atea -->
                    <div class="contact-from-atea">
                        <div class="form-and-info">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="contactDetails contactHead">
                                        <h3>CONTACT Info</h3>
                                        <p>
                                            <span class="iconContact"><i class="fa fa-map-marker"></i></span>
                                            8901 Binghamton Road, Glasgow <br> D04 89 GR, New York.
                                        </p>
                                        <p>
                                            <span class="iconContact"><i class="fa fa-phone"></i></span>
                                            Telephone: (801) 2345 - 6789 <br> Fax: (801) 2345 - 6789
                                        </p>
                                        <p>
                                            <span class="iconContact"><i class="fa fa-envelope-o"></i></span>
                                            Email: support@lionthemes.com <br> Website: www.lionthemes.com
                                        </p>
                                    </div>
                                    <div class="social-area contactHead">
                                        <h3>Follow us</h3>
                                        <ul class="socila-icon">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <div class="contactfrom">
                                        <h3>message</h3>
                                        @if (session('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                        @endif
                                        <form action="{{route('contactus.store')}}" method="post">
                                                {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name ='name' placeholder="Full name" id="InputName" class="form-control" value="{{old('name')}}">
                                                </div>
                                                <div class="col-md-6 contactemail">
                                                <input type="email" name='email' placeholder="Email" id="InputEmail" class="form-control" value="{{old('email')}}">
                                                </div>

                                                <div class="col-md-6">
                                                        <input type="text" name='phone' placeholder="Phone" id="InputPhone" class="form-control" value={{old('phone')}}>
                                                    </div>

                                                <div class="col-md-12">
                                                    <textarea placeholder="Massage" name='message' rows="13" class="form-control" value={{old('message')}}></textarea>
                                                </div>
                                            </div>
                                            <button class="btn btnContact" type="submit">send message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End contact from atea -->
                </div>
            </div>
            <!-- End contact page area -->
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