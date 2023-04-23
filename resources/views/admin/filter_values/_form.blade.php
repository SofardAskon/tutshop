<div class="col-6">

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Названия (ru)</label>
                <input type="text" class="form-control form-control-border" name="value_ru" value="{{ $filterValue ? $filterValue->getTranslation('value', 'ru') : '' }}" placeholder="Названия (ru)">
            </div>
            <div class="form-group">
                <label>Названия (ru)</label>
                <input type="text" class="form-control form-control-border" name="value_uz" value="{{ $filterValue ? $filterValue->getTranslation('value', 'uz') : '' }}" placeholder="Названия (ru)">
            </div>
        </div>
    </div>


</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
