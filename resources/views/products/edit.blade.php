<x-app-layout>
    <section class="diy-content">
       
        <form class="diy-form"  action="{{route('products.update', $product)}}" method="post">
            @method('PATCH')
            <x-errors />
            
            <x-products.form :product=$product :categories=$categories :brands=$brands :title=$title>

            <button type="submit" class="diy-submit-button">Edit product</button>

            </x-products.form>
        </form>
    </section>
</x-app-layout>