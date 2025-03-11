<section class="product-filters">
    <div class="filter-row">
      <div class="sort-options">
        <a href="{{ url('/products') }}?sort=brand_id">Sort by brands</a>
        <a href="{{ url('/products') }}?sort=price">Sort by price</a>
        <a href="{{ url('/products') }}?sort=name">Sort by name</a>
        <a href="{{ url('/products') }}" class="reset-link">Reset filters</a>
      </div>
    </div>
    
    <form method="GET" action="{{ route('products.index') }}" class="filter-form">
      <div class="filter-group">
        <label for="brand">Filter by Brand:</label>
        <select name="filter[brand_id]" id="brand" class="diy-select" onchange="this.form.submit()">
          <option value="">All Brands</option>
          @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ request('filter.brand_id') == $brand->id ? 'selected' : '' }}>
              {{ $brand->name }}
            </option>
          @endforeach
        </select>
      </div>
      
      <div class="filter-group">
        <label for="category">Filter by Category:</label>
        <select name="filter[category_id]" id="category" class="diy-select" onchange="this.form.submit()">
          <option value="">All Categories</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('filter.category_id') == $category->id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>
    </form>
  </section>