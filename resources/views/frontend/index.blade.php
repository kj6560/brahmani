@extends('layouts.site')
@section('content')
<?php

$sliders = !empty($settings['page_data']) ? json_decode($settings['page_data']->page_sliders) : [];
?>
<div class="pbmit-slider-area pbmit-slider-one">
    <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false"
        data-columns="1" data-margin="0" data-effect="fade">
        <div class="swiper-wrapper">
            <!-- Slide1 -->
            @foreach ($sliders as $slider)
                <?php    $sliderUrl = asset('storage') . "/" . $slider?>
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg" style="background-image: url({{$sliderUrl}});">
                        </div>
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <div class="pbmit-slider-content">

                                        <div class="pbmit-button transform-bottom-1 transform-delay-3">
                                            <a class="pbmit-btn pbmit-btn-outline" href="/contact_us">
                                                <span class="pbmit-button-content-wrapper">
                                                    <span class="pbmit-button-text">Raise A Query</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="pbmit-slider-dots-corner">
            <div class="pbmit-sticky-corner pbmit-top-right-corner">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg"
                    data-stylerecorder="true">
                    <path d="M20 20V0C20 16 16 20 0 20H20Z" fill="red" data-stylerecorder="true"></path>
                </svg>
            </div>
            <div class="pbmit-sticky-corner pbmit-bottom-left-corner">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="" xmlns="http://www.w3.org/2000/svg"
                    data-stylerecorder="true">
                    <path d="M20 20V0C20 16 16 20 0 20H20Z" fill="red" data-stylerecorder="true"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
<!-- About -->
<section class="section-xl">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-12 col-xl-6">
                <div class="about-one-leftbox">
                    <div class="ihbox-style-area">
                        <div class="pbmit-ihbox-style-12">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-xinterio-icon pbmit-xinterio-icon-award"></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Best Awarded <br>Company </h2>
                                </div>
                                <div class="pbmit-sticky-corner  pbmit-bottom-left-corner">
                                    <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
                                    </svg>
                                </div>
                                <div class="pbmit-sticky-corner pbmit-top-right-corner">
                                    <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="about-one-rightbox">
                    <div class="pbmit-heading-subheading animation-style2">
                        <h4 class="pbmit-subtitle">since 1986</h4>
                        <h2 class="pbmit-title">We design thoughtful, liveable spaces.</h2>
                        <div class="pbmit-heading-desc">
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse
                            ultrices gravida risus commodo viverra maecenas.
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <article class="pbmit-miconheading-style-9">
                                <div class="pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-tools"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Commercial
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="pbmit-miconheading-style-9">
                                <div class="pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-hard-hat"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                industrial
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="pbmit-miconheading-style-9">
                                <div class="pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-offer"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Residential
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="pbmit-miconheading-style-9">
                                <div class="pbmit-ihbox-style-9">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-house-design"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Corporate
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="pbmit-ihbox pbmit-ihbox-style-5 pt-5">
                        <div class="pbmit-ihbox-box d-flex align-items-center">
                            <div class="pbmit-content-wrapper">
                                <h2 class="pbmit-element-title">Jemilin E william</h2>
                                <div class="pbmit-heading-desc">Founder</div>
                            </div>
                            <div class="pbmit-icon-wrapper">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/sign.png" alt="Jemilin E william">
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
<!-- About End -->

<!-- Fid Start -->
<section class="section-lgb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="pbminfotech-ele-fid-style-2">
                    <div class="pbmit-fld-contents">
                        <div class="pbmit-fld-wrap">
                            <div class="pbmit-fid-icon-title">
                                <div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-offer"></i>
                                </div>
                                <span class="pbmit-fid-title">Happy Client Review</span>
                            </div>
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                    data-from="0" data-to="235" data-interval="1" data-before="" data-before-style=""
                                    data-after="" data-after-style="">235</span>
                                <span class="pbmit-fid"><sup>+</sup></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="pbminfotech-ele-fid-style-2">
                    <div class="pbmit-fld-contents">
                        <div class="pbmit-fld-wrap">
                            <div class="pbmit-fid-icon-title">
                                <div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-engineer"></i>
                                </div>
                                <span class="pbmit-fid-title">Work Departments</span>
                            </div>
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                    data-from="0" data-to="420" data-interval="1" data-before="" data-before-style=""
                                    data-after="" data-after-style="">420</span>
                                <span class="pbmit-fid"><sup>+</sup></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="pbminfotech-ele-fid-style-2">
                    <div class="pbmit-fld-contents">
                        <div class="pbmit-fld-wrap">
                            <div class="pbmit-fid-icon-title">
                                <div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-client"></i>
                                </div>
                                <span class="pbmit-fid-title">Our Happy Client</span>
                            </div>
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                    data-from="0" data-to="30" data-interval="1" data-before="" data-before-style=""
                                    data-after="" data-after-style="">30</span>
                                <span class="pbmit-fid"><span>K</span></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="pbminfotech-ele-fid-style-2">
                    <div class="pbmit-fld-contents">
                        <div class="pbmit-fld-wrap">
                            <div class="pbmit-fid-icon-title">
                                <div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xinterio-icon pbmit-xinterio-icon-conversation"></i>
                                </div>
                                <span class="pbmit-fid-title">Staff members</span>
                            </div>
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits"
                                    data-from="0" data-to="305" data-interval="1" data-before="" data-before-style=""
                                    data-after="" data-after-style="">305</span>
                                <span class="pbmit-fid"><sup>+</sup></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fid End -->

<!-- Service Start -->
<section class="pbmit-extend-animation service-one pbmit-bg-color-secondary">
    <div class="container">
        <div class="text-center position-relative">
            <div class="pbmit-heading-subheading text-center animation-style2">
                <h4 class="pbmit-subtitle">What we do</h4>
                <h2 class="pbmit-title">What we offer for you</h2>
            </div>
            <div class="pbmit-service-highlight">
                <h2>Services</h2>
            </div>
        </div>
        <div class="swiper-slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false"
            data-columns="3" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                <!-- Slide1 -->
                <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                    <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-service-image-wrapper">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/service/service-01.jpg" class="img-fluid"
                                            alt="service-01">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-service-icon elementor-icon">
                                <i class=""></i>
                            </div>
                            <div class="pbmit-content-box">
                                <div class="pbmit-serv-cat">
                                    <a href="#" rel="tag">Kitchen</a>
                                </div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Transforming Rooms</a>
                                </h3>
                                <div class="pbmit-service-description">
                                    <p>The interior professional worker’s available in the xinterio</p>
                                </div>
                            </div>
                        </div>
                        <a class="pbmit-service-btn" href="service-details.html" title="Transforming Rooms">
                            <span class="pbmit-button-icon">
                                <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                            </span>
                        </a>
                    </div>
                </article>
                <!-- Slide2 -->
                <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                    <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-service-image-wrapper">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/service/service-02.jpg" class="img-fluid"
                                            alt="service-01">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-service-icon elementor-icon">
                                <i class=""></i>
                            </div>
                            <div class="pbmit-content-box">
                                <div class="pbmit-serv-cat">
                                    <a href="#" rel="tag">Kitchen</a>
                                </div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Weaving Dreams</a>
                                </h3>
                                <div class="pbmit-service-description">
                                    <p>The interior professional worker’s available in the xinterio</p>
                                </div>
                            </div>
                        </div>
                        <a class="pbmit-service-btn" href="service-details.html" title="Weaving Dreams">
                            <span class="pbmit-button-icon">
                                <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                            </span>
                        </a>
                    </div>
                </article>
                <!-- Slide3 -->
                <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                    <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-service-image-wrapper">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/service/service-03.jpg" class="img-fluid"
                                            alt="service-01">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-service-icon elementor-icon">
                                <i class=""></i>
                            </div>
                            <div class="pbmit-content-box">
                                <div class="pbmit-serv-cat">
                                    <a href="#" rel="tag">Kitchen</a>
                                </div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Interior Decorator</a>
                                </h3>
                                <div class="pbmit-service-description">
                                    <p>The interior professional worker’s available in the xinterio</p>
                                </div>
                            </div>
                        </div>
                        <a class="pbmit-service-btn" href="service-details.html" title="Interior Decorator">
                            <span class="pbmit-button-icon">
                                <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                            </span>
                        </a>
                    </div>
                </article>
                <!-- Slide4 -->
                <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                    <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-service-image-wrapper">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/service/service-04.jpg" class="img-fluid"
                                            alt="service-01">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-service-icon elementor-icon">
                                <i class=""></i>
                            </div>
                            <div class="pbmit-content-box">
                                <div class="pbmit-serv-cat">
                                    <a href="#" rel="tag">Kitchen</a>
                                </div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Professional Interior</a>
                                </h3>
                                <div class="pbmit-service-description">
                                    <p>The interior professional worker’s available in the xinterio</p>
                                </div>
                            </div>
                        </div>
                        <a class="pbmit-service-btn" href="service-details.html" title="Professional Interior">
                            <span class="pbmit-button-icon">
                                <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                            </span>
                        </a>
                    </div>
                </article>
                <!-- Slide5 -->
                <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                    <div class="pbminfotech-post-item">
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-service-image-wrapper">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/service/service-05.jpg" class="img-fluid"
                                            alt="service-01">
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-service-icon elementor-icon">
                                <i class=""></i>
                            </div>
                            <div class="pbmit-content-box">
                                <div class="pbmit-serv-cat">
                                    <a href="#" rel="tag">Kitchen</a>
                                </div>
                                <h3 class="pbmit-service-title">
                                    <a href="service-details.html">Interior Work Plan</a>
                                </h3>
                                <div class="pbmit-service-description">
                                    <p>The interior professional worker’s available in the xinterio</p>
                                </div>
                            </div>
                        </div>
                        <a class="pbmit-service-btn" href="service-details.html" title="Interior Work Plan">
                            <span class="pbmit-button-icon">
                                <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                            </span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
        <div class="text-center">
            <div class="pbmit-service-text">
                <p>Need more services based on your demand? <span class="pbmit-globalcolor">Contact us</span></p>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->

<!-- Ihbox Start -->
<section class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">since 1986</h4>
                    <h2 class="pbmit-title">Why choose us</h2>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="pbmit-heading-desc">
                    There are many variations of passages of form, by injected humour, or <br> randomised words which
                    don’t look even.
                </div>
            </div>
            <div class="col-md-12 col-xl-2">
                <a class="pbmit-btn pbmit-btn-outline" href="contact-us.html">
                    <span class="pbmit-button-content-wrapper">
                        <span class="pbmit-button-text">Book Consult</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-3 ihbox-one-left-col">
                <div class="row">
                    <article class="pbmit-miconheading-style-8 col-md-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xinterio-icon pbmit-xinterio-icon-stairs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        5 Years Warranty
                                    </h2>
                                    <div class="pbmit-heading-desc">We offer competitive and affordable rates for our
                                        interior design .</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-8 col-md-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xinterio-icon pbmit-xinterio-icon-3d"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Latest technologies
                                    </h2>
                                    <div class="pbmit-heading-desc">We offer competitive and affordable rates for our
                                        interior design .</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-8 col-md-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xinterio-icon pbmit-xinterio-icon-kitchen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        High-Quality Designs
                                    </h2>
                                    <div class="pbmit-heading-desc">We offer competitive and affordable rates for our
                                        interior design .</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-6 ihbox-one-img-col">
                <div class="ihbox-imgbox">
                    <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/ih-single-img-01.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-3 ihbox-one-right-col">
                <div class="row">
                    <article class="pbmit-miconheading-style-8 col-md-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xinterio-icon pbmit-xinterio-icon-axis"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Transparent Pricing
                                    </h2>
                                    <div class="pbmit-heading-desc">We offer competitive and affordable rates for our
                                        interior design .</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-8 col-md-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xinterio-icon pbmit-xinterio-icon-brickwall-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Professional Team
                                    </h2>
                                    <div class="pbmit-heading-desc">We offer competitive and affordable rates for our
                                        interior design .</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="pbmit-miconheading-style-8 col-md-12">
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box d-flex">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-xinterio-icon pbmit-xinterio-icon-pantone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Award winning
                                    </h2>
                                    <div class="pbmit-heading-desc">We offer competitive and affordable rates for our
                                        interior design .</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ihbox End -->
@if (!empty($latest_categories) && count($latest_categories) > 0)
    <!-- Marquee Start -->
    <section class="marquee-one">
        <div class="container-fluid p-0">
            <div class="swiper-slider marquee">
                <div class="swiper-wrapper">
                    @foreach ($latest_categories as $cats)
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="{{$cats->pro_cat_name ?? ''}}">
                                    {{$cats->pro_cat_name ?? ''}}
                                </h2>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Marquee End -->
    <!-- Portfolio Start -->
    <section class="pbmit-bg-color-light portfolio-one pbmit-sortable-yes">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-xl-4">
                    <div class="pbmit-heading-subheading animation-style2">
                        <h2 class="pbmit-title">Our Latest Products</h2>
                    </div>
                </div>
                <!-- <div class="col-md-12 col-xl-8">
                    <div class="pbmit-sortable-list">
                        <ul class="pbmit-sortable-list-ul">
                            <li><a href="#" class="pbmit-sortable-link pbmit-selected" data-category="*"
                                    data-sortby="*">All</a></li>
                            <li><a href="#" class="pbmit-sortable-link" data-sortby="architecture">Architecture</a></li>
                            <li><a href="#" class="pbmit-sortable-link" data-sortby="bedroom">Bedroom</a></li>
                            <li><a href="#" class="pbmit-sortable-link" data-sortby="furniture">Furniture</a>
                            </li>
                            <li><a href="#" class="pbmit-sortable-link" data-sortby="interior">Interior</a></li>
                            <li><a href="#" class="pbmit-sortable-link" data-sortby="kitchen">Kitchen</a></li>
                        </ul>
                    </div> -->
            </div>
        </div>
        <div class="row pbmit-element-posts-wrapper">
            @foreach ($latest_categories as $categories)
                <article class="pbmit-portfolio-style-3 col-md-4 {{$categories->pro_cat_name ?? ''}}">
                    <div class="pbminfotech-post-content">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{asset('storage')}}/{{$categories->pro_cat_image}}" class="img-fluid"
                                    alt="{{$categories->pro_cat_name ?? ''}}">
                            </div>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbminfotech-titlebox">
                                <!-- <div class="pbmit-port-cat">
                                        <a href="portfolio-grid-col-3.html" rel="tag"></a>
                                    </div> -->
                                <h3 class="pbmit-portfolio-title">
                                    <a href="/product_category/{{$categories->id}}">{{$categories->pro_cat_name}}</a>
                                </h3>
                            </div>
                        </div>
                        <div class="pbmit-portfolio-btn">
                            <a href="/product_category/{{$categories->id}}">
                                <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                            </a>
                        </div>
                        <a class="pbmit-link" href="/product_category/{{$categories->id}}"></a>
                    </div>
                </article>
            @endforeach
        </div>
        </div>
    </section>
    <!-- Portfolio End -->
@endif



@endsection