@extends('layouts.loader')
@section('content')

<div class="page-wrapper">

  <!-- Banner Section -->
  <section class="page-banner">
      <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
      <div class="shape-1"></div>
      <div class="shape-2"></div>
      <div class="banner-inner">
          <div class="auto-container">
              <div class="inner-container clearfix">
                  <h1>Services</h1>
                  <div class="page-nav">
                      <ul class="bread-crumb clearfix">
                          <li><a href="index-main.html">Home</a></li>
                          <li class="active">Services</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--End Banner Section -->

  <!--Services Section-->
  <section class="services-section-three padd-top">
      <div class="auto-container">
          <div class="services">
              <div class="row clearfix">
                  <!--Service Block-->
                  <div class="service-block-two col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp"
                      data-wow-delay="0ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-vector"></span></div>
                          <h5><a href="#">Modern <br>Designing</a></h5>
                          <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                          <div class="link-box"><a href="{{ route('contact-us')}}"><span class="fa fa-angle-right"></span></a></div>
                      </div>
                  </div>

                  <!--Service Block-->
                  <div class="service-block-two col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp"
                      data-wow-delay="300ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-digital"></span></div>
                          <h5><a href="#">MARKETING <br>STRATEGY</a></h5>
                          <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                          <div class="link-box"><a href="{{ route('contact-us')}}"><span class="fa fa-angle-right"></span></a></div>
                      </div>
                  </div>

                  <!--Service Block-->
                  <div class="service-block-two col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp"
                      data-wow-delay="600ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-instant-camera"></span></div>
                          <h5><a href="#">Digital <br>Products</a></h5>
                          <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                          <div class="link-box"><a href="{{ route('contact-us')}}"><span class="fa fa-angle-right"></span></a></div>
                      </div>
                  </div>

                  <!--Service Block-->
                  <div class="service-block-two col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp"
                      data-wow-delay="900ms" data-wow-duration="1500ms">
                      <div class="inner-box">
                          <div class="bottom-curve"></div>
                          <div class="icon-box"><span class="flaticon-monitor"></span></div>
                          <h5><a href="#">Website <br>Development</a></h5>
                          <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                          <div class="link-box"><a href="{{ route('contact-us')}}"><span class="fa fa-angle-right"></span></a></div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section>

  <!--Services Section-->
  <section class="services-section">
      <div class="auto-container">
          <div class="row clearfix">
              <!--Title Block-->
              <div class="title-block col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="inner">
                      <div class="sec-title">
                          <h2 style="font-size: 3rem">We Shape the Perfect <br>Solutions<span class="dot">.</span></h2>
                          <div class="lower-text">We are committed to providing our customers with exceptional
                              service while offering our employees the best training.</div>
                      </div>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-6">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-responsive"></span></div>
                      <h6><a href="{{ route('web-dev')}}">Website <br>Development</a></h6>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-6">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-computer"></span></div>
                      <h6><a href="{{ route('graphic-design')}}">graphic <br>designing</a></h6>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-6">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                      <h6><a href="{{ route('digital-marketing')}}">digital <br>marketing</a></h6>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-6">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-development"></span></div>
                      <h6><a href="{{ route('seo-sol')}}">seo & content <br>writing</a></h6>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-6">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-app-development"></span></div>
                      <h6><a href="{{ route('app-development')}}">App <br>Development</a></h6>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-3 col-lg-3 col-md-3 col-sm-6">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-ui"></span></div>
                      <h6><a href="{{ route('uiux-design')}}">Ui/UX <br>designing</a></h6>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- We Work Section -->
  {{-- <section class="we-work-section">
      <div class="auto-container">
          <div class="sec-title centered">
              <h2 style="font-size: 3.5rem">We Work With industries<span class="dot">.</span></h2>
          </div>
          <!--Work Tabs-->
          <div class="work-tabs tabs-box">

              <!--Tab Btns-->
              <ul class="tab-btns tab-buttons clearfix">
                  <li data-tab="#tab-1" class="tab-btn active-btn"><span>Latest technology</span></li>
                  <li data-tab="#tab-2" class="tab-btn"><span>awesome support</span></li>
                  <li data-tab="#tab-3" class="tab-btn"><span>1 click demo install</span></li>
              </ul>

              <!--Tabs Container-->
              <div class="tabs-content">

                  <!--Tab-->
                  <div class="tab active-tab" id="tab-1">
                      <div class="row clearfix">
                          <div class="image-col col-lg-5 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="image">
                                      <img src="images/resource/featured-image-14.jpg" alt="">
                                  </div>
                              </div>
                          </div>
                          <div class="text-col col-lg-7 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="text">
                                          <p>There are many variations of passages of lorem ipsum available, but
                                              the majority have suffered alteration in some form, by injected
                                              humour, or randomised words which don't look even slightly
                                              believable.</p>
                                          <p class="theme_color">If you are going to use a passage of Lorem Ipsum,
                                              you need to be sure there isn't anything embarrassing hidden in the
                                              middle of text. </p>
                                          <ul>
                                              <li>Self-contained, state-of-the-art time clock</li>
                                              <li>Scalability of up to 500 employees per time clock</li>
                                              <li>The ability to connect up to 32 time clocks</li>
                                              <li>Employee self-enrollment</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!--Tab-->
                  <div class="tab" id="tab-2">
                      <div class="row clearfix">
                          <div class="image-col col-lg-5 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="image">
                                      <img src="images/resource/featured-image-14.jpg" alt="">
                                  </div>
                              </div>
                          </div>
                          <div class="text-col col-lg-7 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="text">
                                          <p>There are many variations of passages of lorem ipsum available, but
                                              the majority have suffered alteration in some form, by injected
                                              humour, or randomised words which don't look even slightly
                                              believable.</p>
                                          <p class="theme_color">If you are going to use a passage of Lorem Ipsum,
                                              you need to be sure there isn't anything embarrassing hidden in the
                                              middle of text. </p>
                                          <ul>
                                              <li>Self-contained, state-of-the-art time clock</li>
                                              <li>Scalability of up to 500 employees per time clock</li>
                                              <li>The ability to connect up to 32 time clocks</li>
                                              <li>Employee self-enrollment</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!--Tab-->
                  <div class="tab" id="tab-3">
                      <div class="row clearfix">
                          <div class="image-col col-lg-5 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="image">
                                      <img src="images/resource/featured-image-14.jpg" alt="">
                                  </div>
                              </div>
                          </div>
                          <div class="text-col col-lg-7 col-md-6 col-sm-12">
                              <div class="inner">
                                  <div class="content">
                                      <div class="text">
                                          <p>There are many variations of passages of lorem ipsum available, but
                                              the majority have suffered alteration in some form, by injected
                                              humour, or randomised words which don't look even slightly
                                              believable.</p>
                                          <p class="theme_color">If you are going to use a passage of Lorem Ipsum,
                                              you need to be sure there isn't anything embarrassing hidden in the
                                              middle of text. </p>
                                          <ul>
                                              <li>Self-contained, state-of-the-art time clock</li>
                                              <li>Scalability of up to 500 employees per time clock</li>
                                              <li>The ability to connect up to 32 time clocks</li>
                                              <li>Employee self-enrollment</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section> --}}

  <!-- Call To Section -->
  <section class="call-to-section-two alternate">
      <div class="auto-container">
          <div class="inner clearfix">
              <h2 style="font-size: 3rem;margin: 0;line-height: 4rem;">We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
              <div class="link-box" style="padding: 0;">
                  <a class="theme-btn btn-style-two" href="about.html">
                      <i class="btn-curve"></i>
                      <span class="btn-title">Contact with us</span>
                  </a>
              </div>
          </div>
      </div>
  </section>

</div>

@endsection

