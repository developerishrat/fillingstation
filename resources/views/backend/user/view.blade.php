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
                                <a class="btn btn-success btn-sm  float-right" href="{{ url('/adduser') }}">Add User</a>
                                <a class="btn btn-primary btn-sm  float-right" href="">All Print</a>
                                <h3> All User Information</h3>
                            </div>

                            <div class="card-body">

                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <table class="table table-striped">
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th>Creted At</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($users as $index=>$user_info )
                                    <tr>
                                        <td>{{ $users->firstitem()+$index }}</td>
                                        <td>{{ $user_info->name }}</td>
                                        <td>{{ $user_info->email }}</td>
                                        <td>{{ $user_info->contact }}</td>
                                        <td>{{ $user_info->address }}</td>
                                        <td>{{ $user_info->role }}</td>
                                        <td>{{ $user_info->created_at->diffForHumans() }}</td>
                                        <td>

                                                <a href="#"class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="mdi mdi-tooltip-edit"></i></a>
                                                    <!--  <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print font-14"></i></a> -->
                                                     <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                                {{ $users->links() }}
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
