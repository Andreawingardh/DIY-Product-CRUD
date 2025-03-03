<x-layout>
    <h1>Edit product</h1>
    <form action="/products/{{$product->id}}/update" method="post">
        @method('PUT')
        <x-products.form :product=$product :categories=$categories :brands=$brands/>
        <button type="submit">Edit product</button>
        </form>
    </x-layout>