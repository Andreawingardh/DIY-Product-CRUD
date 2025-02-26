<label for='name'>Name</label>
<input type='text' name='name' value='{{ old('name' }}'>

<label for='description'>Description</label>
<textarea name='description'>{{ old('description') }}</textarea>

<label for='price'>Price</label>
<input type='text' name='price' value='{{ old('price') }}'>

<fieldset>
<legend for='dimensions'>Dimensions</legend>
<label for='heigth'>Length</label>
<input type='text' name='height' value='{{ old('height') }}'>
<label for='width'>Width</label>
<input type='text' name='width' value='{{ old('width') }}'>
</fieldset>

<label for='weight'>Weight</label>
<input type='text' name='weight' value='{{ old('weight') }}'>

<label for='categories'>Categories</label>
<select name='categories[]' multiple>
</select>

