<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {!! SEO::generate() !!}
   <!-- Stylesheets -->
   <link rel="preconnect" href="https://fonts.gstatic.com/">
   <link
       href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
       rel="stylesheet">
   <link href="{{ asset('website' )}}/css/bootstrap.min.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/fontawesome-all.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/owl.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/flaticon.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/animate.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/jquery-ui.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/jquery.fancybox.min.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/hover.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('website' )}}/css/jarallax.css">
   <link href="{{ asset('website' )}}/css/custom-animate.css" rel="stylesheet">
   <link href="{{ asset('website' )}}/css/style.css" rel="stylesheet">
   <!-- rtl css -->
   <link href="{{ asset('website' )}}/css/rtl.css" rel="stylesheet">
   <!-- Responsive File -->
   <link href="{{ asset('website' )}}/css/responsive.css" rel="stylesheet">

   <!-- Color css -->
   <link rel="stylesheet" id="jssDefault" href="{{ asset('website' )}}/css/colors/color-default.css">

   <link rel="shortcut icon" href="{{ asset('admin')}}/images/favicon.ico" id="fav-shortcut" type="image/x-icon">
   <link rel="icon" href="{{ asset('admin')}}/images/favicon.ico" id="fav-icon" type="image/x-icon">

   <!-- Responsive Settings -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">




    <style>

        .bdt-timeline-container {
            display: flow-root;
            box-sizing: content-box;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
            overflow: hidden;
            margin-top: 50px;
        }
            .upk-salf-slider-wrapper {
                display: flex;
                flex-direction: row;
                background: #fff;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
                height: 400px;
                padding: 30px;
                position: relative;
            }
            .upk-salf-slider-wrapper .upk-salf-item {
                position: relative;
                display: flex;
                flex-direction: row-reverse;
            }
            .upk-salf-slider-wrapper .upk-salf-item.swiper-slide-active .upk-salf-title, .upk-salf-slider-wrapper .upk-salf-item.swiper-slide-active .upk-salf-desc, .upk-salf-slider-wrapper .upk-salf-item.swiper-slide-active .upk-salf-button {
                opacity: 1;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-image-wrap {
                height: 100%;
                width: 100%;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-xanc-img {
                display: block;
                width: 100%;
                height: auto;
                object-fit: contain;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-content-wrap {
                position: absolute;
                left: 0;
                bottom: 0;
                top: unset;
                max-width: 460px;
                overflow: hidden;
                background: #fff 8a;
                backdrop-filter: blur(15px);
                transition: backdrop-filter 0.9s;
                padding: 20px;
                padding-left: 20px;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-title {
                font-size: 23px;
                font-weight: 700;
                line-height: 1.2;
                color: #2b2d42;
                text-transform: capitalize;
                margin-bottom: 20px;
                opacity: 0;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-desc {
                color: #656565;
                font-size: 14px;
                line-height: 1.6;
                text-transform: capitalize;
                margin-bottom: 20px;
                opacity: 0;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button {
                opacity: 0;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link {
                color: #2b2d42;
                cursor: pointer;
                font-weight: 500;
                text-decoration: none;
                text-transform: capitalize;
                font-size: 14px;
                transition: all 0.3s ease;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link:hover {
                color: #ff215a;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed {
                display: inline-block;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed .arrow-icon {
                position: relative;
                top: 0;
                -webkit-transition: -webkit-transform 0.3s ease;
                transition: -webkit-transform 0.3s ease;
                transition: transform 0.3s ease;
                transition: transform 0.3s ease, -webkit-transform 0.3s ease;
                vertical-align: middle;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed .arrow-icon--circle {
                transition: stroke-dashoffset 0.3s ease;
                stroke-dasharray: 95;
                stroke-dashoffset: 95;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed g {
                stroke: currentColor;
                color: #2b2d42;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed:hover .arrow-icon {
                transform: translate3d(5px, 0, 0);
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed:hover .arrow-icon--circle {
                stroke-dashoffset: 0;
            }
            .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link--arrowed:hover g {
                color: #ff215a;
            }
            .upk-salf-slider-wrapper .upk-page-scroll {
                position: absolute;
                bottom: 8%;
                right: 5%;
                transform: rotate(90deg);
                z-index: 1;
                display: none;
            }
            .upk-salf-slider-wrapper .upk-page-scroll .arrow-up {
                height: 70px;
                width: 70px;
                display: block;
                background: #fff c9;
                backdrop-filter: blur(18px);
                position: relative;
                cursor: pointer;
                transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
                transform: rotate(-90deg);
                overflow: hidden;
            }
            .upk-salf-slider-wrapper .upk-page-scroll .arrow-slide {
                left: 0;
                top: -100%;
                width: 100%;
                height: 100%;
                background: #ff215a;
                position: absolute;
                display: block;
                z-index: 0;
            }
            .upk-salf-slider-wrapper .upk-page-scroll .long-arrow-left {
                display: block;
                margin: 30px auto;
                width: 16px;
                height: 16px;
                border-top: 2px solid #2b2d42;
                border-left: 2px solid #2b2d42;
            }
            .upk-salf-slider-wrapper .upk-page-scroll .long-arrow-left {
                transform: rotate(-135deg);
            }
            .upk-salf-slider-wrapper .upk-page-scroll .long-arrow-left::after {
                content: "";
                display: block;
                width: 2px;
                height: 25px;
                background-color: #2b2d42;
                transform: rotate(-45deg) translate(8px, 3px);
                left: 0;
                top: 0;
            }
            .upk-salf-slider-wrapper .upk-page-scroll .arrow-up:hover {
                transition: all 0.1s;
            }
            .upk-salf-slider-wrapper .upk-page-scroll .arrow-up:hover .left-arm:after {
                transform: rotate(-10deg);
            }
            .upk-salf-slider-wrapper .upk-page-scroll .arrow-up:hover .right-arm:after {
                transform: rotate(10deg);
            }
            .upk-salf-slider-wrapper .upk-page-scroll .arrow-up:hover .arrow-slide {
                transition: all 0.5s ease-in-out;
                transform: translateY(200%);
            }
            .upk-salf-slider-wrapper .upk-salf-nav-pag-wrap {
                position: absolute;
                top: 0;
                height: 100%;
                right: 0;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation {
                margin-top: 40px;
                margin-right: 2px;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed {
                display: inline-block;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed .arrow-icon {
                position: relative;
                top: 0;
                -webkit-transition: -webkit-transform 0.3s ease;
                transition: -webkit-transform 0.3s ease;
                transition: transform 0.3s ease;
                transition: transform 0.3s ease, -webkit-transform 0.3s ease;
                vertical-align: middle;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed .arrow-icon--circle {
                transition: stroke-dashoffset 0.3s ease;
                stroke-dasharray: 95;
                stroke-dashoffset: 95;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed g {
                stroke: currentColor;
                color: #2b2d42;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed:hover .arrow-icon {
                transform: translate3d(5px, 0, 0);
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed:hover .arrow-icon--circle {
                stroke-dashoffset: 0;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .link--arrowed:hover g {
                color: #ff215a;
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .upk-button-next {
                margin-top: 15px;
                transform: rotate(90deg);
            }
            .upk-salf-slider-wrapper .upk-salf-navigation .upk-button-prev {
                transform: rotate(-90deg);
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap {
                position: absolute;
                top: 43%;
                right: 0;
                margin-right: 22px;
            }
            @-webkit-keyframes progress {
                0% {
                    stroke-dashoffset: 75;
                    opacity: 1;
                }
                95% {
                    stroke-dashoffset: 0;
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                    stroke-dashoffset: 0;
                }
            }
            @-moz-keyframes progress {
                0% {
                    stroke-dashoffset: 75;
                    opacity: 1;
                }
                95% {
                    stroke-dashoffset: 0;
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                    stroke-dashoffset: 0;
                }
            }
            @-o-keyframes progress {
                0% {
                    stroke-dashoffset: 75;
                    opacity: 1;
                }
                95% {
                    stroke-dashoffset: 0;
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                    stroke-dashoffset: 0;
                }
            }
            @keyframes progress {
                0% {
                    stroke-dashoffset: 75;
                    opacity: 1;
                }
                95% {
                    stroke-dashoffset: 0;
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                    stroke-dashoffset: 0;
                }
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet {
                background-color: transparent;
                opacity: 0.8;
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet--svg-animation {
                width: 20px;
                height: 20px;
                margin: 6px -7px;
                display: inline-block;
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet--svg-animation svg {
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet--svg-animation .svg__circle-inner {
                stroke: #2b2d42;
                fill: transparent;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                -o-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet-active .svg__circle {
                stroke: #ff215a;
                stroke-dasharray: 75;
                stroke-dashoffset: 0;
                -webkit-animation: progress 4s ease-in-out 1 forwards;
                -moz-animation: progress 4s ease-in-out 1 forwards;
                -ms-animation: progress 4s ease-in-out 1 forwards;
                animation: progress 4s ease-in-out 1 forwards;
            }
            .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet-active .svg__circle-inner {
                fill: #2b2d42;
                stroke: #ff215a;
            }
            @media (min-width: 768px) {
                .upk-salf-slider-wrapper {
                    height: 550px;
                    padding: 60px;
                }
                .upk-salf-slider-wrapper .upk-page-scroll {
                    bottom: 4%;
                    display: inherit;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-title {
                    font-size: 40px;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-content-wrap {
                    max-width: 400px;
                    padding: 40px;
                    padding-left: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    bottom: unset;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-image-wrap {
                    width: 80%;
                }
                .upk-salf-slider-wrapper .upk-salf-navigation {
                    margin-top: 60px;
                    margin-right: 20px;
                }
                .upk-salf-slider-wrapper .upk-salf-pagi-wrap {
                    margin-right: 47px;
                }
                .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet--svg-animation {
                    margin: 6px 0;
                }
            }
            @media (min-width: 1024px) {
                .upk-salf-slider-wrapper {
                    height: 650px;
                    padding: 70px;
                }
                .upk-salf-slider-wrapper .upk-page-scroll {
                    bottom: 9%;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-title {
                    font-size: 50px;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-content-wrap {
                    max-width: 460px;
                    padding: 50px;
                    padding-left: 0;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-desc {
                    font-size: 16px;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-button .link {
                    font-size: 16px;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-image-wrap {
                    width: 70%;
                }
                .upk-salf-slider-wrapper .upk-salf-navigation {
                    margin-top: 85px;
                    margin-right: 30px;
                }
                .upk-salf-slider-wrapper .upk-salf-pagi-wrap {
                    margin-right: 53px;
                }
                .upk-salf-slider-wrapper .upk-salf-pagi-wrap .swiper-pagination-bullet--svg-animation {
                    margin: 6px -5px;
                }
            }
            @media (min-width: 1440px) {
                .upk-salf-slider-wrapper {
                    height: 700px;
                    padding: 80px;
                }
                .upk-salf-slider-wrapper .upk-salf-item .upk-salf-title {
                    font-size: 55px;
                }
            }
            .button {
                background: #f00;
                padding: 18px 20px;
                text-transform: uppercase;
                margin-top: 50px;
                margin-bottom: 50px;
                display: inline-block;
                text-decoration: none;
                font-weight: 700;
                font-size: 15px;
                color: #fff;
            }
 
      </style>
  </head>

  <body class="body-dark">

        <div class="page-wrapper">
                <!-- style switcher -->
                <div class="style-switcher">
                    <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
                    <span>BUDDY! WE ARE WORKING ON IT.</span>
                    <h3>Color Skins</h3>
                    <ul id="styleOptions" title="Switch Color">
                        <li>
                            <a href="#" data-theme="color-default" class="color-default">

                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="color-2" class="color-2">

                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="color-3" class="color-3">

                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="color-4" class="color-4">

                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="color-5" class="color-5">

                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="color-6" class="color-6">

                            </a>
                        </li>
                    </ul>
                    <div class="language-feature">
                        <button class="ltr-switcher" data-href="#googtrans(en|en)">LTR</button><!-- /.ltr-switcher -->
                        <button class="rtl-switcher" data-href="#googtrans(en|ar)">RTL</button><!-- /.rtl-switcher -->
                    </div><!-- /.language-feature -->
                    <div class="layout-feature">
                        <a href="#" class="dark-switcher">Dark</a>
                        <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
                    </div><!-- /.language-feature -->
                </div>
                <!-- Preloader -->
                {{-- <div class="preloader">
                    <div class="icon"></div>
                </div> --}}
                    <!-- Main Header -->
                    <header class="main-header header-style-one">

                        <!-- Header Upper -->
                        <div class="header-upper">
                            <div class="inner-container clearfix">
                                <!--Logo-->
                                <div class="logo-box">
                                    <div class="logo"><a href="index.html" title="ConvinceIT Institute"><img
                                                src="{{ asset('website')}}/images/CI-logo-Full.png" id="thm-logo" alt="ConvinceIT Institute"
                                                title="ConvinceIT Institute"></a></div>
                                </div>
                                <div class="nav-outer clearfix">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                            class="txt">Menu</span></div>
            
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md navbar-light">
                                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                            <li class="dropdown"><a href="/">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="about-CIT">About Us</a>
                                            </li>
                                            <li class="dropdown"><a href="services.html">Services</a>
                                                <ul>
                                                    <li><a href="/web-dev">Website Development</a></li>
                                                    <li><a href="/graphic-design">Graphic Designing</a></li>
                                                    <li><a href="/digital-marketing">Digital Marketing</a></li>
                                                    <li><a href="/seo-sol">SEO & Content Writting</a></li>
                                                    <li><a href="/app-development">App Development <span>New</span></a></li>
                                                    <li><a href="/uiux-design">UI/UX Designing</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="/CITblog">Blog</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="/contact-us">Contact</a>  
                                            </li>
                                        </ul>
                                        </div>
                                    </nav>
                                </div>
            
                                <div class="other-links clearfix">
                                
                                    <div class="link-box">
                                        <div class="call-us">
                                            <a class="link" href="tel:+8801723365233">
                                                <span class="icon"></span>
                                                <span class="sub-text">Call Anytime</span>
                                                <span class="number">+880 1723-365233</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                        <!--End Header Upper-->
            
                    </header>
                    <!-- End Main Header -->
            
                    <!--Mobile Menu-->
                    <div class="side-menu__block">
                        <div class="side-menu__block-overlay custom-cursor__overlay">
                            <div class="cursor"></div>
                            <div class="cursor-follower"></div>
                        </div><!-- /.side-menu__block-overlay -->
                        <div class="side-menu__block-inner ">
                            <div class="side-menu__top justify-content-end">
            
                                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                                        alt=""></a>
                            </div><!-- /.side-menu__top -->
            
            
                            <nav class="mobile-nav__container">
                                <!-- content is loading via js -->
                            </nav>
                            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                            <div class="side-menu__content">
                                <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                                    other agencies.</p>
                                <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                                        999 0000</a></p>
                                <div class="side-menu__social">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div><!-- /.side-menu__content -->
                        </div><!-- /.side-menu__block-inner -->
                    </div><!-- /.side-menu__block -->
            
                    <!--Search Popup-->
                    <div class="search-popup">
                        <div class="search-popup__overlay custom-cursor__overlay">
                            <div class="cursor"></div>
                            <div class="cursor-follower"></div>
                        </div><!-- /.search-popup__overlay -->
                        <div class="search-popup__inner">
                            <form action="#" class="search-popup__form">
                                <input type="text" name="search" placeholder="Type here to Search....">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- /.search-popup__inner -->
                    </div><!-- /.search-popup -->
            
            


                    @yield('content')



            <!-- Main Footer -->
                <footer class="main-footer">
                        <div class="auto-container">
                            <!--Widgets Section-->
                            <div class="widgets-section">
                                <div class="row clearfix">

                                    <!--Column-->
                                    <div class="column col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                        <div class="footer-widget logo-widget">
                                            <div class="widget-content">
                                                <div class="logo">
                                                    <a href="index.html"><img id="fLogo" src="{{ asset('website') }}/images/CI-logo-Full.png" alt="" /></a>
                                                </div>
                                                <div class="text">Welcome to our ConvinceIT Institute. Here You can solve all your digital problems.</div>
                                                <ul class="social-links clearfix">
                                                    <li><a href="#" style="display: flex;justify-content: center;align-items: center;"><span class="fab fa-facebook-square"></span></a></li>
                                                    <li><a href="#" style="display: flex;justify-content: center;align-items: center;"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="#" style="display: flex;justify-content: center;align-items: center;"><span class="fab fa-instagram"></span></a></li>
                                                    <li><a href="#" style="display: flex;justify-content: center;align-items: center;"><span class="fab fa-pinterest-p"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <div class="widget-content">
                                                <h6>Explore</h6>
                                                <div class="row clearfix">
                                                    <div class="col-md-6 col-sm-12">
                                                        <ul>
                                                            <li><a href="#">About</a></li>
                                                            <li><a href="#">Meet Our Team</a></li>
                                                            <li><a href="#">Our Portfolio</a></li>
                                                            <li><a href="#">Latest News</a></li>
                                                            <li><a href="#">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <ul>
                                                            <li><a href="#">Support</a></li>
                                                            <li><a href="#">Privacy Policy</a></li>
                                                            <li><a href="#">Terms of Use</a></li>
                                                            <li><a href="#">Help</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                        <div class="footer-widget info-widget">
                                            <div class="widget-content">
                                                <h6>Contact</h6>
                                                <ul class="contact-info">
                                                    <li class="address"><span class="icon flaticon-pin-1"></span> 2/4, Mymensingh Road
                                                        <br>Shahabag, Dhaka-1000, Bangladesh. </li>
                                                    <li><span class="icon flaticon-call"></span><a href="tel:+880 1723-365233">+880 1723-365233</a></li>
                                                    <li><span class="icon flaticon-email-2"></span><a
                                                            href="mailto:contact@convinceit.com">contact@convinceit.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                        <div class="footer-widget newsletter-widget">
                                            <div class="widget-content">
                                                <h6>Newsletter</h6>
                                                <div class="newsletter-form">
                                                    <form method="post" action="{{ route('subscribe')}}">
                                                        @csrf
                                                        <div class="form-group clearfix">
                                                            <input type="email" name="email" value="" placeholder="Email Address"
                                                                required="">
                                                            <button type="submit" class="theme-btn"><span
                                                                    class="fa fa-envelope"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                                    mails.</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="auto-container">
                                <div class="inner clearfix">
                                    <div class="copyright">&copy; copyright 2022 ConvinceIT Institute.</div>
                                </div>
                            </div>
                        </div>

                </footer>

        </div>
        <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
        {{-- Custom JS --}}
        <script>
            const header = document.querySelector('.main-header');

                window.addEventListener('scroll', () => {
                    const scrollPos = window.scrollY;
                    if (scrollPos > 10 ) {
                        header.classList.add('scrolled');
                    }
                    else {
                        header.classList.remove('scrolled');
                    }
                });
            
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            
            var mainSlider = new Swiper(".mySwiper2", {
            parallax: true,
            speed: 1200,
            effect: 'slide',
            direction: "vertical",
            autoplay: true,
            navigation: {
            nextEl: '.upk-button-next',
            prevEl: '.upk-button-prev',
            },
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + ' swiper-pagination-bullet--svg-animation"><svg width="28" height="28" viewBox="0 0 28 28"><circle class="svg__circle" cx="14" cy="14" r="10" fill="none" stroke-width="2"></circle><circle class="svg__circle-inner" cx="14" cy="14" r="2" stroke-width="3"></circle></svg></span>';
            },
            },
            });
            // The Slideshow class.
            class Slideshow {
            constructor(el) {
            
            this.DOM = {el: el};
            
            this.config = {
                slideshow: {
                delay: 3000,
                pagination: {
                    duration: 3,
                }
                }
            };
            
            // Set the slideshow
            this.init();
            
            }
            
            init() {
            
            var self = this;
            
            // Charmed title
            this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
            this.DOM.slideTitle.forEach((slideTitle) => {
            charming(slideTitle);
            });
            
            // Set the slider
            this.slideshow = new Swiper (this.DOM.el, {
                
                loop: true,
                autoplay: {
                delay: this.config.slideshow.delay,
                disableOnInteraction: false,
                },
                speed: 500,
                preloadImages: true,
                updateOnImagesReady: true,
                
                // lazy: true,
                // preloadImages: false,
            
                pagination: {
                el: '.slideshow-pagination',
                clickable: true,
                bulletClass: 'slideshow-pagination-item',
                bulletActiveClass: 'active',
                clickableClass: 'slideshow-pagination-clickable',
                modifierClass: 'slideshow-pagination-',
                renderBullet: function (index, className) {
                    
                    var slideIndex = index,
                        number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
                    
                    var paginationItem = '<span class="slideshow-pagination-item">';
                    paginationItem += '<span class="pagination-number">' + number + '</span>';
                    paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
                    paginationItem += '</span>';
                
                    return paginationItem;
                    
                },
                },
            
                // Navigation arrows
                navigation: {
                nextEl: '.slideshow-navigation-button.next',
                prevEl: '.slideshow-navigation-button.prev',
                },
            
                // And if we need scrollbar
                scrollbar: {
                el: '.swiper-scrollbar',
                },
            
                on: {
                init: function() {
                    self.animate('next');
                },
                }
            
            });
            
            // Init/Bind events.
            this.initEvents();
            
            }
            initEvents() {
            
            this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
            //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());
            
            this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
            
            this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
                
            }
            animate(direction = 'next') {
            
            // Get the active slide
            this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
            this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
            this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
            this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
            
            // Reverse if prev  
            this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
            
            // Get old slide
            this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
            if (this.DOM.oldSlide) {
                // Get parts
                this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
                this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
                // Animate
                this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
                TweenMax.to(letter, .3, {
                    ease: Quart.easeIn,
                    delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
                    y: '50%',
                    opacity: 0
                });
                });
            }
            
            // Animate title
            this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
                TweenMax.to(letter, .6, {
                ease: Back.easeOut,
                delay: pos*.05,
                startAt: {y: '50%', opacity: 0},
                y: '0%',
                opacity: 1
                });
            });
            
            // Animate background
            TweenMax.to(this.DOM.activeSlideImg, 1.5, {
                ease: Expo.easeOut,
                startAt: {x: direction === 'next' ? 200 : -200},
                x: 0,
            });
            
            //this.animatePagination()
            
            }
            animatePagination(swiper, paginationEl) {
                
            // Animate pagination
            this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
            this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
            this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
            
            console.log(swiper.pagination);
            // console.log(swiper.activeIndex);
            
            // Reset and animate
            TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
            TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
                startAt: {scaleX: 0},
                scaleX: 1,
            });
            
            
            }
            
            }
            
            const slideshow = new Slideshow(document.querySelector('.slideshow'));   
            
            // Get the button
            var scrollup = document.getElementById("scrollToTop");
            
            //  When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 200) {
            scrollup.style.display = "block";
            } else {
            scrollup.style.display = "none";
            }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }
        
            
            $("#tile-1 .nav-tabs a").click(function() {
            var position = $(this).parent().position();
            var width = $(this).parent().width();
                $("#tile-1 .slider").css({"left":+ position.left,"width":width});
            });
            var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
            var actPosition = $("#tile-1 .nav-tabs .active").position();
            $("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});
            

        </script>
        <!-- Template Main JS File -->
        <script src="{{ asset('website') }}/js/jquery.js"></script>
        <script src="{{ asset('website') }}/js/popper.min.js"></script>
        <script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('website') }}/js/TweenMax.js"></script>
        <script src="{{ asset('website') }}/js/jquery-ui.js"></script>
        <script src="{{ asset('website') }}/js/jquery.fancybox.js"></script>
        <script src="{{ asset('website') }}/js/owl.js"></script>
        <script src="{{ asset('website') }}/js/mixitup.js"></script>
        <script src="{{ asset('website') }}/js/appear.js"></script>
        <script src="{{ asset('website') }}/js/wow.js"></script>
        <script src="{{ asset('website') }}/js/jQuery.style.switcher.min.js"></script>
        <script src="{{ asset('website') }}/js/jquery.easing.min.js"></script>
        <script src="{{ asset('website') }}/js/jarallax.min.js"></script>
        <script src="{{ asset('website') }}/js/custom-script.js"></script>
        <script src="{{ asset('website') }}/js/lang.js"></script>
        <script src="{{ asset('website') }}/translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
        <script src="{{ asset('website') }}/js/color-switcher.js"></script>
    </div>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/621e34761ffac05b1d7c6ba4/1ft2vpsnj';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>