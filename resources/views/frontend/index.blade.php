@extends('frontend.main')
@section('content')
<main>

    <div class="slider-area ">

    <div class="slider-active">
    <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('frontend_asset/img/hero/h1_hero.jpg') }}">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-8 col-md-8">
    <div class="hero__caption" data-background="{{ asset('frontend_asset/img/hero/hero_color_bg.png') }}">
    <!--<h1 data-animation="fadeInUp" data-delay=".4s">Industery Solutions!</h1>
    <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo.</p>

    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
    <a href="industries.html" class="btn hero-btn">Our Services</a>
    </div>-->
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('frontend_asset/img/hero/h1_hero.jpg') }}">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-8 col-md-8">
    <div class="hero__caption" data-background="{{ asset('frontend_asset/img/hero/hero_color_bg.png') }}">
    <h1 data-animation="fadeInUp" data-delay=".4s">Industery Solutions!</h1>
    <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo.</p>

    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
    <a href="industries.html" class="btn hero-btn">Our Services</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="services-area d-flex justify-content-lg-between">
    <div class="single-services s-bg mb-30">
    <div class="services-icon">
    <img src="{{ asset('frontend_asset/img/icon/services_icon_1.png') }}" alt="">
    </div>
    <div class="services-caption">
    <h4>Automotive Manufacturing</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="services-btn">
    <a href="industries.html" class="arrow-btn"><img src="{{ asset('frontend_asset/img/icon/arrow_icon.png') }}" alt=""></a>
    </div>
    </div>
    <div class="single-services mb-30">
    <div class="services-icon">
    <img src="{{ asset('frontend_asset/img/icon/services_icon_2.png') }}" alt="">
    </div>
    <div class="services-caption">
    <h4>Heavy industry market</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="services-btn">
    <a href="industries.html" class="arrow-btn"><img src="{{ asset('frontend_asset/img/icon/arrow_icon.png') }}" alt=""></a>
    </div>
    </div>
    <div class="single-services s-bg mb-30">
    <div class="services-icon">
    <img src="{{ asset('frontend_asset/img/icon/services_icon_3.png') }}" alt="">
    </div>
    <div class="services-caption">
    <h4>Industry analysis</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    </div>
    <div class="services-btn">
    <a href="industries.html" class="arrow-btn"><img src="{{ asset('frontend_asset/img/icon/arrow_icon.png') }}" alt=""></a>
    </div>
    </div>
    </div>


    <div class="safe-industery-area section-padd-top30">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md pr-0">
    <div class="safe-caption pt-10 mb-40">
    <h2>Safe IndusterySolutions That Saves our Valuable Time and mony!</h2>
    <p class="safe-pera-one">Logisti Group is a representative logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide for any type of cargo.</p>
    <p class="safe-pera-two">Lorem ipsum dolor sit amet, consectetur ipis adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna oris aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    <p class="safe-pera-three"> exercitation ullamco laboris nisi ut aliquip ex ea commodo nsequat. Duis aute irure dolor in repr.</p>

    <a href="industries.html" class="btn">Our Services</a>
    </div>
    </div>
    <div class="col-xl-5 offset-xl-1 col-lg-6 pl-0">
    <div class="safe-caption-right">
    <div class="safe-img">
    <img src="{{ asset('frontend_asset/img/safe_industery/xsafe_industery_1.jpg.pagespeed.ic.3wOPY7DE7f.jpg') }}" alt="">
    </div>

    <div class="safe-alert-box">
    <div class="row">
    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 d-none d-sm-block">
    <div class="safe-alert" data-background="{{ asset('frontend_asset/img/safe_industery/color_bg.png') }}">
    <img src="{{ asset('frontend_asset/img/icon/aleart_icon.png') }}" alt="">
    <h4>Our Mission</h4>
    <p>Quis ipsum suspendisse ultrices gravidae Risus commodo.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="gallery-area">
    <div class="container-fluid p-0">
    <div class="row no-gutters">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
    <div class="gallery-box">
    <div class="single-gallery">
    <div class="gallery-img">
    <img src="{{ asset('frontend_asset/img/gallery/xgallery_1.png.pagespeed.ic.0Oc7BX55QE.jpg') }}" alt="">
    </div>
    <div class="g-caption1">
    <span>01.</span>
    <h4>Floride Chemicals Factory</h4>
    </div>
    <div class="g-caption2">
    <span>01.</span>
    <h4>Floride Chemicals Factory</h4>
    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
    <a href="work.html" class="read-btn">Read more</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
    <div class="gallery-box">
    <div class="single-gallery">
    <div class="gallery-img">
    <img src="{{ asset('frontend_asset/img/gallery/xgallery_2.png.pagespeed.ic.Z5WR6buX74.jpg') }}" alt="">
    </div>
    <div class="g-caption1">
    <span>02.</span>
    <h4>Floride Chemicals Factory</h4>
    </div>
    <div class="g-caption2">
    <span>02.</span>
    <h4>Floride Chemicals Factory</h4>
    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
    <a href="work.html" class="read-btn">Read more</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
    <div class="gallery-box">
    <div class="single-gallery">
    <div class="gallery-img">
    <img src="{{ asset('frontend_asset/img/gallery/gallery_3.png') }}" alt="">
    </div>
    <div class="g-caption1">
    <span>03.</span>
    <h4>Floride Chemicals Factory</h4>
    </div>
    <div class="g-caption2">
    <span>03.</span>
    <h4>Floride Chemicals Factory</h4>
    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
    <a href="work.html" class="read-btn">Read more</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
    <div class="gallery-box">
    <div class="single-gallery">
    <div class="gallery-img">
    <img src="{{ asset('frontend_asset/img/gallery/xgallery_2.png.pagespeed.ic.Z5WR6buX74.jpg') }}" alt="">
    </div>
    <div class="g-caption1">
    <span>04.</span>
    <h4>Floride Chemicals Factory</h4>
    </div>
    <div class="g-caption2">
    <span>04.</span>
    <h4>Floride Chemicals Factory</h4>
    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
    <a href="work.html" class="read-btn">Read more</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="team-area section2-padding30">
    <div class="container">
    <div class="row">

    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
    <div class="team-info mb-30 pt-45">
    <h2>Our Team Best Mambers</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ua. Ut enim ad minim veni.</p>
    <a href="contact.html" class="btn">Contact Us</a>
    </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
    <div class="single-team mb-30">
    <div class="team-img">
    <img src="{{ asset('frontend_asset/img/team/h1__team_1.png') }}" alt="">
    </div>
    <div class="team-caption">
    <span><a href="#">Bruce Roberts</a></span>
    <p>Team Officer</p>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
    <div class="single-team mb-30">
    <div class="team-img">
    <img src="{{ asset('frontend_asset/img/team/h1__team_2.png') }}" alt="">
    </div>
    <div class="team-caption">
    <span><a href="#">Bruce Roberts</a></span>
    <p>Team Officer</p>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
    <div class="single-team mb-30">
    <div class="team-img">
    <img src="{{ asset('frontend_asset/img/team/h1__team_3.png') }}" alt="">
    </div>
    <div class="team-caption">
    <span><a href="#">Bruce Roberts</a></span>
    <p>Team Officer</p>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
    <div class="single-team mb-30">
    <div class="team-img">
    <img src="assets/img/team/h1__team_4.png" alt="">
    </div>
    <div class="team-caption">
    <span><a href="#">Bruce Roberts</a></span>
    <p>Team Officer</p>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
    <div class="single-team mb-30">
    <div class="team-img">
    <img src="assets/img/team/h1__team_5.png" alt="">
    </div>
    <div class="team-caption">
    <span><a href="#">Bruce Roberts</a></span>
    <p>Team Officer</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="testimonial-area t-bg testimonial-padding">
    <div class="container ">
    <div class="row d-flex justify-content-center">
    <div class="col-xl-11 col-lg-11 col-md-9">
    <div class="h1-testimonial-active">

    <div class="single-testimonial text-center">

    <div class="testimonial-caption ">
    <div class="testimonial-top-cap">
    <img src="assets/img/icon/testimonial.png" alt="">
    <p>Logisti Group is a representative logistics operator providing full range of ser
    of customs clearance and transportation worl.</p>
    </div>

    <div class="testimonial-founder d-flex align-items-center justify-content-center">
    <div class="founder-img">
    <img src="assets/img/testmonial/Homepage_testi.png" alt="">
    </div>
    <div class="founder-text">
    <span>Jessya Inn</span>
    <p>Co Founder</p>
    </div>
    </div>
    </div>
    </div>

    <div class="single-testimonial text-center">

    <div class="testimonial-caption ">
    <div class="testimonial-top-cap">
    <img src="assets/img/icon/testimonial.png" alt="">
    <p>Logisti Group is a representative logistics operator providing full range of ser
    of customs clearance and transportation worl.</p>
    </div>

    <div class="testimonial-founder d-flex align-items-center justify-content-center">
    <div class="founder-img">
    <img src="assets/img/testmonial/Homepage_testi.png" alt="">
    </div>
    <div class="founder-text">
    <span>Jessya Inn</span>
    <p>Co Founder</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="david-droga-area section-padding30">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="single-david mb-30">
    <div class="david-img">
    <img src="assets/img/david/david_1.png" alt="">
    </div>
    <div class="david-captoin">
    <ul class="david-info">
    <li>November 24, 2020 </li>
    <li> Manufacturing</li>
    </ul>
    <h2><a href="single-blog.html">David Droga Still Has Faith Advertising Dorga</a></h2>
    <a href="single-blog.html" class="d-btn">Read more</a>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="single-david mb-30">
    <div class="david-img">
    <img src="assets/img/david/david_2.png" alt="">
    </div>
    <div class="david-captoin">
    <ul class="david-info">
    <li>November 24, 2020 </li>
    <li> Manufacturing</li>
    </ul>
    <h2><a href="single-blog.html">David Droga Still Has Faith Advertising Dorga</a></h2>
    <a href="single-blog.html" class="d-btn">Read more</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="wantToWork-area w-padding">
    <div class="container">
    <div class="row d-flex align-items-end">
    <div class="col-xl-6 col-lg-8 col-md-8">
    <div class="wantToWork-caption">
    <h2>Want To Work<br> With Us? Hit The Button.</h2>
    </div>
    </div>
    <div class="col-xl-6 col-lg-4 col-md-4">
    <div class="wantToWork-btn f-right">
    <a href="#" class="white-btn">Let’s Work Toghter</a>
    </div>
    </div>
    </div>
    </div>
    </div>

    </main>
@endsection
