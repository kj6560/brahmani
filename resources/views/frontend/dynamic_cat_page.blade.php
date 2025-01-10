@extends('layouts.site')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                            <img src="{{asset('storage')}}/{{$category_product->product_banner}}" class="img-fluid"
                                                alt="{{$category_product->product_name ?? ''}}">
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
                    <aside class="service-sidebar" style="border: 1px solid black;margin:2px;padding:5px;">
                        <div class="filter-section">
                            <h3>Category</h3>
                            <label><input type="checkbox"> Electronics</label>
                            <label><input type="checkbox"> Clothing</label>
                            <label><input type="checkbox"> Home & Kitchen</label>
                        </div>

                        <div class="filter-section">
                            <h3>Price Range</h3>
                            <label><input type="radio" name="price" value="low"> $0 - $50</label>
                            <label><input type="radio" name="price" value="mid"> $51 - $200</label>
                            <label><input type="radio" name="price" value="high"> $201 and above</label>
                        </div>

                        <div class="filter-section">
                            <h3>Brand</h3>
                            <select>
                                <option value="">Select a brand</option>
                                <option value="brand1">Brand 1</option>
                                <option value="brand2">Brand 2</option>
                                <option value="brand3">Brand 3</option>
                            </select>
                        </div>

                        <div class="apply-filters">
                            <button>Apply Filters</button>
                        </div>
                    </aside>
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