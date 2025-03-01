<x-layout>
    <h1>Edit product</h1>
    <form action="/products/update" method="post">
        <x-products.form :product=$product />
        <button type="submit">Edit product</button>
        </form>
    </x-layout>