<x-layout>
    @if (auth()->check() && auth()->user()->isAdmin())
<a href="{{route('products.create')}}">Create new product</a>
@endif

@foreach($products as $product)
    <a href="/products/{{$product->id}}"><h2>{{$product->name }}</h2></a>
    <h3>Brand: {{$product->brand->name}}</h3>
    <p>The product weighs {{$product->weight}}.</p>
    <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
    <p>Category: {{$product->category->name}}</p>

@endforeach

</x-layout>