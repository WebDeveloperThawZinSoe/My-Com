<!DOCTYPE HTML>
<html>

<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('website/css/icomoon.css')}}">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="{{asset('website/css/ionicons.min.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('website/css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap-datepicker.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('website/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">

</head>

<body>

    <div class="colorlib-loader"></div>

    @yield("content")

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{asset('website/js/jquery.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('website/js/popper.min.js')}}"></script>
    <!-- bootstrap 4.1 -->
    <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
    <!-- jQuery easing -->
    <script src="{{asset('website/js/jquery.easing.1.3.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('website/js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('website/js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('website/js/magnific-popup-options.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('website/js/bootstrap-datepicker.js')}}"></script>
    <!-- Stellar Parallax -->
    <script src="{{asset('website/js/jquery.stellar.min.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('website/js/main.js')}}"></script>

</body>
@yield('scriptSource')

</html>
