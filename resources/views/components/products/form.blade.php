<section class="diy-form-content">
    @csrf

    <section class="diy-section">
        <section class="diy-form-header">
            <h1>{{$title}}</h1>
        </section>

        <fieldset class="diy-form-group">
            <label class="diy-label" for="name" >Name</label>
            <input class="diy-input" type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" required>
        </fieldset>

        <fieldset class="diy-form-group">
            <label class="diy-label" for="price">Price</label>
            <input class="diy-input" type="text" name="price" id="price" value="{{ old('price', $product->price ?? '') }}" required>
        </fieldset>

        <fieldset class="diy-form-group">
            <label class="diy-label" for="description">Description</label>
            <textarea class="diy-textarea" name="description" id="description" rows="4" required>{{ old('description', $product->description ?? '') }}</textarea>
        </fieldset>

        <fieldset class="diy-form-group">
            <label class="diy-label" for="brand">Brand</label>
            <select class="diy-select" name="brand_id" id="brand_id" required>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ old('brand', $brand->name ?? '') }}</option>
                @endforeach
            </select>
        </fieldset>

        <fieldset class="diy-form-group">
            <label class="diy-label" for="category">Category</label>
            <select class="diy-select" name="category_id" id="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </fieldset>

        <fieldset class="diy-fieldset">
            <legend class="diy-legend">Dimensions</legend>
            <div class="diy-form-group">
                <label class="diy-label" for="height">Height</label>
                <input class="diy-input" type="text" name="height" id="height" value="{{ old('height', $product->height ?? '') }}" required>
            </div>
            <div class="diy-form-group">
                <label class="diy-label" for="width">Width</label>
                <input class="diy-input" type="text" name="width" id="width" value="{{ old('width', $product->width ?? '') }}" required>
            </div>  

        <fieldset class="diy-form-group">
            <label class="diy-label" for="weight">Weight</label>
            <input class="diy-input" type="text" name="weight" id="weight" value="{{ old('weight', $product->weight ?? '') }}" required>
        </fieldset>
    </fieldset>

    <fieldset class="diy-form-group">
        <label class="diy-label" for="image">Product Image</label>
        <input class="diy-input" type="file" name="image" id="image" accept="image/*">
        @if(isset($product) && $product->image_url)
            <div class="current-image-preview mt-2">
                <p>Current image:</p>
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="max-width: 200px; max-height: 200px;">
            </div>
        @endif
        </fieldset>

        <div class="diy-form-actions">
            {{ $slot ?? '' }}
        </div>
    </section>
</section>