<div class="form-group">
    <label>Названия</label>
    <input type="text" class="form-control form-control-border" name="name" value="{{ $product->name ?? '' }}"
        placeholder="Названия">
</div>
<div class="form-group">
    <label>Характеристики</label>
    <input type="text" class="form-control form-control-border" name="characteristics"
        value="{{ $product->characteristics ?? '' }}" placeholder="Характеристики">
</div>
<div class="form-group">
    <label>Описание</label>
    <input type="text" class="form-control form-control-border" name="description"
        value="{{ $product->description ?? '' }}" placeholder="Описание">
</div>
<div class="form-group">
    <label>Цена</label>
    <input type="text" class="form-control form-control-border" name="price" value="{{ $product->price ?? '' }}"
        placeholder="Цена">
</div>
<div class="form-group">
    <label>Старая цена</label>
    <input type="text" class="form-control form-control-border" name="old_price"
        value="{{ $product->old_price ?? '' }}" placeholder="Старая цена">
</div>
<div class="form-group">
    <label>Изображения</label>
    <input type="text" class="form-control form-control-border" name="image" value="{{ $product->image ?? '' }}"
        placeholder="Изображения">
</div>
<div class="form-group">
    <label>Галерея</label>
    <input type="text" class="form-control form-control-border" name="gallery" value="{{ $product->gallery ?? '' }}"
        placeholder="Галерея">
</div>
<div class="form-group">
    <label>Родительская категория</label>
    <select class="custom-select rounded-0" name="categories[]" multiple>
        @include('product._categories')
    </select>
</div>

<upload-file-component></upload-file-component>
