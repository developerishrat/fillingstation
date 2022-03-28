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

                                <h3> All Stock Information</h3>
                            </div>

                            <div class="card-body">



                                <table class="table table-striped">
                                    <tr>
                                        <th>SL</th>
                                        <th>Fuel Name</th>
                                        <th>IN</th>
                                        <th>OUT</th>


                                    </tr>

                                    @foreach ($fuels as $index=>$fuel_info )
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $fuel_info->name }}</td>
                                        <td>{{ $fuel_info->quantity }}</td>

                                        <td>{{ App\Models\Sale::find($fuel_info->fuel_id)->name }}</td>

                                       <td>

                                              <!--  <a href="#"class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="mdi mdi-tooltip-edit"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print font-14"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete"></i></a>-->

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
