@extends('layouts.starlight')
@section('dashboard')
active
@endsection
@section('title')
Dashboard
@endsection

@section('content')
@include('layouts.nav')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ '/home' }}">Admin</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    @if (Auth::user()->role==2)
    @include('backend.parts.admin_dashboard');

    @else(Auth::user()->role==1)
    @include('backend.parts.customer_dashboard');
    @endif


    <footer class="sl-footer">
      <div class="footer-left">

      </div>

    </footer>
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->










@endsection
