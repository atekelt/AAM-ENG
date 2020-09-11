<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App name for title -->
       <title>AAM Construction</title>
        
        <!-- favicon -->
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">


        <!-- Assets - styles - scripts... -->

        <!-- bootstrap  css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} ">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }} ">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rsmenu-main.css') }}">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rsmenu-transitions.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon.css') }}">
        <!-- timeline css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/timeline.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-red bg-dark shadow-sm">
            <div class="container">
                <div class="col-lg-3 col-md-12">
                    <div class="logo-area">
                        <a href="http://localhost:8000"><img src="images/logo-white.png" alt="logo"></a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('footer')

    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick.min js -->
    <script src="js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- counter top js -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- rsmenu js -->
    <script src="js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
     <!-- main js -->
    <script src="js/main.js"></script>
</body>
</html>
