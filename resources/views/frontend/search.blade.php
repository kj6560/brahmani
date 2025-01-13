<style>
    .body {
        font-family: Arial, sans-serif;
        margin: 20px;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .filters {
        width: 25%;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
    }

    .products {
        width: 75%;
        display: flex;
        flex-direction: column;
        gap: 20px;
        max-height: 500px;
        overflow-y: auto;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
    }

    .product {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-sizing: border-box;
    }

    .product img {
        max-width: 100%;
        height: auto;
        display: block;
        margin-bottom: 10px;
    }

    .product h3 {
        font-size: 18px;
        margin: 0 0 10px;
    }

    .product p {
        margin: 5px 0;
    }
    .applied-filters {
        margin-bottom: 20px;
    }

    .applied-filters span {
        display: inline-block;
        background-color: #f1f1f1;
        padding: 5px 10px;
        margin-right: 10px;
        border-radius: 5px;
    }

    .applied-filters span a {
        margin-left: 10px;
        color: red;
        text-decoration: none;
    }
</style>
<div class="body">
<div class="applied-filters" id="applied-filters">
        <h6>Applied Filters:</h6>
        <!-- Applied filters will be listed here -->
    </div>
    <div class="filters">
        <h2>Filters</h2>
        <label for="category">Category:</label>
        <select id="category" onchange="filterProducts()">
            <option value="all">All</option>
            @foreach ($settings['product_categories'] as $cat)
                <option value="{{$cat->pro_cat_name}}">{{$cat->pro_cat_name}}</option>
            @endforeach
        </select>

        <label for="price">Price Range:</label>
        <select id="price" onchange="filterProducts()">
            <option value="all">All</option>
            <option value="low">Below ₹ 50</option>
            <option value="mid">₹50 - ₹100</option>
            <option value="high">Above ₹100</option>
        </select>
    </div>

    <div class="products" id="product-list">
        @if(isset($settings['search']))
            @foreach ($settings['search'] as $pro)
                <div class="product" data-category="{{$pro->category_name}}" data-price="{{$pro->product_price ?? ""}}">
                    <img height="100px" width="100px" src="{{asset('storage')}}/{{$pro->product_banner ?? ''}}"
                        alt="{{$pro->product_name ?? ''}}">
                    <h3>{{$pro->product_name ?? ""}}</h3>
                    <p>Category: {{$pro->category_name ?? ""}}</p>
                    <p>Price: {{$pro->product_price ?? ""}}</p>
                    <div class="mt-3">
                        <button class="btn btn-success" id="wishlist" onclick="processWishlist({{$pro->id}})">Add to
                            Wishlist</button>
                        <a class="btn btn-secondary " href="/products/{{$pro->id ?? 1}}">See Details</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>


<script>
    const urlParams = new URLSearchParams(window.location.search);
    console.log(urlParams.get('s'));
    document.getElementById('category').value = urlParams.get('category') ?? 'all';
    document.getElementById('price').value =urlParams.get('price') ?? 'all';
    function filterProducts() {
        const categoryFilter = document.getElementById('category').value;
        const priceFilter = document.getElementById('price').value;
        const products = document.querySelectorAll('.product');
        console.log(categoryFilter, priceFilter);
        console.log(window.location.href);
        window.location.href = "?s=" + urlParams.get('s') + `&category=${categoryFilter}&price=${priceFilter}`;
    }
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const appliedFiltersContainer = document.getElementById('applied-filters');

        // List all applied filters
        urlParams.forEach((value, key) => {
            if (key !== 's' && value !='all') { // Ensure 's' filter cannot be removed
                const filterElement = document.createElement('span');
                filterElement.innerHTML = `${key}: ${value} <a href="#" data-key="${key}" data-value="${value}">&times;</a>`;
                appliedFiltersContainer.appendChild(filterElement);
            }
        });

        // Remove filter when clicking on the remove link
        appliedFiltersContainer.addEventListener('click', function(event) {
            if (event.target.tagName === 'A') {
                event.preventDefault();
                const key = event.target.getAttribute('data-key');
                urlParams.delete(key);
                window.location.search = urlParams.toString();
            }
        });
    });
</script>