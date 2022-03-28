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
                                <a class="btn btn-success btn-sm  float-right" href="{{ url('/addsale') }}">Add Sale</a>

                                <h3> All Sale Information</h3>
                            </div>

                            <div class="card-body">



                                <table class="table table-striped">
                                    <tr>
                                        <th>SL</th>
                                        <th>Fuel Name</th>
                                        <th>Customer Name</th>
                                        <th>Vehical Nameplate No</th>
                                        <th>Total Price</th>
                                        <th>Creted At</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($sales as $sale_info )
                                    <tr>
                                        <td>{{ $sale_info->id }}</td>
                                        <td>{{ App\Models\Fuel::find($sale_info->fuel_id)->name }}</td>
                                        <td>{{ $sale_info->customer_name }}</td>
                                        <td>{{ $sale_info->vehical_nameplate_no }}</td>
                                        <td>{{ $sale_info->fuel_quantity*$sale_info->price }}</td>
                                        <td>{{ $sale_info->created_at->diffForHumans() }}</td>
                                        <td>

                                                <a href="#"class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="mdi mdi-tooltip-edit"></i></a>
                                                <a href="{{ url('viewdetails') }}/{{ $sale_info->id }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View"><i class=" mdi mdi-eye  font-14"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach


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
