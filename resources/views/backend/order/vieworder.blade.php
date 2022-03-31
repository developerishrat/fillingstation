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
      <a class="breadcrumb-item" href="{{ '/vieworder' }}">Order</a>

    </nav>
    div class="sl-pagebody">
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





                          <table class="table table-striped">
                              <tr>
                                  <th>SL</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Created At</th>
                              </tr>





                              <tr>
                                  <td></td>

                              </tr>



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
