
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Vendor | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('vendor/css/style.css')}}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/demo/img/favicon.png')}}">

    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                <div class="mt-2">
                                    <img src="{{asset('vendor/img/male.jpg')}}" alt="Male" class="brand-logo mx-auto d-block img-fluid rounded-circle"/>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    Sign in to access your Dashobard
                                </p>

                                <p class="mt-4 lead text-center" style="color: red;">
                                    <?php
                                        $message=Session::get('message');
                                        if($message)
                                        {
                                            echo $message;
                                            Session::put('message',null);

                                        }
                                       ?>
                                </p>

                                @foreach ($errors->all() as $message) 
                                <p class="mt-4 text-red lead text-center">{{$message}}</p>
                                @endforeach
                                
                                <div class="mt-4">
                                    <form action="{{url('/vendor/login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                        </div>
                                        <label class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description text-white">Keep me logged in</span>
                                        </label>
                                        <button type="submit" class="btn btn-primary float-right">Sign in</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <!--<p class="content-divider center mt-4"><span>or</span></p>-->
                                </div>
                               <!-- <p class="mt-4 social-login text-center">
                                    <a href="#" class="btn btn-twitter"><em class="ion-social-twitter"></em></a>
                                    <a href="#" class="btn btn-facebook"><em class="ion-social-facebook"></em></a>
                                    <a href="#" class="btn btn-linkedin"><em class="ion-social-linkedin"></em></a>
                                    <a href="#" class="btn btn-google"><em class="ion-social-googleplus"></em></a>
                                    <a href="#" class="btn btn-github"><em class="ion-social-github"></em></a>
                                </p>-->
                                <p class="text-center">
                                    Don't have an account yet? <a href="{{url('/vendor/register')}}">Sign Up Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                 <!--   <div class="col-sm-12 mt-5 footer">
                        <p class="text-white small text-center">
                            &copy; 2017 Login/Register Forms. A FREE Bootstrap 4 component by 
                            <a href="https://wireddots.com">Wired Dots</a>. Designed by <a href="https://twitter.com/attacomsian">@attacomsian</a>
                        </p>
                    </div>-->
                </div>
            </div>
        </section>

    </body>
</html>
