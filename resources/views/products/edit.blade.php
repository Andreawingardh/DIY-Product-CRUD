<x-layout>
    {{-- <h1>Edit product</h1> --}}
    <div class="diy-content">
    <x-errors />


    <form class="diy-form"  action="{{route('products.update', $product)}}" method="post">
        @method('PATCH')
        
        <x-products.form :product=$product :categories=$categories :brands=$brands :title=$title/>

        <button type="submit" class="diy-submit-button">Edit product</button>

        </form>
    </div>
    </x-layout>