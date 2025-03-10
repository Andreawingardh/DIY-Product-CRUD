<div class="w-[56%] mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" 
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                    <input type="text" name="price" id="price" value="{{ old('price', $product->price ?? '') }}" 
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
            </div>
            
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="4" 
                          class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ old('description', $product->description ?? '') }}</textarea>
            </div>
            
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label for="brand_id" class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
                    <select name="brand_id" id="brand_id" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ old('brand', $brand->name ?? '') }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div>
                    <label for="category_id" class="block text-sm font-bold text-gray-700 mb-1">Category</label>
                    <select name="category_id" id="category_id" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <fieldset class="border border-gray-200 rounded-md p-4">
                <legend class="text-sm font-medium text-gray-700 px-2">Dimensions</legend>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label for="height" class="block text-sm font-medium text-gray-700 mb-1">Height</label>
                        <input type="text" name="height" id="height" value="{{ old('height', $product->height ?? '') }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="width" class="block text-sm font-medium text-gray-700 mb-1">Width</label>
                        <input type="text" name="width" id="width" value="{{ old('width', $product->width ?? '') }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    </div>
                </div>
            </fieldset>
            
            <div>
                <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Weight</label>
                <input type="text" name="weight" id="weight" value="{{ old('weight', $product->weight ?? '') }}" 
                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            
            <div class="flex justify-end pt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition duration-200">
                    Save Product
                </button>
            </div>
        </div>
    </div>
</div>