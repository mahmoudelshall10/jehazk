<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    
<!-- Mirrored from demo.devitems.com/dilima-preview/dilima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2019 18:38:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         @if(Request::url() === url('/') )
         <title>Home | Jehazak</title>
         @elseif(Request::url() === url('/register'))
         <title>Register | Jehazak</title>
         @elseif(Request::url() === url('/shop-now/product_id/ASC'))
         <title>Shop | Jehazak</title>
         @elseif(Request::url() === url('/shop-now/price/ASC'))
         <title>Shop | Jehazak</title>
         @elseif(Request::url() === url('/shop-now/price/DESC'))
         <title>Shop | Jehazak</title>
         @elseif(Request::url() === url('/show-cart'))
         <title>Mycart | Jehazak</title>
         @elseif(Request::url() === url('/contact-us'))
         <title>Contact | Jehazak</title>
         @elseif(Request::url() === url('/all-blog'))
         <title>Articals</title>
         @elseif(Request::url() === url('/profile'))
         <title>MyProfile</title>
         @elseif(Request::url() === url('/contact-us'))
         <title>Contact | Jehazak</title>
         @elseif(Request::url() === url('/single-product'))
         <title>Single-Product | Jehazak</title>
        @else
        <title>Jehazak</title>

        @endif
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.png')}}"> 
        <!-- Fonts  -->
        <link href='https://fonts.googleapis.com/css?family=Khula:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        @if(Request::segment(2) === 'single-product' || 'contact-us')
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        @endif
        <!-- style CSS
        ============================================ -->          
        <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
        <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body class="home-1">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start main area -->
        <div class="main-area">
            <!-- Start header -->
            <header>
                <!-- Start top call-to acction -->
                <div class="top-bar-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="top-call-to-acction">
                                    <p>
                                        <a href="tel:0123-456-789"><i class="fa fa-phone"></i> Call us now: 0123-456-789</a>
                                        <a href="mailto:info@jehazak.com"><i class="fa fa-envelope-o"></i> E-mail: info@jehazak.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 pull-right">
                                <div class="social-and-menu">
                                    <!-- <div class="top-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="#">English <i class="fa fa-caret-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">Français</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">USD <i class="fa fa-caret-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Dollar (USD)</a></li>
                                                        <li><a href="#">Pound (GBP)</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div> -->
                                    <div class="top-social">
                                        <p>
                                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                                            <a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            <a href="www.vimeo.com/%c3%a2%c2%80%c2%8e"><i class="fa fa-vimeo-square"></i></a>
                                            <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End top call-to acction -->
                <!-- Start logo and search area -->
                <div class="logo-and-search-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9">
                                <!-- Start user info adn search -->
                                <div class="user-info-adn-search">
                                    <div class="user-info">
                                        <p>
                                            <a href="#"><i class="fa fa-user"></i> My Account</a>
                                            <a href="wishlists.html"><i class="fa fa-heart-o"></i> Wishlist</a>
                                            <a href="#"><i class="fa fa-key"></i> Sign out</a>
                                        </p>
                                    </div>
                                    <div class="search-and-cart">
                                        <div class="search-categori">
                                            <div class="categori">
                                                <form id="select-categoris" method="post" class="form-horizontal">
                                                    <select name="language">
                                                        <option value="">Categories</option>
                                                        <option value="12">Automotive</option>
                                                        <option value="21">electronic </option>
                                                        <option value="25">Camera</option>
                                                        <option value="26">Electronic </option>
                                                        <option value="27">Cosmetic </option>
                                                        <option value="28">Medical</option>
                                                        <option value="29">Laptop</option>
                                                        <option value="30">Phasellus</option>
                                                        <option value="22">mobile</option>
                                                        <option value="31">Camcorders </option>
                                                        <option value="32">Electronic </option>
                                                        <option value="33">Cosmetic </option>
                                                        <option value="34">Laptop</option>
                                                        <option value="35">Medical</option>
                                                        <option value="36">Phasellus</option>
                                                        <option value="23">laptop </option>
                                                        <option value="37">Phasellus</option>
                                                        <option value="38">Healthcare </option>
                                                        <option value="39">Electronic </option>
                                                        <option value="40">Cosmetic </option>
                                                        <option value="13">Electronics </option>
                                                        <option value="24">camcorder </option>
                                                        <option value="46">Healthcare </option>
                                                        <option value="47">Laptop</option>
                                                        <option value="48">Camera</option>
                                                        <option value="41">Medical</option>
                                                        <option value="49">Camera</option>
                                                        <option value="50">Camcorders</option>
                                                        <option value="51">Camcorders</option>
                                                        <option value="42">Healthcare</option>
                                                        <option value="52">Medical</option>
                                                        <option value="53">Healthcare</option>
                                                        <option value="54">Healthcare </option>
                                                        <option value="14">Sports</option>
                                                        <option value="43">category 1</option>
                                                        <option value="60">day </option>
                                                        <option value="61">evening </option>
                                                        <option value="62">night </option>
                                                        <option value="44">category 2 </option>
                                                        <option value="63">kids </option>
                                                        <option value="64">men </option>
                                                        <option value="65">Women </option>
                                                        <option value="45">category 3 </option>
                                                        <option value="66">clothing </option>
                                                        <option value="67">Accessories </option>
                                                        <option value="15">Smartphone</option>
                                                        <option value="55">category 1 </option>
                                                        <option value="56">category 2 </option>
                                                        <option value="57">category 3 </option>
                                                        <option value="16">Beauty </option>
                                                        <option value="58">category 1 </option>
                                                        <option value="59">category 2 </option>
                                                        <option value="17">Bags, Shoes</option>
                                                        <option value="18">Networking </option>
                                                        <option value="19">Accessories </option>
                                                        <option value="20">Entertainment </option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="search-box">
                                                <form action="#">
                                                    <input type="text" class="form-control input-sm" maxlength="64" placeholder="Enter your search key ... " />
                                                    <button type="submit">Search</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shoping-cart">
                                            <a href="cart.html"><span>My Cart (3)</span></a>
                                            <div class="add-to-cart-product">
                                                <div class="cart-product product-item11">
                                                    <div class="cart-product-image">
                                                        <a href="single-product.html"><img src="img/cart/faded-short-sleeves-tshirt.jpg" alt="Product"></a>
                                                    </div>
                                                    <div class="cart-product-info">
                                                        <p><span>1</span>x<a href="single-product.html">Faded...</a></p>
                                                        <a href="single-product.html">S, Orange</a>
                                                        <span class="price">£ 19.81</span>
                                                    </div>
                                                    <div class="cart-product-remove">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                                <div class="cart-product">
                                                    <div class="cart-product-image">
                                                        <a href="single-product.html"><img src="img/cart/printed-dress.jpg" alt="Product"></a>
                                                    </div>
                                                    <div class="cart-product-info">
                                                        <p><span>1</span>x<a href="single-product.html">blouse</a></p>
                                                        <a href="single-product.html">S, Black</a>
                                                        <span class="price">£ 32.40</span>
                                                    </div>
                                                    <div class="cart-product-remove">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                                <div class="cart-product">
                                                    <div class="cart-product-image">
                                                        <a href="single-product.html"><img src="img/cart/printed-summer-dress.jpg" alt="Product"></a>
                                                    </div>
                                                    <div class="cart-product-info">
                                                        <p><span>1</span>x<a href="single-product.html">Printed...</a></p>
                                                        <a href="single-product.html">S, Yellow</a>
                                                        <span class="price">£ 36.60</span>
                                                    </div>
                                                    <div class="cart-product-remove">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                                <div class="cart-price">
                                                    <div class="cart-product-line fast-line">
                                                        <span>Shipping</span>
                                                        <span class="free-shiping">$10.50</span>
                                                    </div>
                                                    <div class="cart-product-line">
                                                        <span>Total</span>
                                                        <span class="total">£ 88.81</span>
                                                    </div>
                                                </div>
                                                <div class="cart-checkout">
                                                    <a href="checkout.html">Check out<i class="fa fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End user info adn search -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End logo and search area -->
                <!-- Start mainmenu-area -->
                <div class="mainmenu-area">
                    <div class="container">
                        <div class="row">
                            <div class="mainmenu">
                                <nav>
                                    <ul>
                                        <li><a class="home" href="index.html">Home</a></li>
                                        <li><a href="shop-grid.html">shop</a></li>
                                        <li><a href="cart.html"><span>cart</span></a></li>
                                        <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="login.html"><span>Login</span></a></li>
                                         <!-- <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html"><span>About us</span></a></li>
                                                <li><a href="blog.html"><span>Blog</span></a></li>
                                                <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                                <li><a href="single-blog.html"><span>single blog</span></a></li>
                                                <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                                <li><a href="shop-list.html"><span>shop list</span></a></li>
                                                <li><a href="single-product.html"><span>single product</span></a></li>
                                                
                                                <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                                <li><a href="checkout.html"><span>checkout</span></a></li>
                                                
                                                <li><a href="contact-us.html"><span>contact us</span></a></li>
                                                <li><a href="404.html"><span>404</span></a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mainmenu-area -->
                <!-- Start mobile menu -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 np">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="nav">
                                            <li><a class="home" href="index.html">Home</a></li>
                                            <li><a href="shop-grid.html">shop</a></li>
                                            <li><a href="cart.html"><span>cart</span></a></li>
                                            <li><a href="wishlists.html"><span>wishlists</span></a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                            <li><a href="login.html"><span>Login</span></a></li>
                                            <!-- <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about-us.html"><span>About us</span></a></li>
                                                    <li><a href="blog.html"><span>Blog</span></a></li>
                                                    <li><a href="blog-non-sidebar.html"><span>blog non sidebar</span></a></li>
                                                    <li><a href="single-blog.html"><span>single blog</span></a></li>
                                                    <li><a href="shop-grid.html"><span>shop grid</span></a></li>
                                                    <li><a href="shop-list.html"><span>shop list</span></a></li>
                                                    <li><a href="single-product.html"><span>single product</span></a></li>
                                                    <li><a href="checkout.html"><span>checkout</span></a></li>
                                                    <li><a href="contact-us.html"><span>contact us</span></a></li>
                                                    <li><a href="404.html"><span>404</span></a></li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End mobile menu -->
            </header>
            <!-- End header -->



         @yield('user_content')

            <!-- Start footer -->
            <footer>
                <!-- Start footer top -->
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start footer top box -->
                            <div class="col-sm-3">
                                <div class="footer-top-box">
                                    <i class="fa fa-phone-square"></i>
                                    <a href="tel:+-0123-456-789">+ 0(123) 456 789</a>
                                    <p>Order by phone</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                            <!-- Start footer top box -->
                            <div class="col-sm-3">
                                <div class="footer-top-box">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Working time</span>
                                    <p>Mon - sun: 8.00 - 18.00</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                            <!-- Start footer top box -->
                            <div class="col-sm-3">
                                <div class="footer-top-box">
                                    <i class="fa fa-paper-plane"></i>
                                    <span>Free shipping</span>
                                    <p>on order over $199</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                            <!-- Start footer top box -->
                            <div class="col-sm-3">
                                <div class="footer-top-box last">
                                    <i class="fa fa-history"></i>
                                    <span>Money back 100%</span>
                                    <p>Within 30 days affter delivery</p>
                                </div>
                            </div>
                            <!-- End footer top box -->
                        </div>
                    </div>
                </div>
                <!-- End footer top -->
                <!-- Start footer medil -->
                <div class="footer-medil">
                    <div class="container">
                        <div class="row">
                            <!-- Start footer categori -->
                            <div class="col-sm-8">
                                <div class="footer-categori">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i> Automotive & Motorcycle</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Electronics</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Sports & Outdoors</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Smartphone & Tablets</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Health & Beauty</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Bags, Shoes & Accessories</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Computers & Networking</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Laptops & Accessories</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i> Entertainment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End footer categori -->
                            <!-- Start footer search area -->
                            <div class="col-sm-4">
                                <div class="footer-search-area">
                                    <h4>Newsletter</h4>
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <button class="submitNew" name="submitNewsletter" type="submit">
                                                <i class="fa fa-envelope"></i>
                                            </button>
                                            <input type="text" value="Enter your e-mail" size="18" name="email" id="newsletter-input" class="inputNew form-control grey newsletter-input">
                                        </div>
                                    </form>
                                    <div class="hiring">
                                        <div class="img_in"><img alt="icon" src="{{asset('frontend/img/hire_logo.jpg')}}"></div>
                                        <div class="info">
                                            <h4>we’re hiring!</h4>
                                            <p>Click <a href="#">here</a> for more information</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End footer search area -->
                        </div>
                        <!-- Start footer medil information -->
                        <div class="footer-medil-information">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="info-box">
                                        <h4>Store Information</h4>
                                        <ul>
                                            <li>My Company</li>
                                            <li>Paris - France</li>
                                            <li>0123-456-789</li>
                                            <li><a href="mailto:admin@bootexperts.com">admin@bootexperts.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="info-box">
                                        <h4>Information</h4>
                                        <ul>
                                            <li class="item"><a title="Specials" href="#">Specials</a></li>
                                            <li class="item"><a title="New products" href="#"> New products</a></li>
                                            <li class="item"><a title="Best sellers" href="#"> Best sellers</a></li>
                                            <li class="item"><a title="Contact us" href="contact-us.html">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="info-box">
                                        <h4><a href="#">My account</a></h4>
                                        <ul>
                                            <li class="item"><a title="Specials" href="#">My orders</a></li>
                                            <li class="item"><a title="New products" href="#"> My credit slips</a></li>
                                            <li class="item"><a title="Best sellers" href="#"> My addresses</a></li>
                                            <li class="item"><a title="Contact us" href="#">My personal info</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="info-box">
                                        <h4>extra link</h4>
                                        <ul>
                                            <li class="item"><a title="Specials" href="#">gift cards</a></li>
                                            <li class="item"><a title="New products" href="#">e- gift cards</a></li>
                                            <li class="item"><a title="Best sellers" href="#">corporate gift cards</a></li>
                                            <li class="item"><a title="Contact us" href="#">check balance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End footer medil information -->
                    </div>
                </div>
                <!-- End footer medil -->
                <!-- Start footer copyright -->
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2015 <a href="http://bootexperts.com/">BootExperts</a>. All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="footer-card pull-right">
                                    <img src="img/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End footer copyright -->
            </footer>
            <!-- End footer -->
        </div>
        <!-- End main area -->
        <!-- JS -->

        
                <!-- jquery-1.11.3.min js
        ============================================ -->         
        <script src="{{asset('frontend/js/vendor/jquery-1.11.3.min.js')}}"></script>
        
        <!-- bootstrap js
        ============================================ -->         
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        
        <!-- owl.carousel.min js
        ============================================ -->       
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        
        <!-- jquery.nivo.slider.pack js
        ============================================ -->       
        <script src="{{asset('frontend/js/jquery.nivo.slider.pack.js')}}"></script>

        <!-- jqueryui js
        ============================================ -->       
        <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>

        <!-- jquery.scrollUp.min js
        ============================================ -->       
        <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>

        <!-- wow js
        ============================================ -->       
        <script src="{{asset('frontend/js/wow.js')}}"></script>

        <!-- jquery.meanmenu js
        ============================================ -->       
        <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
        
        <!-- plugins js
        ============================================ -->         
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        
        <!-- main js
        ============================================ -->           
        <script src="{{asset('frontend/js/main.js')}}"></script>
        @if(Request::url() == url('/contact-us'))
              <!-- Google Map js -->
            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.663293, -73.956351)
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });

                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        @endif
    </body>

<!-- Mirrored from demo.devitems.com/dilima-preview/dilima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2019 18:39:16 GMT -->
