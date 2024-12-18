@extends('layouts.site')
@section('content')
<?php

    $sliders = !empty($settings['page_data'])?json_decode($settings['page_data']->page_sliders):[];
?>
<div class="pbmit-slider-area pbmit-slider-one">
    <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false"
        data-columns="1" data-margin="0" data-effect="fade">
        <div class="swiper-wrapper">
            <!-- Slide1 -->
             @foreach ($sliders as $slider)
             <?php $sliderUrl = asset('storage')."/".$slider?>
             <div class="swiper-slide">
                <div class="pbmit-slider-item">
                    <div class="pbmit-slider-bg"
                        style="background-image: url({{$sliderUrl}});">
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

@if (!empty($latest_categories) && count($latest_categories)>0)
<!-- Marquee Start -->
<section class="marquee-one">
    <div class="container-fluid p-0">
        <div class="swiper-slider marquee">
            <div class="swiper-wrapper">
                @foreach ($latest_categories as $cats)
                <article class="pbmit-marquee-effect-style-1 swiper-slide">
                    <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Master Bedroom ">
                            {{$cats->pro_cat_name??''}}
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
            @foreach ($latest_categories as $categories )
            <article class="pbmit-portfolio-style-3 col-md-4 {{$categories->pro_cat_name??''}}">
                <div class="pbminfotech-post-content">
                    <div class="pbmit-featured-img-wrapper">
                        <div class="pbmit-featured-wrapper">
                        <img src="{{asset('storage')}}/{{$categories->pro_cat_image}}"
                        class="img-fluid" alt="{{$categories->pro_cat_name?''}}">
                        </div>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <!-- <div class="pbmit-port-cat">
                                <a href="portfolio-grid-col-3.html" rel="tag"></a>
                            </div> -->
                            <h3 class="pbmit-portfolio-title">
                                <a href="portfolio-detail-style-1.html">{{$categories->pro_cat_name}}</a>
                            </h3>
                        </div>
                    </div>
                    <div class="pbmit-portfolio-btn">
                        <a href="portfolio-detail-style-1.html">
                            <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                        </a>
                    </div>
                    <a class="pbmit-link" href="portfolio-detail-style-1.html"></a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
<!-- Portfolio End -->
@endif



@endsection