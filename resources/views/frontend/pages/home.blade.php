<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

@include('frontend.layout.header')
@include('frontend.layout.header-banner')
@include('frontend.layout.doctors')
@include('frontend.layout.news')
@include('frontend.layout.ads-banner')



<div class="page-section pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 py-3 wow fadeInUp">
        <h1>Welcome to Your Health <br> Center</h1>
        <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
        <a href="about.html" class="btn btn-primary">Learn More</a>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
        <div class="img-place custom-img-1">
          <img src="{{asset('assets/img/bg-doctor.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div> <!-- .bg-light -->  







@include('frontend.layout.footer')

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/js/theme.js')}}"></script>
  
</body>
</html>