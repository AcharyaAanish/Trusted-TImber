<!DOCTYPE html>
<html lang="en">
    {{-- @php
        $home = App\Models\Home::latest()->first();
        $products= App\Models\Product::latest()->limit(6)->get();
        $about = App\Models\Aboutus::latest()->first();
        $services = App\Models\Service::latest()->limit(3)->get();
    @endphp --}}

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trusted Timber</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="front/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="front/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="front/vendor/owl.carousel/front/owl.carousel.min.css" rel="stylesheet">
  <link href="front/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front/css/style.css" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
        @include('frontsite.head')<!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('content')
    <!-- ======= Footer ======= -->
    @include('frontsite.foot')

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="front/vendor/jquery/jquery.min.js"></script>
    <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="front/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="front/vendor/php-email-form/validate.js"></script>
    <script src="front/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="front/vendor/counterup/counterup.min.js"></script>
    <script src="front/vendor/venobox/venobox.min.js"></script>
    <script src="front/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="front/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="front/js/main.js"></script>

  </body>

  </html>
