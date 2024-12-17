@extends('layouts.site')
@section('content')
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> {{$category->pro_cat_name ?? ""}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">

    <!-- Portfolio Grid col 4 -->
    <section class="section-md">
        <div class="container-fluid px-4">
            <div class="row pbmit-element-posts-wrapper">
                @foreach ($category_products as $category_product)
                    <article class="pbmit-ele-portfolio pbmit-portfolio-style-2 col-md-6 col-lg-3">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{asset('brahmani_frontend_assets')}}/images/portfolio/portfolio-01b.jpg"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-titlebox">
                                    <div class="pbmit-port-cat">
                                        <a href="portfolio-grid-col-3.html" rel="tag">Bedroom</a>
                                    </div>
                                    <h3 class="pbmit-portfolio-title">
                                        <a href="portfolio-detail-style-1.html">Innovation</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Portfolio Grid col 4 End -->

</div>
<!-- Page Content End -->

@endsection