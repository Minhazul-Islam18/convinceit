<style>
    .information tr td a {
	display: flex;
	justify-content: center;
    }
    .information tr a img {
	width: 50%;
    }
    .information {
	padding: 1.5rem 2.8rem;
	border-top: 1px solid #ffaa17;
	border-radius: 1rem;
	box-shadow: 2px 0px 23px 7px #ffaa172e;
	margin-left: 2.5rem;
    }
    .port .description h1 {
	color: #000;
	text-transform: uppercase;
	text-align: center;
	line-height: 3rem;
	font-size: 3rem;
	padding-bottom: 2rem;
    }
    .port .description .information .tit {
	text-align: center;
	margin-bottom: 2rem;
    }
    .information table tr {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	width: 100%;
	border-bottom: 1px solid #ffedd3;
	padding: .5rem 0;
    }
    .information table tr td > * {
	margin: 0 !important;
    }
    .information table {
	width: 100%;
    }
    .row img {
    max-width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
    }

    .graphic.gallery ul li {
    float: left;
    /* margin: 0 0.8771929825%; */
    overflow: hidden;
    }



    .graphic.gallery {
    padding: 10px 0 0;
    position: relative;
    overflow: hidden;
    }
    .graphic.gallery ul {
    padding-top: 30px;
    position: relative;
    }
    .graphic.gallery ul li {
    margin-bottom: 20px;
    position: relative;
    }
    .graphic.gallery ul li a {
    display: block;
    position: relative;
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
    line-height: 0;
    }
    .graphic.gallery ul li a:before {
    position: absolute;
    width: 32px;
    height: 32px;
    top: 40%;
    left: 50%;
    margin: -14px 0 0 -16px;
    url: ();
    content: "";
    opacity: 0;
    z-index: 1;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    transition: all 0.3s linear;
    }
    .graphic.gallery ul li a:hover:before {
    top: 50%;
    opacity: 1;
    }
    .graphic.gallery ul li a::after {
	position: absolute;
	width: 100%;
	top: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 0.3);
	content: "";
	opacity: 0;
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	transition: all 0.3s linear;
	left: 0;
	right: 0;
    }
    .graphic.gallery ul li a:hover:after {
    opacity: 1;
    }

    .port {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    padding-top: 100px;
    background: #ffffff;
    background-color: #fafafa;
    z-index: 103;
    visibility: hidden;
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
    border-bottom: 1px solid #d0d0d0;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    }
    /* .port img {
    width: 50%;
    } */
    .port .description {
    float: left;
    max-height: 100%;
    padding: 0 40px 40px;
    overflow: auto;
    }
    .port h1 {
    font-size: 35px;
    line-height: 2.3;
    padding: 0;
    }
    .port > * {
    opacity: 0;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    transition: all 0.5s linear;
    }
    .port.item_open {
    visibility: visible;
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    }
    .port > * {
    opacity: 1;
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
    }

    .close {
    width: 21px;
    height: 21px;
    background: url(data:image/svg+xml;utf8,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2017.1.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3C%21DOCTYPE%20svg%20PUBLIC%20%22-//W3C//DTD%20SVG%201.1//EN%22%20%22http%3A//www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd%22%3E%0A%3Csvg%20version%3D%221.1%22%0A%09%20id%3D%22svg2%22%20xmlns%3Adc%3D%22http%3A//purl.org/dc/elements/1.1/%22%20xmlns%3Acc%3D%22http%3A//creativecommons.org/ns%23%22%20xmlns%3Ardf%3D%22http%3A//www.w3.org/1999/02/22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A//www.w3.org/2000/svg%22%0A%09%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2021%2021%22%0A%09%20enable-background%3D%22new%200%200%2021%2021%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cg%20id%3D%22layer1%22%20transform%3D%22translate%280%2C-1031.3622%29%22%3E%0A%09%3Cpath%20id%3D%22path2987%22%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20d%3D%22M0%2C1031.4l21%2C21%22/%3E%0A%09%3Cpath%20id%3D%22path2989%22%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20d%3D%22M21%2C1031.4l-21%2C21%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A%0A) no-repeat;
    position: absolute;
    right: 10px;
    top: -121px;
    opacity: 1;
    z-index: 1004;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
    }
    .item_open .close {
	opacity: 1;
	top: 4rem;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	right: 5rem;
    }

</style>
@extends('layouts.loader')

@section('content')
    

  <div id="slider">
    <div class="bdt-timeline-container">
      <div class="upk-salf-slider-wrapper">
            <div class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    <div class="upk-salf-item swiper-slide">
                        <div class="upk-salf-image-wrap">
                            <img class="upk-xanc-img" src="{{ asset('website' )}}/img/slide/Seo_marketing.jpg" />
                        </div>
                        <div class="upk-salf-content-wrap">
                            <h3 class="upk-salf-title" data-swiper-parallax-y="-150" data-swiper-parallax-duration="1200">
                                Social Media Marketing.
                            </h3>
                            <div class="upk-salf-desc" data-swiper-parallax-y="-200" data-swiper-parallax-duration="1400" >Are you looking for an effective way to grow your business’ brand awareness, number of new customers, and website traffic? Then you should be on social media! Check out our social media marketing service and build a strong social media presence. Contact us to get started.</div>
                            <div class="upk-salf-button" data-swiper-parallax-y="-300" data-swiper-parallax-duration="1500">
                                <a class="link link--arrowed" href="#">read more
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                                        <g fill="none" stroke="#ff215a" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                        <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="upk-salf-item swiper-slide">
                        <div class="upk-salf-image-wrap">
                            <img class="upk-xanc-img" src="{{ asset('website' )}}/img/slide/web-design-and-development.jpg" />
                        </div>
                        <div class="upk-salf-content-wrap">
                            <h3 class="upk-salf-title" data-swiper-parallax-y="-150" data-swiper-parallax-duration="1200">
                                Web Design & Development Services.
                            </h3>
                            <div class="upk-salf-desc" data-swiper-parallax-y="-200" data-swiper-parallax-duration="1400">Website design that goes beyond brochure-ware. Create websites that drive traffic, leads and conversions in CMS's like WordPress, Drupal and Hubspot and eCommerce platforms like Magento, WooCommerce and Shopify.</div>
    
                                <div class="upk-salf-button" data-swiper-parallax-y="-300" data-swiper-parallax-duration="1500">
                                <a class="link link--arrowed" href="#">read more
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                                        <g fill="none" stroke="#ff215a" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                        <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="upk-salf-item swiper-slide">
                        <div class="upk-salf-image-wrap">
                            <img class="upk-xanc-img" src="{{ asset('website' )}}/img/slide/Digital marketing.jpg" />
                        </div>
                        <div class="upk-salf-content-wrap">
                            <h3 class="upk-salf-title" data-swiper-parallax-y="-150" data-swiper-parallax-duration="1200">
                                Digital Marketing Services.
                            </h3>
                            <div class="upk-salf-desc" data-swiper-parallax-y="-200" data-swiper-parallax-duration="1400">Strike out your entire digital marketing to-do list, break through your growth plateau and see profound ROI with a single team of digital marketing specialists.</div>
    
                                <div class="upk-salf-button" data-swiper-parallax-y="-300" data-swiper-parallax-duration="1500">
                                <a class="link link--arrowed" href="#">read more
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                                        <g fill="none" stroke="#ff215a" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                        <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="upk-page-scroll">
                <a class="arrow-up">
                    <div class="long-arrow-left"></div>
                    <span class="arrow-slide"></span>
                </a>
            </div>
            <div class="upk-salf-nav-pag-wrap">
                
                <div class="upk-salf-navigation">
                    <div class="upk-button-prev upk-n-p">
                        <a class="link link--arrowed" href="#">
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                                <g fill="none" stroke="#ff215a" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                                <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="upk-button-next upk-n-p">
                        <a class="link link--arrowed" href="#">
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32">
                                <g fill="none" stroke="#ff215a" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                                <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
    
                <div class="upk-salf-pagi-wrap">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    
    </div>
  </div>


  <main id="main">

        <!-- Banner Section -->
        {{-- <section class="banner-section banner-one">

          <div class="left-based-text">
              <div class="base-inner">
                  <div class="hours">
                      <ul class="clearfix">
                          <li><span>mon - fri</span></li>
                          <li><span>9am - 7pm</span></li>
                      </ul>
                  </div>
                  <div class="social-links">
                      <ul class="clearfix">
                          <li><a href="#"><span>Twitter</span></a></li>
                          <li><a href="#"><span>Facebook</span></a></li>
                          <li><a href="#"><span>Youtube</span></a></li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="banner-carousel owl-theme owl-carousel">
              <!-- Slide Item -->
              <div class="slide-item">
                  <div class="image-layer" style="background-image: url(images/main-slider/1.jpg);"></div>
                  <div class="left-top-line"></div>
                  <div class="right-bottom-curve"></div>
                  <div class="right-top-curve"></div>
                  <div class="auto-container">
                      <div class="content-box">
                          <div class="content">
                              <div class="inner">
                                  <div class="sub-title">welcome to Linoor agency</div>
                                  <h1>Smart Web <br>Design Agency</h1>
                                  <div class="link-box">
                                      <a class="theme-btn btn-style-one" href="about.html">
                                          <i class="btn-curve"></i>
                                          <span class="btn-title">Discover More</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Slide Item -->
              <div class="slide-item">
                  <div class="image-layer" style="background-image: url(images/main-slider/2.jpg);"></div>
                  <div class="left-top-line"></div>
                  <div class="right-bottom-curve"></div>
                  <div class="right-top-curve"></div>
                  <div class="auto-container">
                      <div class="content-box">
                          <div class="content">
                              <div class="inner">
                                  <div class="sub-title">welcome to Linoor agency</div>
                                  <h1>Smart Web <br>Design Agency</h1>
                                  <div class="link-box">
                                      <a class="theme-btn btn-style-one" href="about.html">
                                          <i class="btn-curve"></i>
                                          <span class="btn-title">Discover More</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section> --}}
      <!--End Banner Section -->

      <!--Services Section-->
      <section class="services-section">
          <div class="auto-container">
              <div class="row clearfix">
                  <!--Title Block-->
                  <div class="title-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="inner">
                          <div class="sec-title">
                              <h2>We Shape the Perfect <br>Solutions<span class="dot">.</span></h2>
                          </div>
                      </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                      data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-responsive"></span></div>
                          <h6><a href="web-dev">Website <br>Development</a></h6>
                      </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInLeft"
                      data-wow-delay="300ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-computer"></span></div>
                          <h6><a href="graphic-design">graphic <br>designing</a></h6>
                      </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                      data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                          <h6><a href="digital-marketing">digital <br>marketing</a></h6>
                      </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInLeft"
                      data-wow-delay="300ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-development"></span></div>
                          <h6><a href="seo-sol">seo & content <br>writing</a></h6>
                      </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInLeft"
                      data-wow-delay="600ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-app-development"></span></div>
                          <h6><a href="app-development">App <br>Development</a></h6>
                      </div>
                  </div>
                  <!--Service Block-->
                  <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-12 wow fadeInLeft"
                      data-wow-delay="900ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-ui"></span></div>
                          <h6><a href="uiux-design">Ui/UX <br>designing</a></h6>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!--About Section-->
      <section class="about-section about-section__dark">
          <div class="auto-container">
              <div class="row clearfix">
                  <!--Image Column-->
                  <div class="image-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="inner">
                          <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                  src="{{ asset('website' )}}/images/Office_Meeting_Room.jpg" alt=""></div>
                        {{-- <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                                  src="https://media.istockphoto.com/vectors/online-testing-online-education-vector-id1141401963?b=1&k=20&m=1141401963&s=612x612&w=0&h=nDAdldk6wroPosBNxVGODWsB3lnAQ1rL8sxWL7zpqIY=" alt="">
                        </div> --}}
                      </div>
                  </div>
                  <!--Text Column-->
                  <div class="text-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="inner">
                          <div class="sec-title">
                              <h2 style="font-size: 3.5rem; line-height: 4rem;margin: 0;">We’re the best Company <br>in BANGLADESH<span class="dot">.</span></h2>
                          </div>
                         
                          <div class="text clearfix">
                              <ul>
                                  <li>24/7 Service.</li>
                                  <li>100% Quality full & Best Services.</li>
                                  <li>Expertise in IT Services.</li>
                              </ul>
                              <div class="since"><span class="txt">Since <br>2021</span></div>
                          </div>
                          <div class="link-box">
                              <a class="theme-btn btn-style-one" href="about-CIT">
                                  <i class="btn-curve"></i>
                                  <span class="btn-title">Discover More</span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!--We DO Section-->
      <section class="we-do-section we-do-section__dark">
          <div class="auto-container">
              <div class="row clearfix">
                  <!--Left Column-->
                  <div class="left-col col-lg-6 col-md-6 col-sm-12">
                      <div class="inner">
                          <div class="sec-title">
                              <h2 style="margin: 0;">Here We Are Expertise on<span class="dot">.</span></h2>
                          </div>
                          <div class="progress-box">
                              <div class="bar-title">Web & Softwere Development.</div>
                              <div class="bar">
                                  <div class="bar-inner count-bar" data-percent="92%">
                                      <div class="count-box">
                                          <span class="count-text" data-stop="92" data-speed="1500">0</span>%
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="progress-box mt-3">
                              <div class="bar-title">Graphic Design</div>
                              <div class="bar">
                                  <div class="bar-inner count-bar" data-percent="95%">
                                      <div class="count-box">
                                          <span class="count-text" data-stop="95" data-speed="1500">0</span>%
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="progress-box mt-3">
                              <div class="bar-title">Digital marketing</div>
                              <div class="bar">
                                  <div class="bar-inner count-bar" data-percent="85%">
                                      <div class="count-box">
                                          <span class="count-text" data-stop="85" data-speed="1500">0</span>%
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="progress-box mt-3">
                              <div class="bar-title">Video Editing</div>
                              <div class="bar">
                                  <div class="bar-inner count-bar" data-percent="90%">
                                      <div class="count-box">
                                          <span class="count-text" data-stop="90" data-speed="1500">0</span>%
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Right Column-->
                  <div class="right-col col-lg-6 col-md-6 col-sm-12">
                      <div class="inner">
                          <div class="faq-box">
                              <ul class="accordion-box accordion-box__dark clearfix">
                                  <!--Block-->
                                  <li class="accordion block active-block">
                                      <div class="acc-btn active"><span class="count">1.</span> Future-Proof & Quality.</div>
                                      <div class="acc-content current">
                                          <div class="content">
                                              <div class="text">We use future proof tools & technologies that allow your systems to scale along with your business and ensure the system is stable with upcoming versions. We don't compromise with quality and we ensure that the products and services we provide meet or exceed our customer's expectations. </div>
                                          </div>
                                      </div>
                                  </li>

                                  <!--Block-->
                                  <li class="accordion block">
                                      <div class="acc-btn"><span class="count">2.</span> Exceptional Support 
                                      </div>
                                      <div class="acc-content">
                                          <div class="content">
                                              <div class="text">When you need support, we want to be there for you. We offer flexible support. We believe in our product, and we want to see it work for you. </div>
                                          </div>
                                      </div>
                                  </li>

                                  <!--Block-->
                                  <li class="accordion block">
                                    <div class="acc-btn"><span class="count">3.</span> Pricing & Essentials.
                                    </div>
                                      <div class="acc-content">
                                          <div class="content">
                                              <div class="text">Our services and items are intended to provide our clients with a real opportunity for growing their online business at an affordable price.We are always careful about your business requirements and the websites and plugins we create in exact compliance with your specific business needs. </div>
                                          </div>
                                      </div>
                                  </li>

                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Gallery Section -->
      <section class="gallery-section gallery-section__dark">
            <div class="auto-container">
              <!--MixitUp Galery-->
              <div class="mixitup-gallery">
                  <div class="upper-row clearfix">
                      <div class="sec-title">
                          <h2 style="font-size: 4.3rem">work showcase<span class="dot">.</span></h2>
                      </div>
                      <!--Filter-->
                      <div class="filters clearfix">
                          <ul class="filter-tabs filter-btns clearfix">
                              <li class="active filter" data-role="button" data-filter="all">All
                                @foreach ($webprof as $webi) 
                                  {{-- $cti = $webi->count(); --}}
                                  @if ($webi->count() <= 0) 
                                      <sup>{{'0'}}</sup> 
                                   @else  
                                     <sup>[{{ $webi->count() }}]</sup>
                                     @endif
                                  @endforeach 
                                  </li>
                                 
                              
                                @foreach ($webcat as $user)
                                <li class="filter" data-role="button" data-filter=".{{ $user-> name}}">{{ $user-> name}}
                                    {{-- @foreach ($webprof as $user)
                                    @if ($user->id == 0) 
                                        <sup>[{{0}}]</sup> 
                                     @else   
                                       <sup>[{{ $user->count(); }}]</sup>
                                       @endif
                                    @endforeach --}}
                              </li>
                                @endforeach                           
                          </ul>
                      </div>
                  </div>
                  <div class="filter-list row">
                    @foreach ($webprof as $user)
                    @if ($user->count() >= 0) 
                         <!-- Gallery Item -->
                      <div class="gallery-item mix all <?php 
                      $category_id = $user -> category_id;
                  
                      $PDO = \DB::connection()->getPdo();
                      $QUERY = $PDO->prepare("SELECT * FROM `w_categories` WHERE `id` = '$category_id'");
                      $QUERY->execute();
                      $res=$QUERY->fetchAll(PDO::FETCH_OBJ);

                      echo $res[0]->name ?? null;
                      ?> col-lg-4 col-md-6 col-sm-12">
                       <a href="{{ route('website_portfolio', ['id'=>$user->id]) }}">
                        <div class="inner-box">
                            <figure class="image"><img src="{{ URL::asset('/website/images/portfolio_images/'.$user -> featured_image) }}" alt=""></figure>
                            {{-- <a href="/" class="lightbox-image overlay-box"
                                data-fancybox="gallery"></a> --}}
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat">
                                        <span>
                                            <?php 
                                            $category_id = $user -> category_id;
                                        
                                            $PDO = \DB::connection()->getPdo();
                                            $QUERY = $PDO->prepare("SELECT * FROM `w_categories` WHERE `id` = '$category_id'");
                                            $QUERY->execute();
                                            $res=$QUERY->fetchAll(PDO::FETCH_OBJ);

                                            echo $res[0]->name ?? null;
                                            ?>
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="{{ route('website_portfolio', ['id'=>$user->id]) }}">{{$user->name}}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </a>
                    </div>
                     @else   
                      <p>There is no item to Show!</p>
                      @endif
                    @endforeach
                  </div>

              </div>
                    <!-- 2nd Gallery Section -->
                <section class="graphic gallery">
                    <div class="sec-title" style="margin: 0;">
                        <h2 style="font-size: 4rem; margin: 0; line-height: 4.6rem;">Top Notch Designs<span class="dot">.</span></h2>
                    </div>
                    <div class="row">
                    <ul>
                        <a href="#" class="close"></a>
                        @if ($graphicprof ->count())
                        @foreach ($graphicprof as $post)
                            <li class="col-md-4 col-sm-6 col-lg-4">
                                <a href="#{{ $post -> id}}">
                                <img src="{{ asset('/website/images/graphic-demo/'.$post -> featured_image) }}" alt="{{ $post -> title}}" title="" />
                                </a>
                            </li>
                            <!-- Item  content -->
                            <div style="overflow-x: hidden" id="{{ $post -> id}}" class="port">
                                <div class="row">
                                    <div class="description col-md-6 col-lg-6 col-sm-12">
                                            <h1>{{ $post -> title}}</h1>
                                            <div class="information">
                                                <p class="tit pb-webpage">Basic Information</p>
                                                <table cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Description:</td>
                                                            <td> @php
                                                                echo $post -> description
                                                                @endphp
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Software:</td><td>Illustrator/Photoshop</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Format:</td><td>AI/PSD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Upload Time:</td><td>{{
                                                                date('d-m-Y', strtotime($post -> published_at));}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Have a Look!</td>
                                                            <td>
                                                                <a href="{{ $post -> project_url}}" target="_blank" rel="noopener noreferrer"><img src="https://img.icons8.com/cute-clipart/64/000000/link.png"/></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <img src="{{ asset('/website/images/graphic-demo/'.$post -> featured_image) }}" alt="{{ $post -> title}}" title="" />
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- / row -->
                        @endforeach
                        @else
                        <li class="col-md-12 col-sm-12 col-lg-12">
                        <p>There's More Graphic Elements are Coming Soon!</p>
                        </li>
                        @endif
                    </ul>
                    </div>
                    <!-- / row --> 
                </section>
     
         
            </div>
     
       </section>
      <!-- End Gallery Section -->
 
      
       <!-- Funfacts Section -->
      <section class="facts-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
          <!-- <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div> -->
          <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8c29mdHdhcmUlMjBjb21wYW55fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=1200&q=800" alt="" class="jarallax-img">
          <div class="auto-container">
              <div class="inner-container">

                  <!-- Fact Counter -->
                  <div class="fact-counter">
                      <div class="row clearfix">

                          <!--Column-->
                          <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="count-outer count-box">
                                          <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                      </div>
                                      <div class="counter-title">Projects Completed</div>
                                  </div>
                              </div>
                          </div>

                          <!--Column-->
                          <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="count-outer count-box alternate">
                                          <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                      </div>
                                      <div class="counter-title">Active clients</div>
                                  </div>
                              </div>
                          </div>

                          <!--Column-->
                          <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="count-outer count-box">
                                          <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                      </div>
                                      <div class="counter-title">cups of coffee</div>
                                  </div>
                              </div>
                          </div>

                          <!--Column-->
                          <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="count-outer count-box">
                                          <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                      </div>
                                      <div class="counter-title">happy clients</div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </section>
      <!-- End Funfacts Section -->

      <!-- Trusted Section -->
      <section class="trusted-section trusted-section__dark">
          <div class="auto-container">
              <div class="outer-container">
                  <div class="row clearfix">
                      <div class="left-col col-xl-5 col-lg-5 col-md-5 col-sm-12">
                          <div class="inner">
                              <div class="col-header">
                                  <div class="header-inner">
                                      <span>We’re Committed To Deliver High Quality Projects .</span>
                                  </div>
                              </div>
                              <div class="features">
                                  <div class="feature">
                                      <div class="count"><span>01</span></div>
                                      <h5>TOTAL DESIGN FREEDOM FOR EVERYONE</h5>
                                      <div class="sub-text">core features</div>
                                  </div>
                                  <div class="feature">
                                      <div class="count"><span>02</span></div>
                                      <h5>BASIC RULES OF RUNNING WEB AGENCY</h5>
                                      <div class="sub-text">core features</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="right-col col-xl-7 col-lg-7 col-md-7 col-sm-12">
                          <div class="inner">
                              <div class="sec-title">
                                  <h2 style="font-size: 4.2rem">We’re trusted by more <br>than 6260 clients<span class="dot">.</span></h2>                                 
                              </div>
                               <!--Default Tabs-->
                          <div class="default-tabs tabs-box">

                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                                <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                                <li data-tab="#tab-3" class="tab-btn"><span>Our History</span></li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab-->
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content">
                                        <div class="text">To transform educated unemployed youth and disabled people into skilled manpower through training in the information technology sector. To create employment opportunities for 5 lakh educated unemployed youth and the disabled in the IT sector by 2025. To contribute to the domestic technology through research and development of information and communication technology as well as to export the IT industry to the international market. 
                                        </div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-2">
                                    <div class="content">
                                        <div class="text">To build a technology-rich human resource to build a modern digital Bangladesh rich in information and technology, to meet the challenges of the 21st century, to create up-to-date efficient workforce and to provide reliable people-friendly and environmentally friendly digital IT services at the rural level.</div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-3">
                                    <div class="content">
                                        <div class="text">This is ConvinceIT. Was Founded in 2021. A Fully Organized Team in every Department,  Our dedicated team members have a deep understanding of the client’s project and
                                        business goals and can work according to requirements. </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </section>

      <!-- End Funfacts Section -->

      <!--Sponsors Section-->
      <section class="sponsors-section sponsors-section__dark">
          <div class="sponsors-outer">
              <!--Sponsors-->
              <div class="auto-container">
                  <!--Sponsors Carousel-->
                  <div class="sponsors-carousel owl-theme owl-carousel">
                      <div class="slide-item">
                          <figure class="image-box"><a href="#"><img src="{{ asset('website' )}}/images/clients/client-1.png" alt=""></a>
                          </figure>
                      </div>
                      <div class="slide-item">
                          <figure class="image-box"><a href="#"><img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/v1496943519/jbljwkofvbrw56wg6ydh.png" alt=""></a>
                          </figure>
                      </div>
                      <div class="slide-item">
                          <figure class="image-box"><a href="#"><img src="{{ asset('website' )}}/images/clients/client-2.gif" alt=""></a>
                          </figure>
                      </div>
                      <div class="slide-item">
                          <figure class="image-box"><a href="#"><img src="https://findlogovector.com/wp-content/uploads/2018/12/huron-consulting-group-logo-vector.png" alt=""></a>
                          </figure>
                      </div>
                      <div class="slide-item">
                          <figure class="image-box"><a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzPYNLEJQUPog1nDmkGT1MgctoyT3NnCa-fBmLZotoP_-PASwTPArYxxyM2HOsA3I3xmw&usqp=CAU" alt=""></a>
                          </figure>
                      </div>
                      <div class="slide-item">
                          <figure class="image-box"><a href="#"><img src="https://thumbs.dreamstime.com/b/granola-logo-vector-premium-quality-lettering-composition-stylized-spikelet-black-calligraphy-isolated-white-handwritten-205110323.jpg" alt=""></a>
                          </figure>
                      </div>                     
                  </div>
              </div>
          </div>
      </section>

      <!-- News Section -->
      <section class="news-section news-section__dark">
          <div class="auto-container">
              <div class="sec-title centered">
                  <h2 style="font-size: 4rem;">Latest news & articles<span class="dot">.</span></h2>
              </div>

              <div class="row clearfix">
                  <!--News Block-->
                  <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                      data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="image-box">
                              <a href="blog-single.html"><img src="{{ asset('website' )}}/images/resource/news-1.jpg" alt=""></a>
                          </div>
                          <div class="lower-box">
                              <div class="post-meta">
                                  <ul class="clearfix">
                                      <li><span class="far fa-clock"></span> 20 Mar</li>
                                      <li><span class="far fa-user-circle"></span> Admin</li>
                                      <li><span class="far fa-comments"></span> 2 Comments</li>
                                  </ul>
                              </div>
                              <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                              <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                              <div class="link-box" style="display: flex;justify-content: center;">
                                <a class="theme-btn" style="display: flex;justify-content: center;align-items: center;" href="blog-single"><span
                                          class="flaticon-next-1"></span></a></div>
                          </div>
                      </div>
                  </div>
                  <!--News Block-->
                  <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                      data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="image-box">
                              <a href="blog-single.html"><img src="{{ asset('website' )}}/images/resource/news-2.jpg" alt=""></a>
                          </div>
                          <div class="lower-box">
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="far fa-clock"></span> 20 Mar</li>
                                    <li><span class="far fa-user-circle"></span> Admin</li>
                                    <li><span class="far fa-comments"></span> 2 Comments</li>
                                </ul>
                            </div>
                            <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                            <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                            <div class="link-box" style="display: flex;justify-content: center;">
                              <a class="theme-btn" style="display: flex;justify-content: center;align-items: center;" href="blog-single"><span
                                        class="flaticon-next-1"></span></a></div>
                        </div>
                      </div>
                  </div>
                  <!--News Block-->
                  <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                      data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="image-box">
                              <a href="blog-single.html"><img src="{{ asset('website' )}}/images/resource/news-3.jpg" alt=""></a>
                          </div>
                          <div class="lower-box">
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="far fa-clock"></span> 20 Mar</li>
                                    <li><span class="far fa-user-circle"></span> Admin</li>
                                    <li><span class="far fa-comments"></span> 2 Comments</li>
                                </ul>
                            </div>
                            <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                            <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                            <div class="link-box" style="display: flex;justify-content: center;">
                              <a class="theme-btn" style="display: flex;justify-content: center;align-items: center;" href="blog-single"><span
                                        class="flaticon-next-1"></span></a></div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Call To Section -->
      <section class="call-to-section">
          <div class="auto-container">
              <div class="inner clearfix">
                  <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                  <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                  <h2 style="font-size: 4rem; font-weight: 700; margin: 0;line-height: 5rem;"">Let's Get Your Project <br>Started!</h2>
                  <div class="link-box">
                      <a class="theme-btn btn-style-two" href="contact-us">
                          <i class="btn-curve"></i>
                          <span class="btn-title">Contact with us</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>
      
    </main><!-- End #main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript">
        // portfolio
        $('.graphic.gallery ul li a').click(function() {
            var itemID = $(this).attr('href');
            $('.graphic.gallery ul').addClass('item_open');
            $(itemID).addClass('item_open');
            return false;
        });
        $('.close').click(function() {
            $('.port, .graphic.gallery ul').removeClass('item_open');
            return false;
        });

        $(".graphic.gallery ul li a").click(function() {
            $('html, body').animate({
                scrollTop: parseInt($("#top").offset().top)
            }, 400);
        });
    </script>
@endsection
