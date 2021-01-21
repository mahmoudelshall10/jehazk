<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Vendor | Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/demo/img/favicon.png')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('vendor/css/style.css')}}" />

    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                <div class="mt-2 text-center">
                                    <h2>Create Your Account</h2>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    Sign up to get started with Your Dashboard
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
                                    <form  action="{{url('vendor/save-vendor')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                   
                                   <div class="cont">
                                    
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input name="avatar" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><i class="fas fa-edit"></i></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                           
                                        

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" placeholder="Enter lastname" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"  placeholder="Enter email address" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address"  placeholder="Enter address address" autocomplete="off">
                                        </div>

                                         <div class="form-group">
                                            <input type="phone" class="form-control" name="phone"  placeholder="Enter phone phone" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                        </div>



                                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                    </form>

                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                <!--<p class="mt-4 social-login text-center">
                                    <a href="#" class="btn btn-twitter"><em class="ion-social-twitter"></em></a>
                                    <a href="#" class="btn btn-facebook"><em class="ion-social-facebook"></em></a>
                                    <a href="#" class="btn btn-linkedin"><em class="ion-social-linkedin"></em></a>
                                    <a href="#" class="btn btn-google"><em class="ion-social-googleplus"></em></a>
                                    <a href="#" class="btn btn-github"><em class="ion-social-github"></em></a>
                                </p>-->
                                <p class="text-center">
                                    Already have an account? <a href="{{url('/vendor/login')}}">Login Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                  <!--  <div class="col-sm-12 mt-5 footer">
                        <p class="text-white small text-center">
                            &copy; 2017 Login/Register Forms. A FREE Bootstrap 4 component by 
                            <a href="https://wireddots.com">Wired Dots</a>. Designed by <a href="https://twitter.com/attacomsian">@attacomsian</a>
                        </p>
                    </div>-->
                </div>
            </div>
        </section>
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="{{asset('vendor/js/js.js')}}"></script>
    </body>
</html>
