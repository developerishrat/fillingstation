@extends('layouts.starlight')
@section('vieworder')
active
@endsection
@section('title')
vieworder
@endsection

@section('content')
@include('layouts.nav')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ '/home' }}">Dashboard</a>
      <a class="breadcrumb-item" href="{{ '/vieworder' }}">Order</a>

    </nav>
    <div class="sl-pagebody">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="alert alert-info">
                              <h2 class="text-center">Welcome, {{ Auth::user()->name }}</h2>
                              <hr>
                              <h2 class="text-center">My Order Information</h2>
                          </div>

                    </div>

                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif


                        <a href="#" class="btn btn-info mb-3" >Generate Invoice</a>
                        <h3></h3>

                          <table class="table table-striped">
                              <tr>
                                  <th>SL</th>
                                  <th>Price</th>
                                  <th>Discount</th>
                                  <th>Sub Total</th>

                                  <th>Created At</th>
                                  <th>Action</th>
                              </tr>





                              @foreach ($order_by_user as $index=>$order_by_users )
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $order_by_users->total }}</td>
                                        <td>{{ $order_by_users->discount }}</td>
                                        <td>{{ $order_by_users->sub_total }}</td>
                                        <td>{{ $order_by_users->created_at->diffForHumans() }}</td>
                                        <td><a href="" class="btn btn-info">View Details</a></td>

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
