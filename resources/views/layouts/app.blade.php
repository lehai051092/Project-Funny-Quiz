<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co"/>
    <meta name="keywords"
          content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FreeHTML5.co"/>

    <!--
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE
  DESIGNED & DEVELOPED by FreeHTML5.co

  Website: 		http://freehtml5.co/
  Email: 			info@freehtml5.co
  Twitter: 		http://twitter.com/fh5co
  Facebook: 		https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
  -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('storage/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('storage/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('storage/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('storage/css/flexslider.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Modernizr JS -->
    <script src="{{asset('storage/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->

    <script src="{{asset('storage/js/respond.min.js')}}"></script>



</head>
<body>
<div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

        <h1 id="fh5co-logo"><a href="{{route('index')}}">FUNNY QUIZ</a></h1>

        <nav id="fh5co-main-menu" role="navigation">
            <div class="fh5co-heading text-center">

                @guest
                    <a href="{{ route('login') }}"><i class="fa fa-user"
                                                      aria-hidden="true" style="color: black">Login</i></a><br>
                    @if (Route::has('register'))
                        <a class="nav-link"
                           href="{{ route('register') }}"><i class="fa fa-user-plus" style="color: black" aria-hidden="true">Register</i></a>
                    @endif @else
                    <ul style="list-style: none">
                        <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                         role="button" data-toggle="dropdown"><img
                                    src="https://img.icons8.com/ios-filled/50/000000/user.png"><br>&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <ul style="list-style: none">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;"> @csrf </form>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{route('users.information', Auth::user()->id)}}">Profile</a>
                                    </li>
                                    @can('crud-users')
                                        <li>
                                            <a class="dropdown-item" href="{{route('users.list')}}">List User</a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                        @endguest
                    </ul>
            </div>
            <ul>

                <li><a href="{{route('index')}}"><i class="fa fa-home">Home</i></a>
                <li><a href="{{route('categories.list')}}"><i class="fa fa-align-justify">Category</i></a></li>
                <li><a href="{{route('about')}}"><i class="fa fa-book">About</i></a></li>
                <li><a href="{{route('contact')}}"><i class="fa fa-phone">Contact</i></a></li>

            </ul>
        </nav>

        <div class="fh5co-footer">
            <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved. <span>Designed by <a
                            href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a
                            href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
            </ul>
        </div>

    </aside>

    <div id="fh5co-main">

        <div class="fh5co-narrow-content">
            @yield('content')
        </div>

    </div>
</div>

<!-- jQuery -->
<script src="{{asset('storage/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('storage/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('storage/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('storage/js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('storage/js/jquery.flexslider-min.js')}}"></script>


<!-- MAIN JS -->
<script src="{{asset('storage/js/main.js')}}"></script>

</body>
</html>

