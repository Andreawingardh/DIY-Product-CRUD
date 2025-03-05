<label for='name'>Name</label>
<input type='text' name='name' value='{{ old('name', $product->name ?? '') }}'>

<label for='description'>Description</label>
<textarea name='description'>{{old('description', $product->description ?? '') }}</textarea>

<label for='price'>Price</label>
<input type='text' name='price' value='{{ old('price', $product->price ?? '') }}'>
<label for='brands'>Brands</label>
<select name='brand_id[]'>
    @foreach ($brands as $brand)
        <option value="{{$brand->id}}">{{old('brand', $brand->name ?? '')}}</option>
    @endforeach
</select>

<fieldset>
<legend for='dimensions'>Dimensions</legend>
<label for='height'>Height</label>
<input type='text' name='height' value='{{ old('height', $product->height ?? '') }}'>
<label for='width'>Width</label>
<input type='text' name='width' value='{{ old('width', $product->width ?? '') }}'>
</fieldset>

<label for='weight'>Weight</label>
<input type='text' name='weight' value='{{ old('weight', $product->weight ?? '') }}'>

<label for='categories'>Categories</label>
<select name='category_id[]'>
    @foreach ($categories as $category)
    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
        {{ $category->name }}
    </option>
    @endforeach
</select>