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

    <!-- Portfolio Detail Style 2 -->
    <section class="site-content">
        <div class="container">
            <article class="portfolio-single">
                <div class="pbmit-entry-content">
                    <div class="pbmit-heading animation-style2">
                        <h2 class="pbmit-title">Overview</h2>
                    </div>
                    <p>{{$category->pro_cat_description ?? ""}}</p>

                    <div class="pf-img-box mt-4">
                          
                            <div class="row">
                            @foreach ($category_products as $category_product)
                                <div class="col-md-6">
                                    <div class="pbmit-animation-style1 me-md-3 first-img">
                                        <img src="{{asset('brahmani_frontend_assets')}}/images/portfolio/portfolio-detail-01.jpg"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        

                    </div>

                </div>

            </article>
        </div>
    </section>
    <!-- Portfolio Detail Style 2 End -->

</div>
<!-- Page Content End -->

@endsection