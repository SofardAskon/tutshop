<div class="col-6">

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Названия (ru)</label>
                <input type="text" class="form-control form-control-border" name="name_ru" value="{{ $filter ? $filter->getTranslation('name', 'ru') : '' }}" placeholder="Названия (ru)">
            </div>
            <div class="form-group">
                <label>Названия (ru)</label>
                <input type="text" class="form-control form-control-border" name="name_uz" value="{{ $filter ? $filter->getTranslation('name', 'uz') : '' }}" placeholder="Названия (ru)">
            </div>
        </div>
        {{-- <div class="col">
            <div class="form-group">
                <label>Названия (uz)</label>
                <input type="text" class="form-control form-control-border" name="name_uz"
                    value="{{ $color ? $color->getTranslation('name', 'uz') : '' }}" placeholder="Названия (uz)">
            </div>
        </div> --}}
    </div>


</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
