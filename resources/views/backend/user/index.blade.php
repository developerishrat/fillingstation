@extends('layouts.starlight')

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
                    <h3 class="card-title">Add New User</h3>
                        <form action="{{ url('/users/insert') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="Email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                        <div class="form-group col-lg-4">
                                            <label for="password">Password</label>
                                            <input type="password" pattern="[0-9]{2,10}" name="password" class="form-control" id="exampleInputMobile no" placeholder="Password">
                                        </div>

                                        <div class="form-group col-lg-4">
                                    <label for="Contact">Contact</label>
                                    <input type="text" pattern="[0-9+]{11,14}" name="contact" class="form-control" id="exampleInputContact" placeholder="Contact">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="Address">Address</label>
                                    <input type="address" name="address" class="form-control" id="exampleInputAddress" placeholder="Enter address">
                                </div>

                                <div class="form-group col-lg-4">
                                    <label for="role">Role</label>
                                    <select name="role" class="form-control">
                                  <option value="Admin">Admin</option>
                                  <option value="Supplier">Employee</option>
                                  <option value="Customer">Customer</option>
                                </select>

                                </div>

                            </div>
                                    <button type="submit" class="btn btn-gradient-primary ">Submit</button>

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
