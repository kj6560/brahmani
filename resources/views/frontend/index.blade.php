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
                                    <h2 class="pbmit-element-title">Best <br>Supplier </h2>
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
                        <h4 class="pbmit-subtitle">Trusted Name</h4>
                        <h2 class="pbmit-title">PVC Panels and PVC Louver Suppliers in Vadodara.</h2>
                        <div class="pbmit-heading-desc">
                            <p>PVC Panels and PVC Louver Suppliers in Vadodara
                                We have a renowned brand named- Krock India Gypsum that has made it's place in the
                                market as the leading company to provide a
                                range of construction items. Incase you are looking for a reliable brand that has a
                                history of durability then consider Krock
                                India Gypsum , is the most sturdy Gypsum Board Suppliers in Vadodara, is your trusted
                                source for everything you need to build,
                                renovate, or repair. We started out as a construction essential giving company and still
                                staying to our roots we have advanced
                                our portfolio to a massive number of items that we provide to our customers. Our goal at
                                our company is simple: to provide
                                top-quality construction essentials at prices that won't exceed your budget. We believe
                                that everyone should have access to the
                                tools and materials they need to bring their construction projects to life. No matter
                                what you need for all your construction
                                essentials may it is screws or floor or tile protection sheets you can trust that our
                                tools and materials will stand up to the toughest jobs.

                                We are the most durable Gypsum Ceiling Trader in Gujarat. We know construction can be
                                expensive. That's why we work hard to keep
                                our prices affordable, so you can get the job done without emptying your wallet. Our
                                website is designed with simplicity in mind.
                                Browse our wide range of products and place your order with ease, any time of day or
                                night. We'll deliver your order to your doorstep,
                                so you can focus on your project without the hassle of transportation.
                                We have been the most lasting Gypsum Board Ceiling exporters in Gujarat. Stay safe on
                                the job with our range of safety gear and equipment.
                                Your well-being is our priority. If you are looking for this kind of product or
                                materials then do consider us. We would love to serve you
                                the best. Give us a chance to experience the difference of shopping with us. Build with
                                confidence – start today!
                            </p>
                        </div>
                    </div>
                    <!-- <div class="row g-3">
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
                    </div> -->
                    <!-- <div class="pbmit-ihbox pbmit-ihbox-style-5 pt-5">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ihbox Start -->
<section class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">industry Leader</h4>
                    <h2 class="pbmit-title">Why choose us</h2>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="pbmit-heading-desc">
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
                                            <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/other/Fire-Resistance.png"
                                                class="pbmit-xinterio-icon pbmit-xinterio-icon-3d"></img>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Fire Resistance
                                    </h2>
                                    <div class="pbmit-heading-desc">Fire-resistant materials prevent ignition and slow
                                        fire spread for safety.</div>
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
                                            <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/other/Cost-Effective.png"
                                                class="pbmit-xinterio-icon pbmit-xinterio-icon-stairs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Cost Effective
                                    </h2>
                                    <div class="pbmit-heading-desc">Budget-friendly solutions offering value without
                                        compromising quality or performance.</div>
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
                                            <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/other/Durability.png"
                                                class="pbmit-xinterio-icon pbmit-xinterio-icon-stairs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Durability
                                    </h2>
                                    <div class="pbmit-heading-desc">High durability ensures long-lasting performance and
                                        resilience in challenging conditions.</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-6 ihbox-one-img-col">
                <div class="ihbox-imgbox">
                    <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/ih-single-img-01.png"
                        class="img-fluid" alt="">
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
                                            <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/other/Versatility.png"
                                                class="pbmit-xinterio-icon pbmit-xinterio-icon-stairs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Versatility
                                    </h2>
                                    <div class="pbmit-heading-desc">Versatile design adapts to various needs, ensuring
                                        flexible functionality.</div>
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
                                            <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/other/Easy-Installation.png"
                                                class="pbmit-xinterio-icon pbmit-xinterio-icon-stairs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Easy Installation
                                    </h2>
                                    <div class="pbmit-heading-desc">Simple installation process for quick and
                                        hassle-free setup convenience.</div>
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
                                            <img src="{{asset('brahmani_frontend_assets')}}/images/homepage-1/other/Sound-Insulation.png"
                                                class="pbmit-xinterio-icon pbmit-xinterio-icon-stairs"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">
                                        Sound Insulation
                                    </h2>
                                    <div class="pbmit-heading-desc">Materials dampen sound, enhancing privacy and
                                        reducing noise for comfort.</div>
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

            </div>
        </div>
        <div class="row pbmit-element-posts-wrapper">
            @foreach ($latest_categories as $categories)
                <article class="pbmit-portfolio-style-3 col-md-4 {{$categories->pro_cat_name ?? ''}}">
                    <div class="pbminfotech-post-content">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{asset('storage')}}/{{$categories->pro_cat_image}}" class="img-fluid"
                                    alt="{{$categories->pro_cat_name ?? ''}}" style="max-height: 400px; width: auto;">
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
<!-- Contact Form -->
<section class="pbmit-sticky-section">
    <div class="container">
        <div class="contact-us-bg">
            <div class="row">
                <div class="col-md-12 col-xl-5">
                    <div class="pbmit-sticky-col">
                        <div class="contact-us-left-area">
                            <div class="pbmit-heading-subheading animation-style2">
                                <h4 class="pbmit-subtitle">Contact Us</h4>
                                <h2 class="pbmit-title">Happy to answer all your questions</h2>
                                <div class="pbmit-heading-desc">
                                    <p>Our team is here to help you with any questions you may have. Fill out the form
                                    and we will get back to you as soon as possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-7">
                    <div class="contact-form-area">
                        <div class="pbmit-heading animation-style2">
                            <h2 class="pbmit-title">Send a Message</h2>

                        </div>
                        <form class="contact-form" method="post" action="/storeQuery">
                            @csrf
                            <div style="display: none;">
                                <input type="text" name="address" value="">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" cols="40" rows="10" class="form-control" id="message"
                                        placeholder="" required>{{old('message') ?? ""}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name *" name="name"
                                        value="{{old('name') ?? ''}}" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" name="phone"
                                        value="{{old('phone') ?? ''}}" required>
                                </div>


                                <div class="col-md-12">
                                    <button class="pbmit-btn pbmit-btn-outline">
                                        <i
                                            class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-text">Submit Now</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-12 col-lg-12 message-status"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form -->


<!-- Iframe -->
<section class="section-xl">
    <div class="container-fluid">
        <div class="iframe-area">
            <iframe
                src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
        </div>
    </div>
</section>
@endsection
@section('custom_javascript')
<script>
    const textarea = document.getElementById('message');
    const placeholderText = `To Get Best Quotes describe your requirements in detail like:
- What are you looking for
-Features / Specifications
-Application / Usage
-Minimum Order Quantity etc.
`;

    textarea.value = placeholderText;

    textarea.addEventListener('focus', () => {
        if (textarea.value === placeholderText) {
            textarea.value = ''; // Clear placeholder text on focus
        }
    });

    textarea.addEventListener('blur', () => {
        if (textarea.value.trim() === '') {
            textarea.value = placeholderText; // Restore placeholder text if empty
        }
    });
</script>
@endsection