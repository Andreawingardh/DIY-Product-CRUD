<x-layout>

    <h2>{{$product->name }}</h2>
    <a href="/products/{{$product->id}}/edit"><button>Edit</button></a>
    <h3>Brand: {{$product->brand->name}}</h3>
    <p>The product weighs {{$product->weight}}.</p>
    <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
    <p>Category: {{$product->category->name}}</p>

    <form method="post" action="{{ route('products.destroy', $product)}}">
    @csrf
    @method('DELETE')
    <button>DELETE</button>

    </form>

    
</x-layout>