<x-layout>
    <div class="diy-content">
        <main>
            <article class="product-detail">
                <header>
                    <h1>{{$product->name }}</h1>
                </header>
                
                <section class="product-info">
                    <h2>Brand: {{$product->brand->name}}</h2>
                    
                    @if ($product->image_url)
                    <div class="product-image-container">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="product-detail-image">
                    </div>
                @endif
                    <div class="product-specs">
                        <p>The product weighs {{$product->weight}}.</p>
                        <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
                        <p>Category: <span class="category-name">{{$product->category->name}}</span></p>
                    </div>
                </section>

                @if (auth()->check() && auth()->user()->isAdmin())
                    <div class="admin-actions">
                        <a href="/products/{{$product->id}}/edit">
                            <button class="edit-button">
                                Edit
                            </button>  
                        </a>

                        <form method="post" action="{{ route('products.destroy', $product)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" 
                                onclick="return confirm('Are you sure you want to delete this product?')">
                                Delete
                            </button>
                        </form>
                    </div>
                @endif
                
                <footer>
                    <a href="{{ route('products.index') }}" class="back-link">
                        &larr; Back to all products
                    </a>
                </footer>
            </article>
        </main>
    </div>
</x-layout>