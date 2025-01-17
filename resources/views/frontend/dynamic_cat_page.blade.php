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
                    <form action="/product_category/{{$category->id ?? ''}}" method="get">
                        <aside class="service-sidebar" style="border: 1px solid black;margin:15px;padding:15px;">
                            <div class="filter-section">
                                <h3>Usage Of Panels</h3>
                                <select name="usage_of_panels">
                                    <option value="">Select Panel Usage</option>
                                    <option value="1" @if ($filters['usage_of_panels'] == 1) selected @endif>Wall</option>
                                    <option value="0" @if ($filters['usage_of_panels'] == 0) selected @endif>Ceiling</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Stock Status</h3>
                                <select name="instock">
                                    <option value="">Select Stock Status</option>
                                    <option value="1" @if ($filters['instock'] == 1) selected @endif>InStock</option>
                                    <option value="0" @if ($filters['instock'] == 0) selected @endif>Out Of Stock</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Panel Included</h3>
                                <select name="panel_included">
                                    <option value="">Select Panel Included</option>
                                    <option value="1" @if ($filters['panel_included'] == 1) selected @endif>With Panelling</option>
                                    <option value="0"@if ($filters['panel_included'] == 0) selected @endif>Without Panelling</option>
                                </select>
                            </div>

                            <div class="filter-section">
                                <h3>Length</h3>
                                <select name="length">
                                    <option value="">Select a length</option>
                                    <option value="8" @if ($filters['length'] == 8) selected @endif>8 ft</option>
                                    <option value="9.5" @if ($filters['length'] == 9.5) selected @endif>9.5 ft</option>
                                    <option value="10.0" @if ($filters['length'] == 10.0) selected @endif>10.0 ft</option>
                                </select>
                            </div>
                            <div class="filter-section">
                                <h3>Width</h3>
                                <select name="width">
                                    <option value="">Select a width</option>
                                    <option value="5.0" @if ($filters['width'] == 5.0) selected @endif>5.0 inches</option>
                                    <option value="6.0" @if ($filters['width'] == 6.0) selected @endif>6.0 inches</option>
                                    <option value="6.25" @if ($filters['width'] == 6.25) selected @endif>6.25 inches</option>
                                    <option value="6.50" @if ($filters['width'] == 6.50) selected @endif>6.5 inches</option>
                                    <option value="8.0" @if ($filters['width'] == 8.0) selected @endif>8.0 inches</option>
                                    <option value="10.0" @if ($filters['width'] == 10.0) selected @endif>10.0 inches</option>
                                    <option value="12.0" @if ($filters['width'] == 12.0) selected @endif>12.0 inches</option>
                                    <option value="16.0" @if ($filters['width'] == 16.0) selected @endif>16.0 inches</option>
                                    <option value="48.0" @if ($filters['width'] == 48.0) selected @endif>48 inches</option>
                                </select>
                            </div>
                            <div class="filter-section">
                                <h3>Thickness</h3>
                                <select name="thickness">
                                    <option value="">Select a thickness</option>
                                    <option value="1.2" @if ($filters['thickness'] == 1.2) selected @endif>1.2 mm</option>
                                    <option value="3.0" @if ($filters['thickness'] == 3.0) selected @endif>3.0 mm</option>
                                    <option value="5.5" @if ($filters['thickness'] == 5.5) selected @endif>5.5 mm</option>
                                    <option value="6.0" @if ($filters['thickness'] == 6.0) selected @endif>6.0 mm</option>
                                    <option value="6.5" @if ($filters['thickness'] == 6.5) selected @endif>6.5 mm</option>
                                    <option value="7.0" @if ($filters['thickness'] == 7.0) selected @endif>7.0 mm</option>
                                    <option value="7.5" @if ($filters['thickness'] == 7.5) selected @endif>7.5 mm</option>
                                    <option value="8.5" @if ($filters['thickness'] == 8.5) selected @endif>8.5 mm</option>
                                    <option value="9.5" @if ($filters['thickness'] == 9.5) selected @endif>9.5 mm</option>
                                    <option value="10.0" @if ($filters['thickness'] == 10.0) selected @endif>10.0 mm</option>
                                    <option value="11.0" @if ($filters['thickness'] == 11.0) selected @endif>11.0 mm</option>
                                    <option value="12.0" @if ($filters['thickness'] == 12.0) selected @endif>12.0 mm</option>
                                    <option value="17.0" @if ($filters['thickness'] == 17.0) selected @endif>17.0 mm</option>
                                    <option value="23.0" @if ($filters['thickness'] == 23.0) selected @endif>23.0 mm</option>
                                    <option value="24.0" @if ($filters['thickness'] == 24.0) selected @endif>24.0 mm</option>
                                </select>
                            </div>
                            <div class="filter-section">
                                <h3>Color</h3>
                                <select name="color">
                                    <option value="">Select a Color</option>
                                    <option value="Black" @if ($filters['color'] == 'Black') selected @endif>Black</option>
                                    <option value="White" @if ($filters['color'] == 'White') selected @endif>White</option>
                                    <option value="Red" @if ($filters['color'] == 'Red') selected @endif>Red</option>
                                    <option value="Green" @if ($filters['color'] == 'Green') selected @endif>Green</option>
                                    <option value="Yellow" @if ($filters['color'] == 'Yellow') selected @endif>Yellow</option>
                                    <option value="Blue" @if ($filters['color'] == 'Blue') selected @endif>Blue</option>
                                    <option value="Brown" @if ($filters['color'] == 'Brown') selected @endif>Brown</option>
                                    <option value="Orange" @if ($filters['color'] == 'Orange') selected @endif>Orange</option>
                                    <option value="Pink" @if ($filters['color'] == 'Pink') selected @endif>Pink</option>
                                    <option value="Purple" @if ($filters['color'] == 'Purple') selected @endif>Purple</option>
                                    <option value="Grey" @if ($filters['color'] == 'Grey') selected @endif>Grey</option>
                                </select>
                            </div>
                            <div class="filter-section">
                                <h3>Select Min Price</h3>
                                <label for="customRange1" class="form-label"><span id="sliderValue1">0</span></label>
                                <input type="range" name="min_price" class="form-range"
                                    oninput="updateSliderValue(this.value)" id="slider1" min="1" max="10000">
                            </div>

                            <div class="filter-section">
                                <h3>Select Max Price</h3>
                                <label for="customRange1" class="form-label"><span id="sliderValue2">0</span></label>
                                <input type="range" name="max_price" class="form-range"
                                    oninput="updateSliderValue(this.value)" id="slider2" min="1" max="10000">
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
        var min_price = "{{$filters['min_price'] ?? 1}}";
        var max_price = "{{$filters['max_price'] ?? 1}}";
        // Set initial slider value to 0
        const slider1 = document.getElementById('slider1');
        const sliderValueDisplay1 = document.getElementById('sliderValue1');
        slider1.value = min_price;
        sliderValueDisplay1.textContent = min_price;

        // Update slider value display when the slider value changes
        slider1.addEventListener('input', function () {
            updateSliderValue1(slider1.value);
        });

        const slider2 = document.getElementById('slider2');
        const sliderValueDisplay2 = document.getElementById('sliderValue2');
        slider2.value = max_price;
        sliderValueDisplay2.textContent = max_price;

        // Update slider value display when the slider value changes
        slider2.addEventListener('input', function () {
            updateSliderValue2(slider2.value);
        });
    });

    function updateSliderValue2(value) {
        document.getElementById('sliderValue2').textContent = value;
    }
    function updateSliderValue1(value) {
        document.getElementById('sliderValue1').textContent = value;
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