<x-layout>

<h2>create product</h2>


<x-errors/>

<form  method="post" action="{{ route('products.store') }}">
<x-products.form />
<button type="submit">Create new product</button>
</form>

</x-layout>