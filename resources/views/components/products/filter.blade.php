<div>
    <a href="{{ url('/products') }}"><button>Reset filters</button></a>

    <a href="{{ url('/products') }}?sort=brand_id"><button>Sort by brands</button></a>

    <a href="{{ url('/products') }}?sort=price"><button>Sort by price</button></a>

    <a href="{{ url('/products') }}?sort=name"><button>Sort by name</button></a>
    
    <form method="GET" action="{{ route('products.index') }}">
        <label for="brand">Filter by Brand:</label>
        <select name="filter[brand_id]" id="brand" class="form-control" onchange="this.form.submit()">
            <option value="">All Brands</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ request('filter.brand_id') == $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
        <label for="category">Filter by Category:</label>
        <select name="filter[category_id]" id="category" class="form-control" onchange="this.form.submit()">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('filter.category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>
</div>

