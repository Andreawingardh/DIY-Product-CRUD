<x-layout>
    <div class="diy-content">
        <x-errors/>

        <form class="diy-form" method="post" action="{{ route('products.store') }}">
            <x-products.form :categories=$categories :brands=$brands>
                <button type="submit" class="diy-submit-button">Create new product</button>
            </x-products.form>
        </form>
    </div>
</x-layout>