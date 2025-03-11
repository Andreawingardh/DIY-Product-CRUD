<div class="diy-form-content">
    @csrf

    <section class="diy-section">
        <header class="diy-form-header">
            <h2>Product Information</h2>
        </header>

        <div class="diy-form-group">
            <label class="diy-label" for="name">Name</label>
            <input class="diy-input" type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}">
        </div>

        <div class="diy-form-group">
            <label class="diy-label" for="price">Price</label>
            <input class="diy-input" type="text" name="price" id="price" value="{{ old('price', $product->price ?? '') }}">
        </div>

        <div class="diy-form-group">
            <label class="diy-label" for="description">Description</label>
            <textarea class="diy-textarea" name="description" id="description" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <div class="diy-form-group">
            <label class="diy-label" for="brand_id">Brand</label>
            <select class="diy-select" name="brand_id" id="brand_id">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ old('brand', $brand->name ?? '') }}</option>
                @endforeach
            </select>
        </div>

        <div class="diy-form-group">
            <label class="diy-label" for="category_id">Category</label>
            <select class="diy-select" name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <fieldset class="diy-fieldset">
            <legend class="diy-legend">Dimensions</legend>
            <div class="diy-form-group">
                <label class="diy-label" for="height">Height</label>
                <input class="diy-input" type="text" name="height" id="height" value="{{ old('height', $product->height ?? '') }}">
            </div>
            <div class="diy-form-group">
                <label class="diy-label" for="width">Width</label>
                <input class="diy-input" type="text" name="width" id="width" value="{{ old('width', $product->width ?? '') }}">
            </div>

        <div class="diy-form-group">
            <label class="diy-label" for="weight">Weight</label>
            <input class="diy-input" type="text" name="weight" id="weight" value="{{ old('weight', $product->weight ?? '') }}">
        </div>
    </fieldset>

    <div class="diy-form-group">
        <label class="diy-label" for="image">Product Image</label>
        <input class="diy-input" type="file" name="image" id="image" accept="image/*">
        @if(isset($product) && $product->image_url)
            <div class="current-image-preview mt-2">
                <p>Current image:</p>
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="max-width: 200px; max-height: 200px;">
            </div>
        @endif
    </div>

        <div class="diy-form-actions">
            {{ $slot ?? '' }}
        </div>
    </section>
</div>