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

<form method="GET" action="{{ url()->current() }}" id="filter-form" style="float: right; display: flex; align-items: center;margin-right:100px;">
<i class="fa-solid fa-filter"></i>
    <select name="filter" class="form-control" style="width: auto; margin-top: 20px;" onchange="handleFilterChange(this)">
        <option value="">Filters</option>
        <option value="price">Price</option>
        <option value="category">Category</option>
        <option value="in_st">In Stock</option>
        <option value="wi_pa">With Panelling</option>
        <option value="wiot_pa">Without Panelling</option>
    </select>
    <select id="price-filter" name="price" class="form-control" style="width: auto; margin-top: 20px; display: none;" onchange="this.form.submit()">
        <option value="">Select Price</option>
        <option value="p1">300 - 600</option>
    </select>
    <select id="category-filter" name="category" class="form-control" style="width: auto; margin-top: 20px; display: none;" onchange="this.form.submit()">
        <option value="">Select Category</option>
        <option value="electronics">Electronics</option>
        <option value="fashion">Fashion</option>
    </select>
</form>


<!-- Filters End -->
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
    </section>
    <!-- Portfolio Grid col 4 End -->

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
        }else{
            document.getElementById('filter-form').submit();
        }
    }
</script>
@endsection