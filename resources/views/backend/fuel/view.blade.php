@extends('layouts.starlight')
@section('fuel')
active
@endsection
@section('title')
Fuel
@endsection

@section('content')
@include('layouts.nav')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('/home') }}">Dashboard</a>
      <a class="breadcrumb-item" href="index.html">Pages</a>
      <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <div class="card">
                        <div class="card-header">
                            <div class="alert alert-info">
                                <h2 class="text-center">All Fuel Information</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('del_success'))
                                <div class="alert alert-success">
                                    {{session('del_success')  }}
                                </div>
                                @endif
                                <table class="table table-striped">
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price Per Liter</th>

                                        <th>Creted At</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($fuels as $index=>$fuel_info )
                                    <tr>
                                        <td>{{ $fuels->firstitem()+$index }}</td>
                                        <td>{{ $fuel_info->name }}</td>
                                        <td>{{ $fuel_info->quantity }}</td>
                                        <td>{{ $fuel_info->price }}</td>
                                        <td>{{ $fuel_info->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="" class="btn btn-info">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                                {{ $fuels->links() }}

                        </div>
                   </div>
                </div>

            </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->







@endsection
