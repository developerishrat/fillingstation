<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel- Filling Station Management System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('master_dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master_dashboard/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('master_dashboard/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('master_dashboard/images/favicon.ico') }}" />
  </head>
  <body>
    @yield('content')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('master_dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('master_dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('master_dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('master_dashboard/assets/js/misc.js') }}"></script>
    <!-- endinject -->
  </body>
</html>
