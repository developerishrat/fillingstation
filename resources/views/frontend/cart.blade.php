@extends('frontend.main')
@section('content')

<!-- .breadcumb-area start -->
<div class="breadcumb-area bg-img-4 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>Cart Page</h2>
                    <ul>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><span> Cart Page</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .breadcumb-area end -->

<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="my-5">
            @if (session('order'))
        <div class="alert alert-success">
            <h3>{{ session('order') }}</h3>
        </div>
         @endif

        </div>
    </div>
</div>

<!-- cart-area start -->
<div class="cart-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ url('/cart/update') }}" method="POST">
                    @csrf
                    <table class="table-responsive cart-wrap">
                        <thead>
                            <tr>
                                <th class="images">Image</th>
                                <th class="product">Product</th>
                                <th class="ptice">Price</th>
                                <th class="quantity">Quantity</th>
                                <th class="total">Total</th>
                                <th class="remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                    $total=0;
                                    $checkout_btn_show=true;
                                @endphp
                                @foreach($cart_fuel as $cart_fuels)
                                <tr>
                                    <td class="images"><img width="50" src="{{ asset('uploads/fuel') }}/{{ App\Models\Fuel::find($cart_fuels->fuel_id)->fuel_photo }}"  alt=""></td>
                                    <td class="product"><a href="single-product.html">{{ App\Models\Fuel::find($cart_fuels->fuel_id)->name }}</a>

                                    @if ($cart_fuels->quantity > App\Models\FUel::find($cart_fuels->fuel_id)->quantity)
                                    <span class="badge badge-warning">Stock Out</span>
                                    @php
                                    $checkout_btn_show=false;
                                    @endphp
                                    @endif
                                    <span class="badge badge-success">In Stock {{ App\Models\Fuel::find($cart_fuels->fuel_id)->quantity }}</span>

                                    </td>
                                    <td class="ptice">{{  App\Models\Fuel::find($cart_fuels->fuel_id)->price  }} BDT</td>
                                    <td class="quantity cart-plus-minus">

                                        <input type="text" name="quantity[{{ $cart_fuels->id }}]" value="{{ $cart_fuels->quantity }}" />
                                    </td>
                                    <td class="total">{{  App\Models\Fuel::find($cart_fuels->fuel_id)->price*$cart_fuels->quantity  }} BDT</td>
                                    <td class="remove"><a href="{{ url('delete/cart') }}/{{ $cart_fuels->id }}"><i class="fa fa-times"></i></a></td>
                                </tr>
                                @php
                                $total=$total+(App\Models\Fuel::find($cart_fuels->fuel_id)->price*$cart_fuels->quantity);
                                @endphp
                                @endforeach
                        </tbody>
                    </table>
                    <div class="row mt-60">
                        <div class="col-xl-4 col-lg-5 col-md-6 ">
                            <div class="cartcupon-wrap">
                                <ul class="d-flex">
                                    <li>
                                        <button type="submit">Update Cart</button>
                                    </li>
                                </form>
                                    <li><a href="{{ url('shop') }}">Continue Shopping</a></li>
                                </ul>
                                <h3>Cupon</h3>
                                <p>Enter Your Cupon Code if You Have One</p>
                                <div class="cupon-wrap">
                                    <input type="text" id="cupon_name" value="{{ $cupon_name }}" placeholder="Cupon Code">
                                    <button type="button" id="cupon_btn">Apply Cupon</button>

                                    @if (session('cupon_expired'))
                                    <div class="alert alert-success">
                                        {{ session('cupon_expired') }}
                                    </div>
                                    @endif
                                    @if (session('cupon_invalid'))
                                    <div class="alert alert-success">
                                        {{ session('cupon_invalid') }}
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                            <div class="cart-total text-right">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li><span class="pull-left">Total </span>{{ $total }}</li>
                                    <li><span class="pull-left">Discount {{ $discount }}%</span>{{ (($total/100)*$discount) }}</li>
                                    <li><span class="pull-left">SubTotal </span> {{ $total-(($total/100)*$discount) }}</li>
                                </ul>
                                @php
                                    session([
                                        'total_from_cart'=>$total,

                                        'discount_from_cart'=>(($total/100)*$discount),
                                    ]);
                                @endphp
                                @if($checkout_btn_show)
                                    <a href="{{ url('/checkout') }}">Proceed to Checkout</a>
                                    @else
                                    <div class="alert alert-info">
                                        Your Product is Out of Stock
                                    </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart-area end -->
@endsection
@section('footer_script')
    <script>
        $('#cupon_btn').click(function(){
            var cupon_name = $('#cupon_name').val();
            var current_link="{{ url('/cart') }}";
            var link_to_go=current_link+'/'+cupon_name;
            window.location.href=link_to_go;

        });



    </script>
    @endsection


