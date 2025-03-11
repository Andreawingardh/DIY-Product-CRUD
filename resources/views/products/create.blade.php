<x-layout>
    <section class="diy-content">
        <x-errors/>

        <form class="diy-form" method="post" action="{{ route('products.store') }}">
            <x-products.form :categories=$categories :brands=$brands :title=$title>

            <button type="submit" class="diy-submit-button">Create new product</button>

            </x-products.form>

        </form>
    </section>
</x-layout>