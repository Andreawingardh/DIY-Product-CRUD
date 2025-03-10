<x-layout>

    <h2>{{$product->name }}</h2>
    
    @if  (auth()->check() && auth()->user()->isAdmin())<a href="/products/{{$product->id}}/edit">
       <button>Edit</button>
        
    </a>
    @endif
    <h3>Brand: {{$product->brand->name}}</h3>
    <p>The product weighs {{$product->weight}}.</p>
    <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
    <p>Category: {{$product->category->name}}</p>

    <form method="post" action="{{ route('products.destroy', $product)}}">
    @csrf
    @if (auth()->check() && auth()->user()->isAdmin())
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
@endif
    </form>

    
</x-layout>