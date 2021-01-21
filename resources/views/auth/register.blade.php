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
                                    Register
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <!-- LOGIN-AREA START -->
                <div class="lognin-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="cart-title">Register</h4>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Registered-Customers End -->
                            <div class="col-md-6">
                                <form method="POST" action="{{ route('register') }}">
                                  @csrf

                                  
                                    <div class="new-customers">
                                        <h3>NEW CUSTOMERS</h3>
                                        <div class="row">


                                            <div class="col-sm-6">
                                                <input autocomplete="off" type="text" class="custom-form" placeholder="First Name" name="firstname" required autofocus />
                                            </div>

                                            <div class="col-sm-6">
                                                <input autocomplete="off" type="text" class="custom-form" placeholder="Last Name" name="lastname" required />
                                            </div>

                                            
                                            <div class="col-md-6">
                                                <input autocomplete="off" id="name" type="text" class="custom-form{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Username" required >

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="col-md-6">
                                                <input autocomplete="off" id="email" type="email" class="custom-form{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input autocomplete="off" type="text" class="custom-form" placeholder="Address" name="address" />
                                            </div>
                                        </div>

                                          
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input autocomplete="off" type="text" class="custom-form" placeholder="Phone Number" name="phone" />
                                            </div>
                                           
                                        </div>

                                       
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input autocomplete="off" id="password" type="password" class="custom-form{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password">

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div
                                        >
                                        <div class="row">
                                            <div class="col-sm-12">
                                                    <input autocomplete="off" id="password-confirm" type="password" class="custom-form" name="password_confirmation" required placeholder="password confirmation">
                                                </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-sm-6">
                                               
                                                <button class="btn btnContact" type="submit">register</button>

                                            </div>
                                          
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LOGIN-AREA END -->
            </div>
            <!-- End contact page area -->
            <!-- End page content -->    

@endsection