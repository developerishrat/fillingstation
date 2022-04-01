@extends('layouts.starlight')
@section('order')
active
@endsection
@section('title')
OrderDetails
@endsection

@section('content')
@include('layouts.nav')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ '/home' }}">Dashboard</a>
      <a class="breadcrumb-item" href="{{ '/viewdetails' }}">Order Details</a>

    </nav>


    <div class="sl-pagebody">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="alert alert-info">

                                <h2 class="text-center">All Order Information</h2>
                            </div>

           <div>
            </div>

            <div class="col-lg-4">
                <a href=""class="btn btn-info mb-4 " href="{{ url('/invoice') }}">Generate invoice</a>
            <br>
            </div>



            <form action="{{url('/statusupdate')}}/{{ $orders->id }}" method="post" >
                @csrf
                <div class="form-group col-lg-4">
                    <label>Status</label>
                    <div class="row">
                        <div class="col-lg-8">
                            <select name="status" class="form-control ">
                                <option value="">Select to Change</option>
                                <option value="Confirmed">Confirm</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Returned">Pending</option>
                                <option value="Cancelled">Cancel</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                        <button type="submit" class="btn btn-info mr-2">Submit</button>
                        </div>
                    </div>
                </div>

            </form>


            <div class="form-group col-lg-8">
                    <h3> Invoice for Order</h3><br>
                    <h4> <div class="panel-heading mb-3 ">Billing Details</div></h4>
                        <div class="panel-body">
                            @foreach(App\Models\Order_billing_details::where('order_id',$orders->id)->get() as $billingdata)

                            <label>Customer Name :  {{ $billingdata->name }}</label>
                            <strong></strong><br>
                            <label>Customer Address :  {{ $billingdata->address }}</label>
                            <strong></strong><br>
                            <label>Customer Mobile : {{ $billingdata->phone }}</label>
                            <strong></strong><br>
                            <label>Customer Email :  {{ $billingdata->email }}</label>
                            <strong></strong><br>

                            @endforeach

                        </div>
            </div>

           </div>



           <center>  <h4 class="card-title">Order Details</h4></center>
          <div>


            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>

                        </tr>
                        @foreach(App\Models\Order_fuel_details::where('order_id',$orders->id)->get() as $data)
                        <tr>
                            <td>#</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->quantity }}</td>
                        </tr>
                        @endforeach

                       </table>
                </div>

            </div>
          </div>



     </div>
     </div>




</div><!-- sl-mainpanel -->




@endsection
