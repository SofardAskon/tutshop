<div class="row">
    <div class="col">
        <div class="form-group">
            <label>Названия (ru)</label>
            <input type="text" class="form-control form-control-border" name="name_ru"
                value="{{ $product ? $product->getTranslation('name', 'ru') : '' }}" placeholder="Названия">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>Названия (uz)</label>
            <input type="text" class="form-control form-control-border" name="name_uz"
                value="{{ $product ? $product->getTranslation('name', 'uz') : '' }}" placeholder="Названия">
        </div>
    </div>
</div>
<div class="form-group">
    <label>Характеристики (ru)</label>
    <textarea name="characteristics_ru" class="summernote">
        {{ $product ? $product->getTranslation('characteristics', 'ru') : '' }}
      </textarea>
</div>
<div class="form-group">
    <label>Характеристики (uz)</label>
    <textarea name="characteristics_uz" class="summernote">
        {{ $product ? $product->getTranslation('characteristics', 'uz') : '' }}
      </textarea>
</div>
<div class="form-group">
    <label>Описание (ru)</label>
    <textarea name="description_ru" class="summernote">
        {{ $product ? $product->getTranslation('description', 'ru') : '' }}
      </textarea>
</div>
<div class="form-group">
    <label>Описание (uz)</label>
    <textarea name="description_uz" class="summernote">
        {{ $product ? $product->getTranslation('description', 'uz') : '' }}
      </textarea>
</div>
<div class="form-group">
    <label>Цена</label>
    <input type="text" class="form-control form-control-border" name="price"
        value="{{ $product ? $product->price : '' }}" placeholder="Цена">
</div>
<div class="form-group">
    <label>Старая цена</label>
    <input type="text" class="form-control form-control-border" name="old_price"
        value="{{ $product ? $product->old_price : '' }}" placeholder="Старая цена">
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
