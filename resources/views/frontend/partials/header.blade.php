<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{setting('site.title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="icon" href="" type="image/x-icon" />

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{ URL::asset('css/flexslider.css')}}">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css')}}">

        <!-- Flaticons  -->
        <link rel="stylesheet" href="{{ URL::asset('fonts/flaticon/font/flaticon.css')}}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">

        <!-- TIMELINE  -->
        <link rel="stylesheet" href="{{ URL::asset('css/aErrQJ.css')}}">

        <!-- Modernizr JS -->
        <script src="{{ URL::asset('js/modernizr-2.6.2.min.js')}}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="{{ URL::asset('js/respond.min.js')}}"></script>
        <![endif]-->

    </head>
    <body>




    <div id="page">
        <nav class="colorlib-nav" role="navigation">

            <div class="top-menu">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 text-right menu-1">
                  
                            <ul>
                          
                                {!! menu('main','bootstrap') !!}
                                @if(Auth::check())
                                    <li class="has-dropdown">
                                    <a href="#"><img style="height: 40px;" src="images/member.png"></a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('logout')}}">登出</a></li>
                            @else
                                <li class="btn-cta"><a href="/admin/login"><span class="bg_yellow">登入</span></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


