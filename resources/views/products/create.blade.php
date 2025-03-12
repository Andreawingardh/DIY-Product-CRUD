<x-app-layout>
    <section class="diy-content">
       

        <form class="diy-form" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
            <x-errors/>
            <x-products.form :categories=$categories :brands=$brands :title=$title>
                

            <button type="submit" class="diy-submit-button">Create new product</button>

            </x-products.form>

        </form>
    </section>
</x-app-layout>