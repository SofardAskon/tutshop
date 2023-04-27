<div class="row">
    <div class="form-group col-6">
        <label>Названия (ru)</label>
        <input type="text" class="form-control form-control-border" name="name_ru" value="{{ $category ? $category->getTranslation('title', 'ru') : '' }}" placeholder="Названия">
    </div>
    <div class="form-group col-6">
        <label>Названия (uz)</label>
        <input type="text" class="form-control form-control-border" name="name_uz" value="{{ $category ? $category->getTranslation('title', 'uz') : '' }}" placeholder="Названия">
    </div>
</div>
<div class="form-group">
    <label>Родительская категория</label>
    <select class="custom-select rounded-0" name="parent_id">
        <option value="0">-- Без родительской категории --</option>
        @include('admin.category._categories')
    </select>
</div>


<div class="form-group">
    <label>Фильтры</label>
    <div class="select2-purple">
        <select class="select2" name="filters[]" multiple="multiple" data-placeholder="Выберите фильтры" data-dropdown-css-class="select2-purple" style="width: 100%;">
            @foreach ($filters as $filter)
                <option value="{{ $filter->id }}" {{ in_array($filter->id, $selectedFilters) ? 'selected' : '' }}>
                    {{ $filter->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>


{{-- upload-file-component --}}

<upload-file-component :files='{{ $category->downloads ?? '[]' }}'></upload-file-component>


<button type="submit" class="btn btn-primary">Сохранить</button>
