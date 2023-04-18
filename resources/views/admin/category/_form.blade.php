<div class="form-group">
    <label>Названия</label>
    <input type="text" class="form-control form-control-border" name="title" value="{{ $category->title ?? '' }}"
        placeholder="Названия">
</div>
<div class="form-group">
    <label>Родительская категория</label>
    <select class="custom-select rounded-0" name="parent_id">
        <option value="0">-- Без родительской категории --</option>
        @include('admin.category._categories')
    </select>
</div>

{{-- upload-file-component --}}
{{-- <upload-file-component-category :files={{ $category->downloads ?? '[]' }}></upload-file-component-category> --}}

<button type="submit" class="btn btn-primary">Сохранить</button>
