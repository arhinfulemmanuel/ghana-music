<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Ghana Music | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="blog/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('blog/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <span>Wait, please...</span>
        </div>
    </div>


    <!-- Top Search Area Start -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="{{route('search')}}" method="post">
                            @csrf
                            <input type="search" name="search" class="form-control" placeholder="Type keywords and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                        <!-- Search Button -->
                        <div class="search-btn"><i class="icon_search"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Search Area End -->

    <!-- Social Share Area Start -->
    <div class="razo-social-share-area">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>
    <!-- Social Share Area End -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="{{asset('blog/img/core-img/gh.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="/">Home</a></li>

                                    <li><a href="/charts">Charts</a></li>

                                    <li><a href="#">Categories</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('categories', ['cat_name'=>'Hiplife'])}}">- HIPLIFE</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Gospel'])}}">- GOSPEL</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Highlife'])}}">- HIGH LIFE</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Dancehall'])}}">- DANCEHALL</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Hiphop'])}}">- HIPHOP</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('categories', ['cat_name'=>'Shatta Wale'])}}">- SHATTA WALE</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Sarkodie'])}}">- SARKODIE</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Stone Bwoy'])}}">- STONE BWOY</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('categories', ['cat_name'=>'Ghana'])}}">- GHANA</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Nigeria'])}}">- NIGERIA</a></li>
                                                <li><a href="{{route('categories', ['cat_name'=>'Jamaica'])}}">- JAMAICA</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="">- Ads</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="/services">Services</a></li>
                                </ul>

                                <!-- Share Icon -->
                                <div class="social-share-icon">
                                    <i class="social_share"></i>
                                </div>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>




    @yield('content')










    <!-- Footer Area Start -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-80-0">
            <div class="container">
                <div class="row justify-content-between">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        
                        <div class="single-footer-widget mb-80">
                            <h4 class="widget-title">Twitter Feed</h4>
                            <!-- Footer Logo -->
                            <a href="/" class="footer-logo"><img src="{{asset('blog/img/core-img/logo2.png')}}" alt=""></a>

                            <p class="mb-30">
                                <b>FiiComp Inc</b>, we are a company that offer IT solutions such as, website development and design, native desktop
                                applications development ( all operating systems ), native Android an ios apps at and affordable price.
                            </p>

                            <!-- Footer Content -->
                            <div class="footer-content">

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>FiiComp Inc, Rex - Cocoa House. Sunyani, Ghana</p>
                                    </div>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_phone"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="" class="post-title">+233 542 745 966</a></p>
                                    </div>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>kofibusy@gmail.com</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">

                            <!-- Widget Title -->
                            <h4 class="widget-title">Twitter Feed</h4>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="tweet">
                                    <p><a href="#">Kerem Suer</a> @kerem American conducts it first ever done strike Qaeda</p>
                                </div>
                            </div>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="tweet">
                                    <p><a href="#">Axel Hervelle</a> @axel_hervelle Tens of thousands attend rallies held in D.C.</p>
                                </div>
                            </div>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="tweet">
                                    <p><a href="#">Chris Pratt</a> @chris_pratt Hundreds of protesters shut down meeting.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Instagram</h4>

                            <!-- Instagram Area -->
                            <div class="razo-instagram-area d-flex flex-wrap">
                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/2.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/3.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/4.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/5.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/6.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/7.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/8.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/9.jpg')}}" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="{{asset('blog/img/bg-img/10.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Footer Area End -->
        
        <!-- Copywrite Text -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Manage by FiiComp Inc <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
















        <!-- All JS Files -->

    <!-- jQuery -->
    <script src="{{asset('blog/js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{asset('blog/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('blog/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('blog/js/razo.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('blog/js/default-assets/active.js')}}"></script>

</body>
</html>