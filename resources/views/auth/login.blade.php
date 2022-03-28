@extends('layouts.master')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img class="center" src="{{ asset('master_dashboard/images/logo.png') }}">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form  action="{{ route('login') }}" method="POST" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter Your Email" name="email">
                    @error('email')
                       <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                       </div>
                    @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Your Password" name="password">
                  @error('password')
                       <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                       </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>

                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                </div>-->
                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ url('register') }}" class="text-info">Register Now</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>




@endsection
