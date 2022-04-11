
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FSMS - Filling Station Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{ asset("frontend_assets/images/favicon.png") }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v4.0.0-beta.2 css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/bootstrap.min.css") }}">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/owl.carousel.min.css") }}">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/font-awesome.min.css") }}">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/flaticon.css") }}">
    <!-- jquery-ui.css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/jquery-ui.css") }}">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/metisMenu.min.css") }}">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/swiper.min.css") }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/styles.css") }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset("frontend_assets/css/responsive.css") }}">
    <!-- modernizr css -->
    <script src="{{ asset("frontend_assets/js/vendor/modernizr-2.8.3.min.js") }}"></script>
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>
    <!-- search-form here -->
    <div class="search-area flex-style">
        <span class="closebar">Close</span>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <div class="search-form">
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-form here -->
    <!-- header-area start -->
    <header class="header-area">
        <div class="header-top bg-2">
            <div class="fluid-container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <ul class="d-flex header-contact">
                           <li><i class="fa fa-phone"></i> +880 1784898967</li>
                            <li><i class="fa fa-envelope"></i> youremail@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-12">
                        <ul class="d-flex account_login-area">


                            <li class="nav-item active dropdown">

                                @guest()
                                <li class="nav-item"><a href="{{url('login')}}" class="nav-link">Login/Registration</a></li>


                                @endguest

                                @auth()

                                <a href="javascript:void(0);"><i class="fa fa-user"></i>
                                    {{auth()->user()->name}} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown_style">
                                    </li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                </ul>

                                @endauth

                              </li>


               @auth()
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Order</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="">My Order</a>

              </div>

              @endauth














                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="fluid-container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-sm-6 col-6">
                        <div class="logo">
                            <a href="{{ '/' }}">

                        <img src="{{ asset("frontend_assets/images/logo.png") }}" alt="">
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <nav class="mainmenu">
                            <ul class="d-flex">
                                <li class="active"><a href="{{ '/' }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li>
                                    <a href="javascript:void(0);">Shop <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown_style">
                                        <li><a href="{{ url('shop') }}">Shop Page</a></li>

                                        <li><a href="{{ url('cart') }}">Cart</a></li><!--
                                        <li><a href="wishlist.html">Wishlist</a></li>-->
                                    </ul>
                                </li>


                                <li><a href="{{ url('about') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 col-lg-2 col-sm-5 col-4">
                        <ul class="search-cart-wrapper d-flex">
                            <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>

                            <li>
                                <a href="javascript:void(0);"><i class="flaticon-shop"></i> <span>{{ App\Models\Cart::where('generated_cart_id',Cookie::get('generated_cart_id'))->count()  }}</span></a>
                                <ul class="cart-wrap dropdown_style">
                                    @php
                                        $sub_total=0;
                                    @endphp
                                    @foreach(App\Models\Cart::where('generated_cart_id',Cookie::get('generated_cart_id'))->get() as $cart_fuel)
                                    <li class="cart-items">
                                        <div class="cart-img">
                                            <img width="50" src="{{ asset('uploads/fuel') }}/{{ App\Models\Fuel::find($cart_fuel->fuel_id)->fuel_photo }}" alt="">
                                        </div>
                                        <div class="cart-content">
                                            <a href="cart.html">{{ App\Models\Fuel::find($cart_fuel->fuel_id)->name }}</a>
                                            <span>QTY : {{ $cart_fuel->quantity }}</span>
                                            <p>{{ App\Models\Fuel::find($cart_fuel->fuel_id)->price*$cart_fuel->quantity }} BDT</p>

                                            <a href="{{ url('delete/cart') }}/{{ $cart_fuel->id }}"><i class="fa fa-times"></i></a>

                                        </div>
                                    </li>
                                    @php
                                        $sub_total=$sub_total+(App\Models\Fuel::find($cart_fuel->fuel_id)->price*$cart_fuel->quantity);
                                    @endphp
                                    @endforeach

                                    <li>Subtotol: <span class="pull-right">{{ $sub_total }}</span></li>
                                    <li class="pt-3">
                                        <a href="{{ url('/cart') }}" class="btn btn-danger text-white" >Go To Cart</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1 col-2 d-block d-lg-none">
                        <div class="responsive-menu-tigger">
                            <a href="javascript:void(0);">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
            <div class="responsive-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-block d-lg-none">
                            <ul class="metismenu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="sidemenu-items">
                                    <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Shop </a>
                                    <ul aria-expanded="false">
                                        <li><a href="shop.html">Shop Page</a></li>
                                        <li><a href="single-product.html">Product Details</a></li>
                                        <li><a href="cart.html">Shopping cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="sidemenu-items">
                                    <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Pages </a>
                                    <ul aria-expanded="false">
                                      <li><a href="about.html">About Page</a></li>
                                      <li><a href="single-product.html">Product Details</a></li>
                                      <li><a href="cart.html">Shopping cart</a></li>
                                      <li><a href="checkout.html">Checkout</a></li>
                                      <li><a href="wishlist.html">Wishlist</a></li>
                                      <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="sidemenu-items">
                                    <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Blog</a>
                                    <ul aria-expanded="false">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
        </div>
    </header>
    <!-- header-area end -->

    <!--main part-->

@yield('content')

<!-- start social-newsletter-section -->
<section class="social-newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter text-center">
                    <h3>Subscribe  Newsletter</h3>
                    <div class="newsletter-form">
                        <form>
                            <input type="text" class="form-control" placeholder="Enter Your Email Address...">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end social-newsletter-section -->
<!-- .footer-area start -->
<div class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-item">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="footer-top-text text-center">
                            <ul>
                                <li><a href="{{ url('home') }}">home</a></li>
                                <li><a href="#">our story</a></li>
                                <li><a href="{{ url('shop') }}">shop</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="{{ url('contact') }}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="footer-icon">
                        <ul class="d-flex">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <div class="footer-content">
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure righteous indignation and dislike</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-12">
                    <div class="footer-adress">
                        <ul>
                            <li><a href="#"><span>Email:</span> domain@gmail.com</a></li>
                            <li><a href="#"><span>Tel:</span> +880 1784898967</a></li>
                            <li><a href="#"><span>Adress:</span> Uttara ,Dhaka-1230</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="footer-reserved">
                        <ul>
                            <li>Copyright © Developed By Ishrat Jahan RUmi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .footer-area end -->

<!-- jquery latest version -->
<script src="{{ asset("frontend_assets/js/vendor/jquery-2.2.4.min.js") }}"></script>
<!-- bootstrap js -->
<script src="{{ asset("frontend_assets/js/bootstrap.min.js") }}"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="{{ asset("frontend_assets/js/owl.carousel.min.js") }}"></script>
<!-- scrollup.js -->
<script src="{{ asset("frontend_assets/js/scrollup.js") }}"></script>
<!-- isotope.pkgd.min.js -->
<script src="{{ asset("frontend_assets/js/isotope.pkgd.min.js") }}"></script>
<!-- imagesloaded.pkgd.min.js -->
<script src="{{ asset("frontend_assets/js/imagesloaded.pkgd.min.js") }}"></script>
<!-- jquery.zoom.min.js -->
<script src="{{ asset("frontend_assets/js/jquery.zoom.min.js") }}"></script>
<!-- countdown.js -->
<script src="{{ asset("frontend_assets/js/countdown.js") }}"></script>
<!-- swiper.min.js -->
<script src="{{ asset("frontend_assets/js/swiper.min.js") }}"></script>
<!-- metisMenu.min.js -->
<script src="{{ asset("frontend_assets/js/metisMenu.min.js") }}"></script>
<!-- mailchimp.js -->
<script src="{{ asset("frontend_assets/js/mailchimp.js") }}"></script>
<!-- jquery-ui.min.js -->
<script src="{{ asset("frontend_assets/js/jquery-ui.min.js") }}"></script>
<!-- main js -->
<script src="{{ asset("frontend_assets/js/scripts.js") }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('footer_script');
</body>



<!-- Mirrored from themepresss.com/tf/html/tohoney/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 03:33:34 GMT -->
</html>
