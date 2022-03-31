@extends('layouts.starlight')
@section('cupon')
active
@endsection
@section('title')
Cupon
@endsection
@section('content')
 @include('layouts.nav')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/home') }}">Dashboard </a>
        <a class="breadcrumb-item" href="{{ url('/cupon') }}">@yield('breadcrumb')</a>
    </nav>

    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>Cupon List</h3>
                        </div>
                        <div class="card-body">
                        <table class="table table-striped">

                            <tr>
                                <td>SL</td>
                                <td>Cupon Name</td>
                                <td>Cupon Percentage By</td>
                                <td>Cupon Validity</td>
                                <td>Created At</td>
                                <td>Action</td>

                           <tr>

                              @foreach ($cupons as $cupon)
                              <tr>
                                  <td>{{ $loop->index+1 }}</td>
                                  <td>{{ $cupon->cupon_name }}</td>
                                  <td>{{ $cupon->cupon_discount }}</td>
                                  <td>{{ $cupon->cupon_validity }}</td>
                                  <td>{{ $cupon->created_at->diffForHumans() }}</td>
                                  <td>Delete</td>
                              </tr>

                              @endforeach
                        </table>




                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">

                        <div class="card-header">
                            <h3>Add Cupon</h3>
                        </div>
                        <div class="card-body">
                            @if (session('cupon'))
                            <div class="alert alert-success">
                                {{ session('cupon') }}
                            </div>

                            @endif
                            <form action="{{ url('/cupon/insert') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Cupon Name</label>
                                    <input type="text" class="form-control" name="cupon_name">

                                    @error('cupon_name')
                                    <div class="alert alert-danger my-3">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Cupon Percentage</label>
                                    <input type="text" class="form-control" name="cupon_discount">
                                        @error('cupon_percentage')
                                        <div class="alert alert-danger my-3">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>


                                <div class="form-group">
                                    <label for="" class="form-label">Cupon Validity</label>
                                    <input type="date" class="form-control" name="cupon_validity">
                                    @error('cupon_validity')
                                        <div class="alert alert-danger my-3">
                                            {{ $message }}
                                        </div>

                                    @enderror
                                </div>
                                <div class="form-group">

                                    <button type="submit" class="btn btn-success">Add Cupon</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


 @endsection
