<div class="col-6">

    <div class="form-group">
        <label>Названия</label>
        <input type="text" class="form-control form-control-border" name="name" value="{{ $color->name ?? '' }}"
            placeholder="Названия">
    </div>
    <div class="form-group">
        <div class="col-3">

            <label>Цвет</label>
            <input type="color" class="form-control form-control-border" name="hex_code"
                value="{{ $color->hex_code ?? '' }}" placeholder="Названия">
        </div>

    </div>
</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
