@extends('frontend.main')
@section('content')
    <!-- slider-area start -->
    <div class="slider-area">
        <div class="swiper-container">
           <div class="swiper-wrapper">
                <div class="swiper-slide overlay">
                    <div class="single-slider slide-inner slide-inner1">
                        <div class="container">
                            <div class="row">
                                <!--<div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Pure Nature Hohey</h2>
                                            <p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                            <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner7">
                        <div class="container">
                            <div class="row">
                                <!--<div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Pure Nature Coconut Oil</h2>
                                            <p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                            <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner8">
                        <div class="container">
                            <div class="row">
                                <!--<div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Pure Nut Oil</h2>
                                            <p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                            <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider-area end -->



    <!-- product-area start -->
    <div class="product-area">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest Fuel</h2>
                        <img src="assets/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">
                @foreach ($fuels as $fuel_info)

                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('uploads/fuel') }}/{{ $fuel_info->fuel_photo }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#{{ $fuel_info->id }}" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>

                                    <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{ url('/veiwdetails') }}/{{ $fuel_info->id }}">{{ $fuel_info->name }}</a></h3>
                            <p class="pull-left">Per Liter {{ $fuel_info->price }} BDT

                            </p>

                        </div>
                    </div>
                </li>

                <!-- Modal area start -->
                <div class="modal fade" id="{{ $fuel_info->id}}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body d-flex">
                                <div class="product-single-img w-50">
                                    <img src="{{ asset('uploads/fuel') }}/{{ $fuel_info->fuel_photo }}" alt="">
                                </div>
                                <div class="product-single-content w-50">
                                    <h3>{{ $fuel_info->name }}</h3>
                                    <div class="rating-wrap fix">
                                        <span class="pull-left">BDT {{ $fuel_info->price}}</span>

                                    </div>
                                    <p>

                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie scelerisque odio sit amet cursus. Phasellus vitae dolor metus. Pellentesque et blandit mi. Vestibulum lobortis ut risus quis elementum. Suspendisse fermentum dictum mattis.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal area start -->

                @endforeach
                <li class="col-12 text-center">
                    <a class="loadmore-btn" href="javascript:void(0);">Load More</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- product-area end -->



@endsection
