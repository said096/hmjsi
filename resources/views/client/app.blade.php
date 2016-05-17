<!DOCTYPE html>
<!--[if lte IE 9]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>HMJSI STMIK AKAKOM YOGYAKARTA</title>
    <meta name="description" content="">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pixeden-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dl-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/lib/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>
<body>
    <div class="xv-overFlow">
        @include('client.partials.menu')
        @include('client.partials.search')
        @include('client.partials.slide')
        @yield('page')
        @include('client.partials.footer')
    </div>
    <script src="{{ asset('js/lib/jquery.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('js/lib/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.inview.js') }}"></script>
    <script src="{{ asset('js/app/main.js') }}"></script>
</body>
</html>