<x-layout>
    <h1>Edit product</h1>

    <form action="{{route('products.update', $product)}}" method="post">
        @method('PATCH')
        

        <x-products.form :product=$product />

        <button type="submit">Edit product</button>

        </form>

    </x-layout>