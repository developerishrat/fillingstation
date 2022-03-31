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
  <!-- single-product-area start-->
  <div class="single-product-area ptb-100">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="product-single-img">
                      <div class="product-active owl-carousel">
                          <div class="item">
                              <img height="30" src="{{ asset('uploads/fuel') }}/{{ $fuels->fuel_photo }}" alt="">
                          </div>

                      </div>
                      <div class="product-thumbnil-active  owl-carousel">
                          <div class="item">
                              <img src="assets/images/product/product-details/1.jpg" alt="">
                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="product-single-content">
                      <h3>{{ $fuels->name }}</h3>
                      <div class="rating-wrap fix">
                          <span class="pull-left">BDT {{ $fuels->price }}</span>

                      </div>
                      <p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie scelerisque odio sit amet cursus. Phasellus vitae dolor metus. Pellentesque et blandit mi. Vestibulum lobortis ut risus quis elementum. Suspendisse fermentum dictum mattis.</p>
                      @if ($fuels->quantity)
                        <form action="{{ url('addto/cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="fuel_id" value="{{ $fuels->id }}">
                            <ul class="input-style">
                                <li class="quantity cart-plus-minus">

                                    <input name="quantity" type="text" value="1" />
                                </li>
                                <li class="ml-2"><button type="submit" class="btn btn-danger">Add to Cart</button></li>
                            </ul>

                        </form>
                      @else
                        <div class="alert alert-success">
                            Fuel is Out of Stock
                        </div>




                      @endif

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
          <div class="row mt-60">

          </div>
      </div>
  </div>
  <!-- single-product-area end-->
  <!-- featured-product-area start -->
  <!--<div class="featured-product-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-title text-left">
                      <h2>Related Product</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-sm-6 col-12">
                  <div class="featured-product-wrap">
                      <div class="featured-product-img">
                          <img src="assets/images/product/1.jpg" alt="">
                      </div>
                      <div class="featured-product-content">
                          <div class="row">
                              <div class="col-7">
                                  <h3><a href="shop.html">Nature Honey</a></h3>
                                  <p>$219.56</p>
                              </div>
                              <div class="col-5 text-right">
                                  <ul>
                                      <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="cart.html"><i class="fa fa-heart"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                  <div class="featured-product-wrap">
                      <div class="featured-product-img">
                          <img src="assets/images/product/2.jpg" alt="">
                      </div>
                      <div class="featured-product-content">
                          <div class="row">
                              <div class="col-7">
                                  <h3><a href="shop.html">Olive Oil</a></h3>
                                  <p>$354.75</p>
                              </div>
                              <div class="col-5 text-right">
                                  <ul>
                                      <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="cart.html"><i class="fa fa-heart"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                  <div class="featured-product-wrap">
                      <div class="featured-product-img">
                          <img src="assets/images/product/3.jpg" alt="">
                      </div>
                      <div class="featured-product-content">
                          <div class="row">
                              <div class="col-7">
                                  <h3><a href="shop.html">Sunrise Oil</a></h3>
                                  <p>$214.80</p>
                              </div>
                              <div class="col-5 text-right">
                                  <ul>
                                      <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="cart.html"><i class="fa fa-heart"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                  <div class="featured-product-wrap">
                      <div class="featured-product-img">
                          <img src="assets/images/product/4.jpg" alt="">
                      </div>
                      <div class="featured-product-content">
                          <div class="row">
                              <div class="col-7">
                                  <h3><a href="shop.html">Coconut Oil</a></h3>
                                  <p>$241.00</p>
                              </div>
                              <div class="col-5 text-right">
                                  <ul>
                                      <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="cart.html"><i class="fa fa-heart"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>-->
  <!-- featured-product-area end -->

@endsection
