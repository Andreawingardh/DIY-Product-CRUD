<x-layout>

    <h2>{{$product->name }}</h2>
    <h3>Brand: {{$product->brand->name}}</h3>
    <p>The product weighs {{$product->weight}}.</p>
    <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
    <p>Category: {{$product->category->name}}</p>

    
</x-layout>