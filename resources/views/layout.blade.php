<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Главная</title>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <style>body{opacity: 0;}</style> -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css?_v=202304151322361') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css?v2.1') }}">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <header class="header headerundefined">
            <div class="header__top top-header">
                <div class="top-header__container">
                    <div class="top-header__body">
                        <div class="top-header__menu menu">
                            <button type="button" class="menu__icon icon-menu"><span></span></button>
                            <nav class="menu__body">
                                <div class="menu__top">
                                    <div class="menu__login login">
                                        <a href="" class="login__button">ВОЙТИ</a>
                                    </div>
                                </div>
                                <div class="menu__content content-menu">
                                    <div class="content-menu__item">
                                        <div data-spollers class="spollers">
                                            <div class="spollers__item">
                                                <button type="button" data-spoller class="spollers__title  _icon-catalog"><span class="_icon-arrow-down">{{ trans('common.catalog') }}</span></button>
                                                <div class="spollers__body">
                                                    <div data-spollers data-one-spoller class="spollers spollers-sub">
                                                        @include('_categories-mobile')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a href="" class="content-menu__item content-menu__item_link _icon-card">Корзина</a>
                                    <a href="" class="content-menu__item content-menu__item_link _icon-favorite">Избранное</a>
                                    <a href="" class="content-menu__item content-menu__item_link _icon-about">О
                                        нас</a> --}}
                                    <div class="content-menu__contact">
                                        <div class="content-menu__item-contact">{{ trans('common.contacts') }}</div>
                                        <a href="mailto:magazin@mail.ru" class="content-menu__item-contact">magazin@mail.ru</a>
                                        <a href="to:998999999999" class="content-menu__item-contact">+998 99 999 99
                                            99</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <nav class="top-header__nav">
                            <ul class="top-header__list">
                                <li class="top-header__item"><a href="" class="top-header__link">{{ trans('common.about_us') }}</a></li>
                                <li class="top-header__item"><a href="" class="top-header__link">{{ trans('common.delivery') }}</a></li>
                                <li class="top-header__item"><a href="" class="top-header__link">{{ trans('common.contacts') }}</a></li>
                                <li class="top-header__item"><a href="" class="top-header__link">{{ trans('common.leave_feedback') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header__body body-header">
                <div class="body-header__container">
                    <div class="body-header__inner">
                        <div class="body-header__logo" data-da=".top-header__body,991.98,1">
                            <a href="/" class="body-header__link-logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="100"></a>
                        </div>
                        <button class="body-header__catalog catalog-btn _icon-catalog">{{ trans('common.catalog') }}</button>
                        <div class="body-header__search search-header">
                            <form action="{{ route('search') }}" method="GET" class="search-header__form">
                                <button type="submit" class="_icon-search"></button>
                                <input autocomplete="off" type="text" name="query" placeholder="{{ trans('common.search') }}" value="{{ $searchQuery ?? '' }}" class="">
                            </form>
                        </div>
                        <div class="body-header__language language-header" data-da=".menu__top,991.98,first">
                            <div data-spollers class="spollers">
                                <div class="spollers__item language-header__block">

                                    <button type="button" data-spoller class="spollers__title language-header__title">
                                        <picture>
                                            <source srcset="{{ asset('assets/img/header/' . app()->getLocale() . '.webp') }}" type="image/webp">
                                            <img src="{{ asset('assets/img/header/' . app()->getLocale() . '.png') }}" alt="">
                                        </picture>
                                        <span style="text-transform: uppercase;">{{ app()->getLocale() }}</span>
                                    </button>

                                    <ul class="language-header__body">
                                        @if (app()->getLocale() == 'ru')
                                            <li class="language-header__item">
                                                <a href="{{ route('locale', 'uz') }}">
                                                    <picture>
                                                        <source srcset="{{ asset('assets/img/header/uz.webp') }}" type="image/webp"><img src="{{ asset('assets/img/header/uz.png') }}" alt="">
                                                    </picture>
                                                    <span>UZ</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="language-header__item">
                                                <a href="{{ route('locale', 'ru') }}">
                                                    <picture>
                                                        <source srcset="{{ asset('assets/img/header/ru.webp') }}" type="image/webp"><img src="{{ asset('assets/img/header/ru.png') }}" alt="">
                                                    </picture>
                                                    <span>RU</span>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="body-header__actions actions-header" data-da=".top-header__body,991.98,2">
                            <a href="" class="actions-header__item _icon-favorite"></a>
                            <a href="" class="actions-header__item _icon-card"></a>
                            <a href="" class="actions-header__item _icon-user"></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="header__footer footer-header">
                <div class="footer-header__container">
                    <div class="footer-header__categoty category-header" data-da=".menu__body,991.98,1">
                        <ul class="category-header__list">
                            {{-- @include('_categories-header') --}}
                            <li>ㅤ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="catalog">
                <div class="catalog__container">
                    <div class="catalog__body">
                        <div class="catalog__content content-catalog">
                            <ul class="content-catalog__list">
                                @include('_categories')
                            </ul>
                        </div>
                        <div class="catalog__banner banner-catalog" data-simplebar="hide">
                            <div class="banner-catalog__item banner-catalog__item_big">
                                <div class="banner-catalog__body">
                                    <div class="banner-catalog__title">НОВИНКИ ВЕСНЫ </div>
                                    <div class="banner-catalog__sub-title">2023</div>
                                    <a href="" class="banner-catalog__link">{{ trans('common.details') }}</a>
                                </div>
                                <div class="banner-catalog__image-ibg">
                                    <picture>
                                        <source srcset="{{ asset('assets/img/header/banner1.webp') }}" type="image/webp"><img src="{{ asset('assets/img/header/banner1.jpg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="banner-catalog__item">
                                <div class="banner-catalog__body">
                                    <div class="banner-catalog__title">ПОДБОРКА ГАДЖЕТОВ </div>
                                    <div class="banner-catalog__sub-title">ДЛЯ ДОМА</div>
                                    <a href="" class="banner-catalog__link">{{ trans('common.details') }}</a>
                                </div>
                                <div class="banner-catalog__image-ibg">
                                    <picture>
                                        <source srcset="{{ asset('assets/img/header/banner2.webp') }}" type="image/webp"><img src="{{ asset('assets/img/header/banner2.jpg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="page__advantages advantages">
                <div class="advantages__container">
                    <div class="advantages__body">
                        <div class="advantages__item">{{ trans('common.free_return') }}</div>
                        <div class="advantages__item">{{ trans('common.purchase_information') }}</div>
                        <div class="advantages__item">{{ trans('common.delivery') }}</div>
                    </div>
                </div>
            </section>
            @yield('content')
        </main>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__body">
                    <div class="footer__logo">
                        <a href="/" class="body-header__link-logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="100"></a>
                    </div>
                    <div class="footer__items">
                        <ul class="footer__item item-footer">
                            <li class="item-footer__title">{{ trans('common.about_company') }}</li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.about_us') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.delivery') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.contacts') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.stock') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.leave_feedback') }}</a></li>
                        </ul>
                        <ul class="footer__item item-footer">
                            <li class="item-footer__title">{{ trans('common.catalog') }}</li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.kids_toys') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.appliances') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.electronics') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.clothing_and_footwear') }}</a></li>
                            <li class="item-footer__item"><a href="" class="item-footer__link">{{ trans('common.housing') }}</a></li>
                        </ul>
                        <ul class="footer__item item-footer item-footer_contact">
                            <li class="item-footer__title">{{ trans('common.contacts') }}</li>
                            <li class="item-footer__item"><a href="tel:+998999999999" class="item-footer__link">+998
                                    99 999 99 99</a></li>
                            <li class="item-footer__item"><a href="mailto:magazin@mail.ru" class="item-footer__link">magazin@mail.ru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="popup_size" aria-hidden="true" class="popup popup-size">
        <div class="popup__wrapper">
            <div class="popup__content">
                <button data-close type="button" class="popup__close _icon-close"></button>
                <div class="popup-size__title">Размерная сетка</div>
                <div class="popup-size__image">
                    <picture>
                        <source srcset="{{ asset('assets/img/popup/image01.webp') }}" type="image/webp"><img src="{{ asset('assets/img/popup/image01.jpg') }}" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <div id="popup_review" aria-hidden="true" class="popup popup-review">
        <div class="popup__wrapper">
            <div class="popup__content popup-review__content">
                <button data-close type="button" class="popup__close _icon-close"></button>
                <div class="popup-review__title">Отзыв о товаре</div>
                <form action="#" class="reviews-form">
                    <div class="reviews-form__line reviews-form__line_review">
                        Поставить оценку
                        <div class="rating rating_set reviews-form__rating">
                            <div class="rating__body">
                                <div class="rating__active"></div>
                                <div class="rating__items">
                                    <input type="radio" class="rating__item" value="1" name="rating">
                                    <input type="radio" class="rating__item" value="2" name="rating">
                                    <input type="radio" class="rating__item" value="3" name="rating">
                                    <input type="radio" class="rating__item" value="4" name="rating">
                                    <input type="radio" class="rating__item" value="5" name="rating">
                                </div>
                            </div>
                            <div class="rating__value">0</div>
                        </div>
                    </div>
                    <div class="reviews-form__line">
                        <label for="" class="reviews-form__label">
                            <input autocomplete="off" type="text" name="form[]" data-error="Введите имя" data-required placeholder="Имя*" class="input">
                        </label>
                        <label for="" class="reviews-form__label">
                            <input autocomplete="off" type="text" name="form[]" data-error="Введите номер телефона" data-required placeholder="Номер телефона*" class="input">
                        </label>
                    </div>
                    <div class="reviews-form__line">
                        <textarea autocomplete="off" name="form[]" placeholder="Ваш отзыв*" data-error="Заполните поле" data-required class="input"></textarea>
                    </div>
                    <div class="reviews-form__buttons">
                        <button data-close type="button" class="reviews-form__button button button_secondary">ОТМЕНИТЬ</button>
                        <button class="reviews-form__button button">ОТПРАВИТЬ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.min.js?_v=202304151322361') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var token = $('meta[name="csrf-token"]').attr('content');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token
                }
            });

            function getCategoryIdFromUrl() {
                const regex = /\/shop\/categories\/(\d+)/;
                const match = window.location.pathname.match(regex);
                return match ? match[1] : null;
            }

            $.urlParam = function(name) {
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (!results) {
                    return null;
                }
                return decodeURI(results[1]) || null;
            }

            function getSelectedFilters() {
                let filters = {};

                $('.filters').each(function() {
                    let filterId = $(this).data('filter-id');
                    let selectedValues = $(this).find('input[type="checkbox"]:checked').map(function() {
                        return $(this).val();
                    }).get();

                    if (selectedValues.length > 0) {
                        filters[filterId] = selectedValues;
                    }
                });

                return filters;
            }

            $('.checkbox, .options__input, .item-filter input[type="checkbox"]').on('change', function() {
                var category = getCategoryIdFromUrl();
                // var category = $.urlParam('categories');
                var selectedColors = [];
                $('input[name="color[]"]:checked').each(function() {
                    selectedColors.push($(this).val());
                });

                var selectedFilters = getSelectedFilters();
                console.log(selectedFilters);

                var url = window.location.pathname;

                if (category) {
                    url += '?categories=' + category;
                }

                if (selectedColors.length > 0) {
                    url += (url.includes('?') ? '&' : '?') + 'colors=' + selectedColors.join(',');
                }

                history.pushState({}, '', url);

                $.ajax({
                    url: '/category',
                    method: 'POST',
                    data: {
                        categories: category,
                        colors: JSON.stringify(selectedColors),
                        filters: JSON.stringify(selectedFilters)
                    },
                    success: function(data) {
                        console.log(data.data);
                        $('#products').html(data.html);
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        console.log('Ошибка при фильтрации продуктов: ' + errorThrown);
                    }
                });
            });
        });
    </script>
</body>

</html>
