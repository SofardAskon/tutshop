<div class="col-6">

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Текст (ru)</label>
                <input type="text" class="form-control form-control-border" name="text_ru" value="{{ $offer ? $offer->getTranslation('text', 'ru') : '' }}" placeholder="Текст (ru)">
            </div>
            <div class="form-group">
                <label>Текст (uz)</label>
                <input type="text" class="form-control form-control-border" name="text_uz" value="{{ $offer ? $offer->getTranslation('text', 'uz') : '' }}" placeholder="Текст (uz)">
            </div>
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
