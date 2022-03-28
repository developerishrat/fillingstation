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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add New Sale</h4>

                        <form action="{{ url('/sale/insert') }}" method="post" >
                            @csrf
                            <div class="row">

                                <div class="form-group col-lg-4">
                                    <label>Fuel Name

                                    </label>
                                    <select name="fuel_id" class="form-control">
                                        <option value="#">Select to Fuel</option>
                                        @foreach($fuels as $fuel)
                                        <option value="{{$fuel->id}}">{{$fuel->name}}

                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputMobile no" placeholder="quantity">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="Price">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="Enter price pre liter">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="Name">Customer Name</label>
                                    <input type="text" name="customer_name" class="form-control" id="exampleInputName" placeholder="Customer Name">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="Name">Vehical Type</label>
                                    <input type="text" name="vehical_name" class="form-control" id="exampleInputName" placeholder="Vehical Type">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="Name">Vehical NamePlate No</label>
                                    <input type="number" name="vehical_nameplate_no" class="form-control" id="exampleInputName" placeholder="Vehical NamePlate No">
                                </div>

                                <!--<div class="form-group col-lg-4">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputName" placeholder="image">
                                </div>-->


                            </div>
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>

                                </form>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')  }}
                                </div>
                                @endif
                      </div>
             <!-- END MAIN BODY -->
        </div>
        <!-- content-wrapper ends -->
@endsection
