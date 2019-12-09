
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

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
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

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
                <li><a href="{{route('index')}}">Home</a>
                <li><a href="{{route('categories.list')}}">Category</a></li>
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
                                    <a class="dropdown-item" href="{{route('users.information', Auth::user()->id)}}">Profile</a>
                                </li>
                                @can('crud-users')
                                    <li>
                                        <a class="dropdown-item" href="{{route('users.list')}}">List User</a>
                                    </li>
                                @endcan
                            </ul>
                        </div>

                    </li> @endguest
                <li class="fh5co-active"><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>

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
        <div class="fh5co-narrow-content">
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <img class="img-responsive" src="{{asset('storage/image/codegym1.jpg')}}" alt="CodeGym ảnh bìa">
                    <br>
                    <img class="img-responsive" src="{{asset('storage/image/codegym2.jpg')}}" alt="CodeGym ảnh bìa">
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h5 class="fh5co-heading text-center">About Company</h5>
                    <h1 class="fh5co-heading">CodeGym-Hệ thống đào tạo lập trình hiện đại.</h1>
                    <p>CodeGym thành lập với sứ mệnh phát triển các giải pháp học tập hiện đại và hiệu quả. Học viên được học tập thông qua mô hình đào tạo tiên tiến trên nền tảng công nghệ giáo dục và sự cộng tác sâu rộng giữa các bên liên quan, đặc biệt là các doanh nghiệp. CodeGym đào tạo theo mô hình Coding Bootcamp, huấn luyện thực chiến trong thời gian ngắn (4-7 tháng), cường độ cao với mục tiêu học viên tốt nghiệp có thể đảm nhận ngay vị trí lập trình viên full-stack tại các doanh nghiệp. </p>
                    <p>Trong thời đại công nghệ thông tin phát triển mạnh mẽ như hiện nay, để thực sự thành công thì các lập trình viên cần có trong mình những yếu tố: can đảm, sáng tạo, tư duy logic, đam mê và kiên nhẫn. </p>
                    <h3>CodeGym dạy gì? Ai có thể học ở CodeGym?</h3>
                    <p>CodeGym phát triển các giải pháp học tập hiện đại và hiệu quả thông qua các mô hình đạo tạo tiên tiến trên nền tảng công nghệ giáo dục và sự cộng tác sâu rộng giữa các bên liên quan, đặc biệt là doanh nghiệp. Qua đó, CodeGym giúp người học phát triển tay nghề vững vàng, sẵn sàng làm việc, và có khả năng tự học suốt đời hiệu quả, thích ứng với cuộc Cách mạng Công nghiệp 4.0 </p>
                    <p>CodeGym là đơn vị đào tạo lập trình duy nhất hiện có đội ngũ nghiên cứu, thiết kế và phát triển chương trình riêng (thay vì mua chương trình từ nước ngoài hay sử dụng nguồn tài liệu online). Các khoá học ở CodeGym được thiết kế cho từng đối tượng người học khác nhau, từ học cho biết đến học làm nghề chuyên nghiệp. Bên cạnh đó, họ cũng cần phải có một định hướng nghề nghiệp cho bản thân. Một điểm nổi bật mà mô hình Coding Bootcamp cung cấp là xây dựng định hướng nghề nghiệp, giúp các học viên thấy rõ được mình cần phải học những gì, học như thế nào, cần làm gì để trở thành lập trình viên chuyên nghiệp trong tương lai. </p>
                    <p>CodeGym có các khoá đào tạo lập trình dành cho những ai muốn theo đuổi nghề lập trình hiện đại chuyên nghiệp, kể cả bạn không biết gì hoặc đã biết lập trình. </p>
                    <p>Ngoài ra, CodeGym còn nhận thiết kế các chương trình đào tạo lập trình ngắn hạn cho các đối tượng có nhu cầu công việc khác nhau, theo yêu cầu riêng của từng doanh nghiệp cụ thể.</p>
                    <p>Đặc biệt, với mong muốn làm sao để "toàn dân biết code", CodeGym liên tục tổ chức các sự kiện dạy code miễn phí cho cộng đồng như "Girl-Like-Coding Day" cho các bạn nữ, "Pro-Coding Day", "Hour of Code"...</p>
                    <p>Thế nên, bất cứ ai thích và muốn học code, ở bất cứ trình độ nào đều có thể đến với CodeGym. Hãy liên hệ ngay với CodeGym để về ngôi nhà chung của các Coder nhé!</p>
                </div>
            </div>
        </div>

        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Our Services</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Strategy</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-search4"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Explore</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-paperplane"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Direction</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="fh5co-icon">
                            <i class="icon-params"></i>
                        </div>
                        <div class="fh5co-text">
                            <h3>Expertise</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-narrow-content">
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <h1 class="fh5co-heading-colored">Get in touch</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>

            </div>
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

