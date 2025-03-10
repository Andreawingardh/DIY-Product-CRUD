<form>
    @csrf
    
    <section>
        <header>
            <h2>Product Information</h2>
        </header>
        
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}">
        </div>
        
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price', $product->price ?? '') }}">
        </div>
        
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
        </div>
        
        <div>
            <label for="brand_id">Brand</label>
            <select name="brand_id" id="brand_id">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ old('brand', $brand->name ?? '') }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <fieldset>
            <legend>Dimensions</legend>
            <div>
                <label for="height">Height</label>
                <input type="text" name="height" id="height" value="{{ old('height', $product->height ?? '') }}">
            </div>
            <div>
                <label for="width">Width</label>
                <input type="text" name="width" id="width" value="{{ old('width', $product->width ?? '') }}">
            </div>
        </fieldset>
        
        <div>
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" value="{{ old('weight', $product->weight ?? '') }}">
        </div>
        
        <footer>
            <button type="submit">Save Product</button>
        </footer>
    </section>
</form>