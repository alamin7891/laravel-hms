<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend_assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend_assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('backend_assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('backend_assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('backend.layouts.patient-navbar')
    
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        @include('backend.layouts.topnav')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            @include('backend.layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('backend_assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('backend_assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('backend_assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('backend_assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('backend_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend_assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend_assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('backend_assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backend_assets/js/misc.js')}}"></script>
    <script src="{{asset('backend_assets/js/settings.js')}}"></script>
    <script src="{{asset('backend_assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('backend_assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>