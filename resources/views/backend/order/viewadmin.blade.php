@extends('layouts.starlight')
@section('order')
active
@endsection
@section('title')
Order
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

                              <h2 class="text-center">All Order Information</h2>
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
                          @if (session('deleteorder'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('deleteorder') }}
                              </div>
                          @endif




                          <table class="table table-striped">
                              <tr>
                                  <th>SL</th>
                                  <th>Name</th>
                                  <th>Price</th>
                                  <th>Sub Total</th>
                                  <th>Status</th>
                                  <th>Created At</th>
                                  <th>Action</th>
                              </tr>





                              @foreach ($orders as $index=>$order_info )
                                    <tr>

                                        <td>{{ $orders->firstitem()+$index }}</td>
                                        <td>{{ App\Models\User::find($order_info->user_id)->name }}</td>
                                        <td>{{ $order_info->total }}</td>
                                        <td>{{ $order_info->sub_total }}</td>
                                        <td>{{ $order_info->created_at->diffForHumans() }}</td>
                                        <td>{{ $order_info->status }}</td>
                                        <td><a href="{{ url('/detailsview') }}/{{ $order_info->id }}" class="btn btn-info">View Details</a>
                                        <a href="{{ url('/order/delete') }}/{{ $order_info->id }}" class="btn btn-danger">Delete</a>

                                    </td>




                                    </tr>
                                    @endforeach


                          </table>
                          {{ $orders->links() }}
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
