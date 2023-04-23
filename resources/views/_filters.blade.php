@foreach ($filters as $filter)
    <div class="filter__item item-filter filters" data-filter-id="{{ $filter->id }}">
        <button type="button" data-spoller class="item-filter__title _spoller-active">{{ $filter->name }}</button>
        <div class="item-filter__body">
            @foreach ($filter->values as $value)
                <div class="checkbox">
                    <input id="filters_{{ $value->id }}" data-error="Ошибка" class="checkbox__input" type="checkbox" value="{{ $value->id }}" name="filter_{{ $filter->id }}[]">
                    <label for="filters_{{ $value->id }}" class="checkbox__label"><span class="checkbox__text">{{ $value->value }}</span></label>
                </div>
            @endforeach
        </div>
    </div>
@endforeach
