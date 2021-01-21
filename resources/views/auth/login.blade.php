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
                                    Login
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
                                <h4 class="cart-title">Login</h4>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Registered-Customers Start -->
                            <div class="col-md-6">
                               <form method="POST" action="{{ route('login') }}">
                                  @csrf

                                    <div class="registered-customers">
                                        <h3>REGISTERED CUSTOMERS</h3>
                                        <div class="registered">
                                            <p>If you have an account with us, Please log in.</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input autocomplete="off" id="email" type="email" class="custom-form{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                     <input id="password" type="password" class="custom-form{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                            </div>
                                             <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <p><label class="forgot">
                                                      @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif</label></p>
                                            <button class="btn btnContact" type="submit">login</button>
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