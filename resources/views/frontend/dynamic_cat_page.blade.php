@extends('layouts.site')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .img-fluid {
        width: 392px !important;
        height: 435px;
        padding: 30px;
        object-fit: cover;
    }

    .pagination-nav {
        display: flex;
        justify-content: space-between;
        padding: 20px 0;
    }

    .pagination {
        list-style: none;
        display: flex;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    .filter-form {
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .filter-section {
        margin-bottom: 20px;
    }

    .filter-section h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .filter-section label {
        display: block;
        margin: 5px 0;
        font-size: 14px;
    }

    .filter-section input[type="checkbox"],
    .filter-section input[type="radio"] {
        margin-right: 10px;
    }

    .filter-section select {
        width: 100%;
        padding: 8px;
        margin-top: 10px;
    }

    .apply-filters {
        margin-top: 20px;
    }

    .apply-filters button {
        width: 100%;
        padding: 10px;
        background-color: rgb(47, 78, 24);
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    .apply-filters button:hover {
        background-color: #0056b3;
    }
</style>

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
<!-- Filters -->




<!-- Filters End -->
<!-- Page Content -->
<div class="page-content">

    <!-- Service Details -->
    <section class="site-content service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 service-right-col">
                    <div class="container-fluid px-4">
                        <div class="row pbmit-element-posts-wrapper">
                            @foreach ($category_products as $category_product)
                                <article class="pbmit-ele-portfolio pbmit-portfolio-style-2 col-md-6 col-lg-4">
                                    <div class="pbminfotech-post-content">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{asset('storage')}}/{{$category_product->product_banner}}"
                                                    class="img-fluid" alt="{{$category_product->product_name ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <div class="pbminfotech-titlebox">
                                                <div class="pbmit-port-cat">
                                                    <h2><a href="/products/{{$category_product->id}}"
                                                            rel="tag">{{$category_product->product_name ?? ""}}</a></h2>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <!-- Render pagination links -->
                        <div class="pagination-wrapper">
                            {{ $category_products->appends(request()->query())->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 service-left-col sidebar">
                    <form action="/product_category/{{$category->id ?? ""}}" method="get">
                        <aside class="service-sidebar" style="border: 1px solid black;margin:15px;padding:15px;">
                            <div class="filter-section">
                                <h3>Usage Of Panels</h3>
                                <select name="usage_of_panels">
                                    <option value="">Select Panel Usage</option>
                                    <option value="1">Wall</option>
                                    <option value="0">Ceiling</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Stock Status</h3>
                                <select name="instock">
                                    <option value="">Select Stock Status</option>
                                    <option value="1">InStock</option>
                                    <option value="0">Out Of Stock</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Panel Included</h3>
                                <select name="panel_included">
                                    <option value="">Select Panel Included</option>
                                    <option value="1">With Panelling</option>
                                    <option value="0">Without Panelling</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Length</h3>
                                <select name="length">
                                    <option value="">Select a length</option>
                                    <option value="8">8 ft</option>
                                    <option value="9.5">9.5 ft</option>
                                    <option value="10.0">10.0 ft</option>
                                </select>
                            </div>
                            <div class="filter-section">
                                <h3>Width</h3>
                                <select name="width">
                                    <option value="">Select a width</option>
                                    <option value="5.0">5.0 inches</option>
                                    <option value="6.0">6.0 inches</option>
                                    <option value="6.25">6.25 inches</option>
                                    <option value="6.50">6.5 inches</option>
                                    <option value="8.0">8.0 inches</option>
                                    <option value="10.0">10.0 inches</option>
                                    <option value="12.0">12.0 inches</option>
                                    <option value="16.0">16.0 inches</option>
                                    <option value="48">48 inches</option>
                                </select>
                            </div>
                            <div class="filter-section">
                                <h3>Thickness</h3>
                                <select name="thickness">
                                    <option value="">Select a thickness</option>
                                    <option value="1.2">1.2 mm</option>
                                    <option value="3.0">3.0 mm</option>
                                    <option value="5.5">5.5 mm</option>
                                    <option value="6.0">6.0 mm</option>
                                    <option value="6.5">6.5 mm</option>
                                    <option value="7.0">7.0 mm</option>
                                    <option value="7.5">7.5 mm</option>
                                    <option value="8.5">8.5 mm</option>
                                    <option value="9.5">9.5 mm</option>
                                    <option value="10.0">10.0 mm</option>
                                    <option value="11.0">11.0 mm</option>
                                    <option value="12.0">12.0 mm</option>
                                    <option value="17.0">17.0 mm</option>
                                    <option value="23.0">23.0 mm</option>
                                    <option value="24.0">24.0 mm</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Select Min Price</h3>
                                <label for="customRange1" class="form-label"><span id="sliderValue">0</span></label>
                                <input type="range" name="min_price" class="form-range"
                                    oninput="updateSliderValue(this.value)" id="customRange1" min="1" max="10000">
                            </div>

                            <div class="filter-section">
                                <h3>Select Max Price</h3>
                                <label for="customRange1" class="form-label"><span id="sliderValue">0</span></label>
                                <input type="range" name="max_price" class="form-range"
                                    oninput="updateSliderValue(this.value)" id="customRange1" min="1" max="10000">
                            </div>

                            <div class="apply-filters">
                                <button>Apply Filters</button>
                            </div>
                        </aside>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- Service Details End -->
</div>
<!-- Page Content End -->

@endsection
@section('custom_javascript')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Set initial slider value to 0
        const slider = document.getElementById('price-slider');
        const sliderValueDisplay = document.getElementById('sliderValue');
        slider.value = 0;
        sliderValueDisplay.textContent = 0;

        // Update slider value display when the slider value changes
        slider.addEventListener('input', function () {
            updateSliderValue(slider.value);
        });
    });

    function updateSliderValue(value) {
        document.getElementById('sliderValue').textContent = value;
    }

    function handleFilterChange(select) {
        document.getElementById('price-filter').style.display = 'none';
        document.getElementById('category-filter').style.display = 'none';

        if (select.value === 'price') {
            document.getElementById('price-filter').style.display = 'block';
        } else if (select.value === 'category') {
            document.getElementById('category-filter').style.display = 'block';
        } else {
            document.getElementById('filter-form').submit();
        }
    }
</script>
@endsection