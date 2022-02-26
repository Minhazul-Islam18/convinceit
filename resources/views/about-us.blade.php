@extends('layouts.loader')
@section('content')
    <main>
      <div class="page-wrapper">

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url('https://pngimage.net/wp-content/uploads/2018/05/about-us-banner-png-2.png');background-size: contain;"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>About Us!</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">Home</a></li>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->


        <section class="featured-section featured-section__about-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="image-box"><img src="https://media.istockphoto.com/photos/hand-pressing-about-us-button-picture-id485524142?k=20&m=485524142&s=612x612&w=0&h=l-0DJ5fM1r-Gdw6zLWyQqstPmqY_cIFlijc66n8Fm3U=" alt=""></div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2 style="font-size: 3rem;line-height: 3.6rem;">Get A Quick LookUp at our Services.</br> Reminisce 'ConvinceIT Instiitute'<span class="dot">.</span></h2>
                                
                            </div>
                            <div class="features">
                                <div class="row clearfix">
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <h6 style="font-size: 2rem">Free Consultation</h6>
                                        </div>
                                    </div>
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <h6 style="font-size: 2rem">Best team members</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="team-three team-three__about-two">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2 style="color:black;font-size: 5rem;">Meet the expert team<span class="dot">.</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-card-three">
                            <div class="team-card-three__inner">
                                <div class="team-card-three__image">
                                    <img src="{{ asset('website')}}/images/resource/team-1.jpg" alt="">
                                </div><!-- /.team-card-three__image -->
                                <div class="team-card-three__content">
                                    <h5 class="team-card-three__name">David cooper</h5>
                                    <div class="team-card-three__designation">Co Founder</div>
                                </div><!-- /.team-card-three__content -->
                                <div class="team-card-three__hover">
                                    <h5 class="team-card-three__name">David cooper</h5>
                                    <div class="team-card-three__designation">Co Founder</div>
                                    <ul class="team-card-three__social clearfix m-0 list-unstyled">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div><!-- /.team-card-three__content -->
                            </div><!-- /.team-card-three__inner -->
                        </div><!-- /.team-card-three -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-card-three">
                            <div class="team-card-three__inner">
                                <div class="team-card-three__image">
                                    <img src="{{ asset('website')}}/images/resource/team-2.jpg" alt="">
                                </div><!-- /.team-card-three__image -->
                                <div class="team-card-three__content">
                                    <h5 class="team-card-three__name">Reena Scot</h5>
                                    <div class="team-card-three__designation">Co Founder</div>
                                </div><!-- /.team-card-three__content -->
                                <div class="team-card-three__hover">
                                    <h5 class="team-card-three__name">Reena Scot</h5>
                                    <div class="team-card-three__designation">Co Founder</div>
                                    <ul class="team-card-three__social clearfix m-0 list-unstyled">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div><!-- /.team-card-three__content -->
                            </div><!-- /.team-card-three__inner -->
                        </div><!-- /.team-card-three -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-card-three">
                            <div class="team-card-three__inner">
                                <div class="team-card-three__image">
                                    <img src="{{ asset('website')}}/images/resource/team-3.jpg" alt="">
                                </div><!-- /.team-card-three__image -->
                                <div class="team-card-three__content">
                                    <h5 class="team-card-three__name">Christine eve</h5>
                                    <div class="team-card-three__designation">Manager</div>
                                </div><!-- /.team-card-three__content -->
                                <div class="team-card-three__hover">
                                    <h5 class="team-card-three__name">Christine eve</h5>
                                    <div class="team-card-three__designation">Manager</div>
                                    <ul class="team-card-three__social clearfix m-0 list-unstyled">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div><!-- /.team-card-three__content -->
                            </div><!-- /.team-card-three__inner -->
                        </div><!-- /.team-card-three -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-card-three">
                            <div class="team-card-three__inner">
                                <div class="team-card-three__image">
                                    <img src="{{ asset('website')}}/images/resource/team-4.jpg" alt="">
                                </div><!-- /.team-card-three__image -->
                                <div class="team-card-three__content">
                                    <h5 class="team-card-three__name">John Albert</h5>
                                    <div class="team-card-three__designation">Designer</div>
                                </div><!-- /.team-card-three__content -->
                                <div class="team-card-three__hover">
                                    <h5 class="team-card-three__name">John Albert</h5>
                                    <div class="team-card-three__designation">Designer</div>
                                    <ul class="team-card-three__social clearfix m-0 list-unstyled">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div><!-- /.team-card-three__content -->
                            </div><!-- /.team-card-three__inner -->
                        </div><!-- /.team-card-three -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.auto-container -->
        </section>


        <section class="testimonials-four">
            <div class="auto-container">
                <div class="testimonials-four__block__top">
                    <div class="sec-title">
                        <h2 style="font-size: 3.5rem;line-height: 4rem;">What our customers are
                            talking about<span class="dot">.</span></h2>
                    </div>
                </div><!-- /.testimonials-four__block__top -->
                <div class="testimonials-four-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Sarah albert</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-1.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Mike hardson</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-2.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Shirley Smith</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-3.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Sarah albert</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-1.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Mike hardson</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-2.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Shirley Smith</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-3.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Sarah albert</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-1.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Mike hardson</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-2.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Shirley Smith</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="{{ asset('website')}}/images/resource/author-3.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>

                </div><!-- /.row -->
            </div><!-- /.auto-container -->
        </section>

       


    </div> 

    </main>


@endsection