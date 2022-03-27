  <!-- Link Swiper's CSS -->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>

<!-- Demo styles -->
<style>
  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .btn {
	 position: relative;
	 width: 155px;
	 height: 50px;
	 margin: 20px;
    }
    .btn a {
        font-weight: 600;
        text-transform: uppercase;
        backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        color: #fff;
        z-index: 1;
        font-weight: 400;
        letter-spacing: 1px;
        text-decoration: none;
        overflow: hidden;
        transition: 0.5s;
        backdrop-filter: blur(15px);
    }
    .btn a:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
        transform: skewX(45deg) translateX(0);
        transition: 0.5s;
    }
    .btn:hover a {
	letter-spacing: 3px;
	transition: 0.5s;
	color: var(--thm-base);
	font-weight: 600;
	text-transform: uppercase;
	backface-visibility: hidden;
    }
    .btn:hover a:before {
        transform: skewX(45deg) translateX(200%);
    }
    .btn:hover:before {
        bottom: 0;
        height: 50%;
        width: 80%;
        border-radius: 30px;
        transition-delay: 0.5s;
    }
    .btn:hover:after {
        top: 0;
        height: 50%;
        width: 80%;
        border-radius: 30px;
        transition-delay: 0.5s;
    }
    .btn:before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -5px;
        width: 30px;
        height: 10px;
        background: rgb(245, 60, 137);
        border-radius: 10px;
        transition: 0.5s;
    }
    .btn:after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: -5px;
        width: 30px;
        height: 10px;
        background: rgb(255, 28, 123);
        border-radius: 10px;
        transition: 0.5s;
    }
    .btn.proj:before, .btn.proj:after {
        background: #ff1f71;
        box-shadow: 0 0 5px #ff1f71, 0 0 15px #ff1f71, 0 0 30px #ff1f71, 0 0 60px #ff1f71;
    }

  
</style>
@extends('layouts.loader')
@section('content')
<main id="main">


  <div class="page-wrapper">

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Portfolio</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-main.html">Home</a></li>
                            <li class="active">Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <!-- Project Single -->
    <section class="project-single">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Images COl -->
                <div class="image-col col-lg-8 col-md-12 col-sm-12">
                    <div class="inner">
                        <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            {{-- {{dd($data)}} --}}
                           @php
                               $property_images = json_decode($data->image, true);
                           @endphp
                           {{-- {{dd($property_images)}}  --}}
                            @foreach ( $property_images as $item)
                        <div class="swiper-slide">
                            <a href="{{ URL::to('/website/images/portfolio_images/'.$item) }}" class="lightbox-image"
                            data-fancybox="gallery"><img src="{{ URL::to('/website/images/portfolio_images/'.$item) }}" alt=""></a>
                        </div>
                        @endforeach 
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    </div>
                </div>

                <!-- Text COl -->
                <div class="text-col col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="text-content">
                            {{-- {{dd($portfolio)}} --}}
                            <h5>{{$data -> name}}</h5>
                            <p>
                                @php
                                echo $data -> description
                                @endphp
                            </p>
                            <ul class="info">
                                <li><strong>Clients:</strong> <br>{{$data -> client}}</li>
                                <li><strong>Category:</strong> <br><?php 
                                  $category_id = $data -> category_id;
                                
                                $PDO = \DB::connection()->getPdo();
                                $QUERY = $PDO->prepare("SELECT * FROM `w_categories` WHERE `id` = '$category_id'");
                                $QUERY->execute();
                                $users=$QUERY->fetchAll(PDO::FETCH_OBJ);
              
                                echo $users[0]->name;
                                    ?></li>
                                <li><strong>Date:</strong> <br>{{$portfolio -> project_date}}</li>
                            </ul>
                            <div class="btn proj">
                                <a href="{{$portfolio -> project_url}}">Have Look!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="post-control">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="control prev"><a href="#"><span class="fa fa-angle-left"></span> &nbsp; Previous</a>
                </div>
                <div class="control next"><a href="#">Next &nbsp;<span class="fa fa-angle-right"></span></a></div>
            </div>
        </div>
    </div>

    <!-- Similar Section -->
    {{-- <section class="gallery-section similar-gallery">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Similar work<span class="dot">.</span></h2>
            </div>
            <div class="row clearfix">
                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                        <a href="images/gallery/4.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                        <a href="images/gallery/5.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span><?php 
                                  $category_id = $portfolio[0] -> category_id;
                                
                                $PDO = \DB::connection()->getPdo();
                                $QUERY = $PDO->prepare("SELECT * FROM `w_categories` WHERE `id` = '$category_id'");
                                $QUERY->execute();
                                $users=$QUERY->fetchAll(PDO::FETCH_OBJ);
              
                                echo $users[0]->name;
                                    ?> </span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">{{$portfolio[0] -> client}}</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                        <a href="images/gallery/6.jpg" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Graphic</span></div>
                                <div class="title">
                                    <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}

</div>
<!--End pagewrapper-->

</main><!-- End #main -->

@endsection 
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
      });
    </script>