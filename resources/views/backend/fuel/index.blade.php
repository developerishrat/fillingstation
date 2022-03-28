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
                    <h4 class="card-title">Add New Fuel</h4>

                        <form action="{{ url('/fuel/insert') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
                                </div>

                                <!--<div class="form-group col-lg-4">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputName" placeholder="image">
                                </div>-->
                                <div class="form-group col-lg-4">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputMobile no" placeholder="quantity">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="Price">Price Per Liter</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="Enter price pre liter">
                                </div>

                            </div>
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>

                                </form>


                      </div>
                        @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')  }}
                                </div>

                        @endif
             <!-- END MAIN BODY -->
        </div>
        <!-- content-wrapper ends -->
@endsection
