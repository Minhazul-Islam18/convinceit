@extends('layouts.loader')
@section('content')

    <div class="page-wrapper">
        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url('https://www.moqdigital.com/hubfs/Apps%20hubspot%20size.png');"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>App Development</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li class="active">App Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="service-details">
                            <div class="main-image image">
                                <img src="{{ asset('website')}}/images/resource/frontend_webdeveloper.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h3>App Development</h3>
                                <p>Need something changed or is there something not quite working the way you envisaged?
                                    Is your van a little old and tired and need refreshing? Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book. It has survived not only five
                                    centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.</p>
                                <div class="featured">
                                    <div class="row clearfix">
                                        <div class="image-col col-md-6 col-sm-12">
                                            <div class="image">
                                                <<img src="{{ asset('website')}}/images/resource/featured-image-17.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="text-col col-md-6 col-sm-12">
                                            <div class="inner">
                                                <h4>planning & strategy</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                                <ul>
                                                    <li>Research beyond the business plan</li>
                                                    <li>Marketing options and rates</li>
                                                    <li>The ability to turnaround consulting</li>
                                                    <li>Customer engagement matters</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Need something changed or is there something not quite working the way you envisaged?
                                    Is your van a little old and tired and need refreshing? Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book. It has survived not only five
                                    centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.</p>
                                <p class="last">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">

                            <div class="sidebar-widget services">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>All Services</h4>
                                    </div>
                                    <ul>
                                        <li><a href="/web-dev">Website Development</a></li>
                                        <li><a href="/graphic-designing">Graphic Designing</a></li>
                                        <li><a href="/digital-marketing">Digital Marketing</a></li>
                                        <li><a href="/seo">SEO & Content Writting</a></li>
                                        <li class="active"><a href="/app-development">App Development</a></li>
                                        <li><a href="/uiux-design">UI/UX Designing</a></li>
                                    </ul>
                                </div>
                            </div>

                            
                            <div class="sidebar-widget call-up">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>need Trouble-free help?</h4>
                                    </div>
                                    <div class="text">Prefer speaking with a human to filling out a form? call corporate
                                        office and we will connect you with a team member who can help.</div>
                                    <div class="phone"><a href="tel:+8801935710706"><span class="icon flaticon-call"></span>
                                        01935710706</a></div>
                                </div>
                            </div>


                        </aside>
                    </div>

                </div>
            </div>
        </div>

        <!-- Call To Section -->
        <section class="call-to-section-two alternate">
            <div class="auto-container">
                <div class="inner clearfix">
                    <h2 style="font-size: 3.5rem;margin: 0;line-height: 4rem;">We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="/about">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Contact with us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection