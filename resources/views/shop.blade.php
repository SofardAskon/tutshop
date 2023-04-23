@extends('layout')

@section('content')
    <section class="page__catalog catalog-page">
        <div class="catalog-page__container">
            <div class="catalog-page__body">
                <div class="catalog-page__filter filter-catalog-page">
                    <ul class="filter-catalog-page__categoty">
                        @foreach ($categories as $categoryItem)
                            <li class="filter-catalog-page__item-category" data-id="{{ $categoryItem->id }}"><a href="/shop?categories={{ $categoryItem->id }}">{{ $categoryItem->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="filter">
                        <div data-spollers class="filter__body">

                            <div class="filter__top">
                                Фильтры
                                <div class="filter__close _icon-close"></div>
                            </div>

                            <div class="filter__item item-filter">
                                <button type="button" data-spoller class="item-filter__title _spoller-active">{{ trans('common.sizes') }}</button>
                                <div class="item-filter__body">
                                    @foreach ($sizes as $index => $sizeItem)
                                        <div class="checkbox">
                                            <input id="c_{{ $index }}" data-error="Ошибка" class="checkbox__input" type="checkbox" value="{{ $sizeItem->id }}" name="size[]">
                                            <label for="c_{{ $index }}" class="checkbox__label"><span class="checkbox__text">{{ $sizeItem->name }}</span></label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="filter__item item-filter item-filter_range">
                                <button type="button" data-spoller class="item-filter__title _spoller-active">{{ trans('common.price') }}</button>
                                <div class="item-filter__body">
                                    <div class="range">
                                        <div gata-range></div>
                                        <div class="range__content">
                                            <div class="range__item">
                                                <input tabindex="-1" readonly type="text" data-min="20000" data-start="100000" gata-value value="0">
                                                <span gata-value></span> <span>&nbsp;Sʻ</span>
                                            </div>
                                            <div class="range__item">
                                                <input tabindex="-1" readonly type="text" data-max="300000" data-end="250000" gata-value value="200000">
                                                <span gata-value></span>&nbsp;Sʻ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__item item-filter item-filter_colors">
                                <button type="button" data-spoller class="item-filter__title _spoller-active">{{ trans('common.color') }}</button>
                                <div class="item-filter__body">

                                    <div class="options options_color">
                                        @foreach ($colors as $index => $colorItem)
                                            <div class="options__item">
                                                <input hidden id="o_{{ $index }}" class="options__input" type="checkbox" value="{{ $colorItem->id }}" name="color[]">
                                                <label for="o_{{ $index }}" class="options__label">
                                                    <span style="background: {{ $colorItem->hex_code }};"></span>
                                                    <span style="border-color: {{ $colorItem->hex_code }};"></span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            @include('_filters')
                            {{-- <div class="filter__item item-filter">
                                <button type="button" data-spoller class="item-filter__title _spoller-active">Обьем
                                    встроенной
                                    памяти</button>
                                <div class="item-filter__body">
                                    <div class="checkbox">
                                        <input id="c_4" data-error="Ошибка" class="checkbox__input" type="checkbox"
                                            value="1" name="form[]">
                                        <label for="c_4" class="checkbox__label"><span
                                                class="checkbox__text">216GB</span></label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="c_5" data-error="Ошибка" class="checkbox__input" type="checkbox"
                                            value="1" name="form[]">
                                        <label for="c_5" class="checkbox__label"><span
                                                class="checkbox__text">128GB</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__item item-filter">
                                <button type="button" data-spoller class="item-filter__title _spoller-active">Отпечаток
                                    пальца</button>
                                <div class="item-filter__body">
                                    <div class="checkbox">
                                        <input id="c_6" data-error="Ошибка" class="checkbox__input" type="checkbox"
                                            value="1" name="form[]">
                                        <label for="c_6" class="checkbox__label"><span
                                                class="checkbox__text">Есть</span></label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="c_7" data-error="Ошибка" class="checkbox__input" type="checkbox"
                                            value="1" name="form[]">
                                        <label for="c_8" class="checkbox__label"><span
                                                class="checkbox__text">Сзади</span></label>
                                    </div>
                                </div>
                            </div> --}}

                            <button class="filter__button button">ПРИМЕНИТЬ</button>

                        </div>
                    </div>
                </div>
                <div class="catalog-page__products">
                    <div class="catalog-page__items-body">

                        <div class="catalog-page__items-top">
                            <button class="_icon-arrow-left filter-btn-rows"></button>
                            <div class="block">
                                <button class="_icon-rows filter-btn-rows"></button>
                                <button class="_icon-filter filter-btn"></button>
                            </div>
                        </div>

                        <div id="products" class="catalog-page__items">
                            @include('_productCard', ['products' => $products])
                        </div>
                    </div>

                    {{-- <div class="catalog-page__pagging pagging">
                        <ul class="pagging__list">
                            <li class="pagging__item"><a href="" class="pagging__link active">1</a></li>
                            <li class="pagging__item"><a href="" class="pagging__link">2</a></li>
                            <li class="pagging__item"><a href="" class="pagging__link">3</a></li>
                            <li class="pagging__item"><a href="" class="pagging__link">4</a></li>
                            <li class="pagging__item"><a href="" class="pagging__link">...</a></li>
                            <li class="pagging__item"><a href="" class="pagging__link">10</a></li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection
