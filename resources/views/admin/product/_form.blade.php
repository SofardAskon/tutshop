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
    <label>Цвета</label>
    <div class="select2-purple">
        <select class="select2" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет"
            data-dropdown-css-class="select2-purple" style="width: 100%;">
            @include('admin.product._colors')
        </select>
    </div>
</div>
<div class="form-group">
    <label>Размеры</label>
    <div class="select2-purple">
        <select class="select2" name="sizes[]" multiple="multiple" data-placeholder="Выберите размер"
            data-dropdown-css-class="select2-purple" style="width: 100%;">
            @include('admin.product._sizes')
        </select>
    </div>
</div>
<div class="form-group">
    <label>Родительская категория</label>
    <select class="custom-select rounded-0" name="categories[]" multiple>
        @include('admin.product._categories')
    </select>
</div>
{{-- upload-file-component --}}
<upload-file-component :files={{ $product->downloads ?? '[]' }}></upload-file-component>

<button type="submit" class="btn btn-primary">Сохранить</button>
