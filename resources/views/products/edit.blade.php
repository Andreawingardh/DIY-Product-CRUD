<x-layout>
    <h1>Edit product</h1>

    <x-errors />


    <form action="{{route('products.update', $product)}}" method="post">
        @method('PATCH')
        
        <x-products.form :product=$product :categories=$categories :brands=$brands/>

        <button type="submit">Edit product</button>

        </form>

    </x-layout>