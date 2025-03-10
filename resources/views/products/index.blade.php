<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Products</h1>
            @if (auth()->check() && auth()->user()->isAdmin())
                <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition duration-200">
                    Create new product
                </a>
            @endif
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-200">
                    <a href="/products/{{$product->id}}" class="block">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{$product->name }}</h2>
                            <h3 class="text-md font-medium text-gray-700 mb-2">Brand: {{$product->brand->name}}</h3>
                            <div class="text-sm text-gray-600 space-y-1">
                                <p>The product weighs {{$product->weight}}.</p>
                                <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
                                <p>Category: {{$product->category->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>