@extends('layouts.master')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="{{ asset('master_dashboard/images/logo.png') }}">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form action="{{ route('register') }}" method="POST" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder=" Enter Your Username" name="name">
                  @error('name')
                       <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                       </div>
                    @enderror
                </div>
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
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Your Confirm Password" name="password_confirmation">
                  @error('password_confirmation')
                       <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                       </div>
                    @enderror
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                  </div>
                </div>
                <div class="mt-3">
                   <button class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                   <!--<a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{ url('login') }}">SIGN UP</a>-->
                </div>
                <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ url('login') }}" class="text-info">Login</a>
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
