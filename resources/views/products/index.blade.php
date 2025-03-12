<x-app-layout>
    <section class="feedback-message">
        
        @if (session('message'))
        <p class="session-message">{{ session('message') }}</p>
    @endif
        </section>
    <section class="products-page">
        <div class="page-title-area">
            <h1 class="page-title">Products</h1>
            {{-- @if (auth()->check() && auth()->user()->isAdmin())
                <a href="{{ route('products.create') }}" class="diy-create-button">
                    Create new product
                </a>
            @endif --}}
           
        </div>

        <x-products.filter :products=$products :brands=$brands :categories=$categories />
    
        <section class="products-grid">
            @foreach($products as $product)
                <article class="product-card">
                    <a href="/products/{{$product->id}}" class="product-link">
                        <div class="product-content">
                            <h2>{{$product->name }}</h2>
                            @if ($product->image_url)
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="product-image">
                            @endif
                            <p class="product-price">${{$product->price}}</p>
                            <h3><span>Brand:</span> {{$product->brand->name}}</h3>
                            <div class="product-details">
                                <p><span>Weight:</span> {{$product->weight}}</p>
                                <p><span>Dimensions:</span> {{$product->height}} x {{$product->width}}</p>
                                <p class="product-category"><span>Category:</span> {{$product->category->name}}</p>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
         </section>
        {{ $products->links() }}
    </section>
    

</x-app-layout>