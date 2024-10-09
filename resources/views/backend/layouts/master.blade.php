<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - HRMS admin template</title>
    <link type="image/x-icon" href="{{ asset('backend') }}/img/favicon.png" rel="shortcut icon">
    <link href="{{ asset('backend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/line-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/plugins/morris/morris.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/plugins/iziToast/css/iziToast.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        @include('backend.layouts.includes.header')
        @include('backend.layouts.includes.sidebar')
        <div class="page-wrapper">
            <div class="content container-fluid">
                @include('backend.layouts.includes.breadcrumb')
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('backend') }}/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('backend') }}/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/morris/morris.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/iziToast/js/iziToast.js"></script>
    <script src="{{ asset('backend') }}/js/chart.js"></script>
    <script src="{{ asset('backend') }}/js/app.js"></script>
    @include('vendor.lara-izitoast.toast')
</body>

</html>
