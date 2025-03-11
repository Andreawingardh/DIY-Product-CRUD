<x-layout>
    <section class="edit-message">
        
    @if (session('message'))
    <p class="session-message">{{ session('message') }}</p>
@endif

        
    <article class="selected-product">
       

        <div class="action-bar">
            <nav>
                <a href="{{ route('products.index') }}" class="back-link">
                    &larr; Back to all products
                </a>
            </nav>

            @if (auth()->check() && auth()->user()->isAdmin())
                <section class="admin-actions">
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
                </section>
            @endif
        </div>
        
        <h1>{{$product->name }}</h1>
        <section class="product-info">
           
            <section class="left-container">
                
            
            
            @if ($product->image_url)
            <div class="selected-product-image-container">
                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="selected-product-detail-image">
            </div>
            @endif
            </section>
            <section class="right-container">
               
                <div class="selected-product-specs">
                    <h2><span>Brand:</span> {{$product->brand->name}}</h2>
                    <p><span>Price:</span> ${{$product->price}}</p>
                    <p><span>Weight:</span> {{$product->weight}}</p>
                    <p><span>Dimensions:</span> {{$product->height}} x {{$product->width}}</p>
                    <p><span>Category:</span> {{$product->category->name}}</p>
                 </div>
            </div>
            </section>
        </section>
    </article>
</x-layout>