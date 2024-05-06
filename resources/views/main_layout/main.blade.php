<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Innovations</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/CIFavicon.png')}}">

    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/feather-font/css/iconfont.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/icomoon-font/css/icomoon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/font-awesome/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/wpbingofont/css/wpbingofont.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/elegant-icons/css/elegant.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/slick/css/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/slick/css/slick-theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('libs/mmenu/css/mmenu.min.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap" rel="stylesheet">
</head>

<body class="home home-10 title-10">
<div id="page" class="hfeed page-wrapper">
    <header id="site-header" class="site-header header-v1 color-white">

        @include('partials.mobile_header')

        @include('partials.desktop_header')
    </header>

    @yield('content')

    @include('partials.footer')

</div>

<!-- Back Top button -->
<div class="back-top button-show">
    <i class="arrow_carrot-up"></i>
</div>


<!-- Page Loader -->
<div class="page-preloader">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>

<script src="{{asset('libs/popper/js/popper.min.js')}}"></script>
<script src="{{asset('libs/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/slick/js/slick.min.js')}}"></script>
<script src="{{asset('libs/countdown/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('libs/mmenu/js/jquery.mmenu.all.min.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>