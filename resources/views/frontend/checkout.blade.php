@extends('frontend.main')
@section('content')


    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
     @auth



    <!-- checkout-area start -->


    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-form form-style">

                        <h3>Billing Details</h3>
                          <form action="{{ url('/order/confirm') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <p>Full Name *</p>
                                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <p>Email Address *</p>
                                            <input type="email" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <p>Phone No. *</p>
                                            <input type="text" name="phone">
                                        </div>

                                        <div class="col-12">
                                            <p>Your Address *</p>
                                            <input type="text" name="address">
                                        </div>

                               <!-- <div class="col-12">
                                    <input id="toggle1" type="checkbox">
                                    <label for="toggle1">Pure CSS Accordion</label>
                                    <div class="create-account">
                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <span>Account password</span>
                                        <input type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input id="toggle2" type="checkbox">
                                    <label class="fontsize" for="toggle2">Ship to a different address?</label>
                                    <div class="row" id="open2">
                                        <div class="col-12">
                                            <p>Country</p>
                                            <select id="s_country">
                                                <option value="1">Select a country</option>
                                                <option value="2">bangladesh</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>
                                            </select>
                                        </div>
                                        <div class=" col-12">
                                            <p>First Name</p>
                                            <input id="s_f_name" type="text" />
                                        </div>
                                        <div class=" col-12">
                                            <p>Last Name</p>
                                            <input id="s_l_name" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <p>Company Name</p>
                                            <input id="s_c_name" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <p>Address</p>
                                            <input type="text" placeholder="Street address" />
                                        </div>
                                        <div class="col-12">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                        </div>
                                        <div class="col-12">
                                            <p>Town / City </p>
                                            <input id="s_city" type="text" placeholder="Town / City" />
                                        </div>
                                        <div class="col-12">
                                            <p>State / County </p>
                                            <input id="s_county" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <p>Postcode / Zip </p>
                                            <input id="s_zip" type="text" placeholder="Postcode / Zip" />
                                        </div>
                                        <div class="col-12">
                                            <p>Email Address </p>
                                            <input id="s_email" type="email" />
                                        </div>
                                        <div class="col-12">
                                            <p>Phone </p>
                                            <input id="s_phone" type="text" placeholder="Phone Number" />
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-12">
                                    <p>Order Notes </p>
                                    <textarea name="notes" placeholder="Notes about Your Order, e.g.Special Note for Delivery"></textarea>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-area">
                        <h3>Your Order</h3>
                        <ul class="total-cost">
                            <li>Total<span class="pull-right">{{ session('total_from_cart') }}</span></li>
                            <li>Discount <span class="pull-right">{{ session('discount_from_cart') }}</span></li>
                            <li>Subtotal <span class="pull-right"><strong>{{ session('total_from_cart') - session('discount_from_cart') }}</strong></span></li>


                        </ul>
                        <ul class="payment-method">
                            {{-- <li>
                                <input id="bank" type="checkbox">
                                <label for="bank">Direct Bank Transfer</label>
                            </li> --}}

                            <li>
                                <input value="1" id="delivery" type="radio" name="payment_method">
                                <label for="delivery">Cash on Delivery</label>
                                @if (session('payment'))
                                <div class="alert alert-success">
                                    {{ session('payment') }}
                                </div>

                                @endif
                            </li>
                            <!--<li>
                                <input value="2" id="delivery2" type="radio" name="payment_method">
                                <label for="delivery">SSL ecommerz</label>

                            </li>-->
                        </ul>
                        <button type="submit">Place Order</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->

    @else
   <div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="my-5">
                <h3 class="alert alert-success">Please Login-><a href="{{ url('/login') }}">Login Home</a></h3>
            </div>
        </div>
    </div>
</div>

@endauth


@endsection
