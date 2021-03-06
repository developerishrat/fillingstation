@extends('layouts.starlight')
@section('stock')
active
@endsection
@section('title')
Stock
@endsection

@section('content')
@include('layouts.nav')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ '/home' }}">Dashboard</a>
      <a class="breadcrumb-item" href="{{ '/viewadminorder' }}">Order</a>

    </nav>
    <div class="sl-pagebody">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="alert alert-info">

                              <h2 class="text-center">All Stock Information</h2>
                          </div>

                    </div>

                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif

                          @if (session('message'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('message') }}
                              </div>
                          @endif




                          <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Fuel Name</th>
                                <th>Stock</th>

                            </tr>

                            @foreach ($fuels as $index=>$fuel_info )
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $fuel_info->name }}</td>
                                <td>{{ $fuel_info->quantity }}</td>


                            </tr>

                                @endforeach

                        </table>

                      </div>


                          </table>

                      </div>
                  </div>
              </div>
          </div>
      </div>

    </div><!-- sl-pagebody -->




</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->










@endsection












