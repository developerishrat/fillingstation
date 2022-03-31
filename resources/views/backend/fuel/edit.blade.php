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
      <a class="breadcrumb-item" href="{{ url('addfuel') }}">Add Fuel</a>
      <a class="breadcrumb-item" href="{{ url('viewfuel') }}">View Fuel</a>

    </nav>

    <div class="sl-pagebody">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="alert alert-info">
                                <h2 class="text-center">Edit Fuel</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('update'))
                            <div class="alert alert-success">
                                {{session('update')  }}
                            </div>
                            @endif



                        <form action="{{ url('/fuel/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $fuels->id }}" name="fuel_id">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="Name">Name</label>
                                    <input value="{{ $fuels->name }}" type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
                                </div>


                                <div class="form-group col-lg-6">
                                    <label for="quantity">Quantity</label>
                                    <input value="{{ $fuels->quantity }}" type="number" name="quantity" class="form-control" id="exampleInputMobile no" placeholder="quantity">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="Price">Price Per Liter</label>
                                    <input value="{{ $fuels->price }}" type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="Enter price pre liter">
                                </div>
                                <!--<div class="form-group col-lg-6">
                                    <label for="image">Image</label>
                                    <input type="file" name="fuel_photo" class="form-control" id="exampleInputName" placeholder="Fuel Image">
                                </div>-->


                            </div>


                                <button type="submit" class="btn btn-info mr-2">Update</button>

                        </form>

                        </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


@endsection
