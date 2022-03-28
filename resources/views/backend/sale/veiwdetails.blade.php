@extends('layouts.master')


@section('content')
@include('layouts.nav')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
              <!-- Breadcrumb -->
            <div class="page-header">
                <h3 class="page-title"> Material design icons </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Icons</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Material design icons</li>
                  </ol>
                </nav>
              </div>
                <!--End Breadcrumb -->
            <!-- MY MAIN BODY -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <a class="btn btn-success btn-sm  float-right" href="#">Genarate Report</a>

                                <h3> Invoice For Sale</h3>
                            </div>

                            <div class="card-body">
                                <h3>Billing Details</h3><hr>



                                <h4>Customer Name-{{ $sales->customer_name }} </h4>
                                <h4>Vehecal Type- {{ $sales->vehical_type }} </h4>
                                <h4>Vehecal Nameplate No-{{ $sales->vehical_nameplate_no }} </h4>
                                <br>

                                <table class="table table-striped">
                                    <tr>
                                        <th>#</th>
                                        <th>Fuel Name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>{{ App\Models\Fuel::find($sales->fuel_id)->name }}</td>
                                            <td>{{$sales->price}}</td>
                                            <td>{{$sales->fuel_quantity}}</td>
                                            <td>{{$sales->fuel_quantity*$sales->price}}</td>
                                        </tr>








                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- END MAIN BODY -->
        </div>
        <!-- content-wrapper ends -->

@include('layouts.footer')

@endsection





