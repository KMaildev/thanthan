<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="MdAasifShah">

    <!-- Title -->
    <title>Than Than Services Agency @yield('title')</title>
    <meta content="" name="Than Than Services Agency">
    <meta name="keywords" content="Than Than Services Agency" />
    <meta property="og:title" content="Than Than Services Agency" />
    <meta property="og:image" content="{{ asset('data/thanthan.png') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Than Than Services Agency" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('data/thanthan.png') }}">

    <!-- Included CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/color/default.css') }}">
    <!-- Editor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/editor-style.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Widget CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/widgets.css') }}">
    <!-- Reponsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


</head>

<body class="">

    <div class="page-wrapper">
        @include('layouts.menu')

        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        @yield('content')

        @include('layouts.footer')
    </div>
    <button type="button" class="scrollup"><i class="fa fa-arrow-up"></i></button>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/mo.min.js') }}"></script>
    <script src="{{ asset('assets/js/cssplugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ripples.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
@yield('script')

</html>
