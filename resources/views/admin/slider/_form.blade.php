<div class="col-6">

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Названия (ru)</label>
                <input type="text" class="form-control form-control-border" name="title_ru"
                    value="{{ $slider ? $slider->getTranslation('title', 'ru') : '' }}" placeholder="Названия (ru)">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Названия (uz)</label>
                <input type="text" class="form-control form-control-border" name="title_uz"
                    value="{{ $slider ? $slider->getTranslation('title', 'uz') : '' }}" placeholder="Названия (uz)">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Краткое описание (ru)</label>
                <input type="text" class="form-control form-control-border" name="description_ru"
                    value="{{ $slider ? $slider->getTranslation('description', 'ru') : '' }}"
                    placeholder="Краткое описание (ru)">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Краткое описание (uz)</label>
                <input type="text" class="form-control form-control-border" name="description_uz"
                    value="{{ $slider ? $slider->getTranslation('description', 'uz') : '' }}"
                    placeholder="Краткое описание (uz)">
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control form-control-border" name="url"
                value="{{ $slider->url ?? '' }}" placeholder="URL">
        </div>
    </div>
</div>

{{-- upload-file-component --}}
<upload-file-component :files={{ $slider->downloads ?? '[]' }}></upload-file-component>

<button type="submit" class="btn btn-primary">Сохранить</button>
