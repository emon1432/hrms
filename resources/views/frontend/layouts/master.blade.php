<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRMS</title>
    <link rel="icon" href="{{ asset('frontend') }}/images/sm-logo.svg" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/summernote.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
</head>

<body class="bg-wight">
    <div class="eg-preloder">
    </div>
    @include('frontend.layouts.includes.header')
    @yield('content')
    @include('frontend.layouts.includes.footer')
    <script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.nice-select.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.js"></script>
    <script src="{{ asset('frontend') }}/js/summernote.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/counterup.js"></script>
    <script src="{{ asset('frontend') }}/js/select2.min.js"></script>
    <script src="{{ asset('frontend') }}/js/viewport.jquery.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.nice-number.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>


</html>
