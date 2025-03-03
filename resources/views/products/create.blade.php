<x-layout>

<h2>create product</h2>

@if ($errors->any())

    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
    

<form action="/products/store" method="post">
<x-products.form :categories=$categories :brands=$brands />
<button type="submit">Create new product</button>
</form>

</x-layout>