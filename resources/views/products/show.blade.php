<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 flex flex-col">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">{{$product->name }}</h2>
            
            <div class="border-t border-gray-200 pt-4 flex-grow">
                <h3 class="text-xl font-medium text-gray-700 mb-3">Brand: {{$product->brand->name}}</h3>
                
                <div class="text-gray-600 space-y-2 mb-4">
                    <p>The product weighs {{$product->weight}}.</p>
                    <p>Dimensions: {{$product->height}} x {{$product->width}}.</p>
                    <p>Category: <span class="font-medium">{{$product->category->name}}</span></p>
                </div>
            </div>

            @if (auth()->check() && auth()->user()->isAdmin())
                <div class="flex space-x-2 mt-6">
                    <a href="/products/{{$product->id}}/edit">
                        <button class="bg-blue-500 hover:bg-red-700 text-black py-2 px-4 rounded-lg shadow-md transition duration-200">
                            Edit
                        </button>  
                    </a>

                    <form method="post" action="{{ route('products.destroy', $product)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg shadow-md transition duration-200" 
                            onclick="return confirm('Are you sure you want to delete this product?')">
                            Delete
                        </button>
                    </form>
                </div>
            @endif
            
            <div class="mt-6">
                <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">
                    &larr; Back to all products
                </a>
            </div>
        </div>
    </div>
</x-layout>
