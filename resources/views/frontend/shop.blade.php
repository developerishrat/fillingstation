@extends('frontend.main')
@section('content')

 <!-- .breadcumb-area start -->
 <div class="breadcumb-area bg-img-4 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>Shop Page</h2>
                    <ul>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><span>Shop</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .breadcumb-area end -->
<!-- product-area start -->
<div class="product-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">

            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="all">
                <ul class="row">
                    @foreach ( $fuels as $fuel_info )


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
                                <p class="pull-left">{{ $fuel_info->price }} BDT

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


                                    <ul class="socil-icon">
                                        <li>Share :</li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
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
    </div>
</div>


@endsection
