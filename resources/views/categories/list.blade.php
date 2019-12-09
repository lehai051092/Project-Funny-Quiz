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

    <!-- Modernizr JS -->
    <script src="{{asset('storage/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->

    <script src="{{asset('storage/js/respond.min.js')}}"></script>


</head>
<body>
<div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

        <h1 id="fh5co-logo"><a href="">FUNNY QUIZ</a></h1>

        <nav id="fh5co-main-menu" role="navigation">
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="fh5co-active"><a href="{{route('categories.list')}}">Category</a></li>

            @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> @endif @else
                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                     role="button" data-toggle="dropdown" aria-haspopup="true"
                                                     aria-expanded="false" v-pre> {{ Auth::user()->name }} <span
                                class="caret"></span> </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                </li>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;"> @csrf </form>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Information</a>
                                </li>
                            </ul>
                        </div>

                    </li> @endguest
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>

            </ul>
        </nav>

        <div class="fh5co-footer">
            <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a
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
        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url({{asset('storage/image/anhnen1.jpg')}});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Intuitive <strong></strong> is How Give We the User New Superpowers</h1>
                                        <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                        </h2>
                                        <p><a class="btn btn-primary btn-demo popup-vimeo"
                                              href="https://vimeo.com/channels/staffpicks/93951774"> <i
                                                    class="icon-monitor"></i> Live Preview</a> <a
                                                class="btn btn-primary btn-learn">Learn More<i
                                                    class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{asset('storage/image/anhnen2.jpg')}});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>We are Happy to Create Newest Modern Websites</h1>
                                        <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                        </h2>
                                        <p><a class="btn btn-primary btn-demo popup-vimeo"
                                              href="https://vimeo.com/channels/staffpicks/93951774"> <i
                                                    class="icon-monitor"></i> Live Preview</a> <a
                                                class="btn btn-primary btn-learn">Learn More<i
                                                    class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{asset('storage/image/anhnen3.jpg')}});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Download our Free HTML5 Bootstrap Template</h1>
                                        <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                        </h2>
                                        <p><a class="btn btn-primary btn-demo popup-vimeo"
                                              href="https://vimeo.com/channels/staffpicks/93951774"> <i
                                                    class="icon-monitor"></i> Live Preview</a> <a
                                                class="btn btn-primary btn-learn">Learn More<i
                                                    class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div class=" text-center">
            <a href="{{route('categories.create')}}">Create</a>
        </div>
        <div class="fh5co-narrow-content">
            @foreach($categories as $key=>$category)
                <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#" class="blog-img"><img src="{{asset('storage/'.$category->image)}}" class="img-responsive"
                                                          alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                        <div class="desc">
                            <h3><a href="{{route('questions.list',$category->id)}}">{{$category->name}}</a></h3>
                            <span><small>by Admin team ??? </small> / <small> Web Design </small> / <small> <i
                                        class="icon-comment"></i> 14</small></span>
                            <p>{{$category->title}}</p>
                            <a href="{{route('categories.destroy',$category->id)}}" style="color: red" onclick="return confirm('Are you sure???')">Delete <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
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


