@extends('layout')

@section('content')
    <section class="page__product product">
        <div class="product__container">
            <div class="product__body">
                <div class="product__main main-product">
                    <div class="main-product__sliders">

                        <div class="main-product__trumb-slider swiper">
                            <div class="main-product__trumb-wrapper swiper-wrapper">

                                @foreach ($product->downloads as $index => $downloadItem)
                                    <div class="main-product__trumb-slide trumb-slide swiper-slide">
                                        <div class="trumb-slide__image"><img src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="">
                                        </div>
                                    </div>
                                @endforeach

                                @if ($product->video)
                                    <div class="main-product__trumb-slide trumb-slide swiper-slide _icon-play">
                                        <div class="trumb-slide__image">
                                            <img src="{{ asset('storage') . '/' . $product->downloads[0]->path }}" alt="{{ $product->title }}">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="main-product__slider swiper">
                            <div class="main-product__wrapper swiper-wrapper">

                                @foreach ($product->downloads as $index => $downloadItem)
                                    <div class="main-product__slide main-product-slide swiper-slide">
                                        <div class="main-product-slide__image">
                                            <img src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="">
                                        </div>
                                    </div>
                                @endforeach

                                @if ($product->video)
                                    <a href="{{ $product->video }}" class="main-product__slide main-product-slide swiper-slide _icon-play" data-fancybox>
                                        <div class="main-product-slide__image">
                                            <img src="{{ asset('storage') . '/' . $product->downloads[0]->path }}" alt="{{ $product->title }}">
                                        </div>
                                    </a>
                                @endif
                            </div>
                            <div class="main-product__pagination pagination_fraction pagination"></div>
                        </div>
                    </div>
                    <div class="main-product__content content-main-product">
                        <div class="content-main-product__name">
                            <div class="content-main-product__title">{{ $product->name }}<small>ID:
                                    {{ $product->id }}</small></div>
                            <a href="" class="content-main-product__share _icon-share"></a>
                        </div>
                        {{-- <div class="content-main-product__rating rating">
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
                            <div class="rating__value">3.6</div>
                        </div> --}}
                        <div class="content-main-product__price price-main-product">
                            <div class="price-main-product__current">{{ $product->price }} сум</div>
                            @if ($product->old_price)
                                <div class="price-main-product__old">{{ $product->old_price }} сум</div>
                            @endif
                        </div>
                        <div class="price-main-product__colors">
                            <div class="price-main-product__title-colors">{{ trans('common.color') }}: <span id="product-color-name"> </span></div>
                            <div class="options options_color">
                                @isset($product->colors)
                                    @foreach ($product->colors as $index => $colorItem)
                                        <div class="options__item">
                                            <input hidden id="o_{{ $index }}" class="options__input" type="radio" value="{{ $colorItem->name }}" name="color">
                                            <label for="o_{{ $index }}" class="options__label" data-color-name="{{ $colorItem->name }}">
                                                <span style="background: {{ $colorItem->hex_code }};"></span>
                                                <span style="border-color: {{ $colorItem->hex_code }};"></span>
                                            </label>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                        <div class="price-main-product__buttons buttons-main-product">
                            <div class="buttons-main-product__main">
                                <button id="open_popup" class="button" style="width: 100%;">{{ trans('common.buy') }}</button>
                            </div>
                        </div>
                        {{-- 
                        <div class="price-main-product__buttons buttons-main-product">
                            <div class="buttons-main-product__main">
                                <a href="" class="buttons-main-product__card button button_blue">ПЕРЕЙТИ К
                                    КОРЗИНЕ</a>
                                <div class="buttons-main-product__quantity quantity">
                                    <button type="button" class="quantity__button quantity__button_plus"></button>
                                    <div class="quantity__input">
                                        <input autocomplete="off" type="text" name="form[]" value="1">
                                    </div>
                                    <button type="button" class="quantity__button quantity__button_minus"></button>
                                </div>
                                <button class="buttons-main-product__card button">КУПИТЬ</button>
                                {{-- <button class="buttons-main-product__favorite _icon-favorite"></button> --}}
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="page__product-info info-product">
        <div class="info-product__container">
            <div class="info-product__body_small">
                <div class="info-product__description description-product" data-showmore>
                    <div class="description-product__title info-product__title">{{ trans('common.description') }}</div>
                    <div data-showmore-content="50" class="description-product__content">{!! $product->description !!}</div>
                    <button hidden data-showmore-button type="button" class="description-product__more"><span>{{ trans('common.details') }}</span><span>Скыть</span></button>
                </div>
                <div class="info-product__about about-product">
                    <div class="info-product__title">{{ trans('common.about_the_product') }}</div>
                    <div class="about-product__items">
                        @foreach ($product->characteristics as $name => $value)
                            <div class="about-product__title">{{ $name }}</div>
                            <div class="about-product__text">{{ $value }}</div>
                        @endforeach
                    </div>
                </div>

                <div class="info-product__size">
                    <picture>
                        <source srcset="img/article/image01.webp" type="image/webp"><img src="img/article/image01.jpg" alt="">
                    </picture>
                </div>

                <div class="info-product__images">
                    <picture>
                        <source srcset="img/article/image02.webp" type="image/webp"><img src="img/article/image02.jpg" alt="">
                    </picture>
                    <picture>
                        <source srcset="img/article/image03.webp" type="image/webp"><img src="img/article/image03.jpg" alt="">
                    </picture>
                </div>

                {{-- <div class="info-product__reviews reviews">
                    <div class="reviews__title info-product__title">Отзывы</div>
                    <div class="reviews__items">
                        <div class="reviews__item">
                            <div class="reviews__top top-reviews">
                                <div class="top-reviews__image">
                                    <picture>
                                        <source srcset="img/article/reviews.webp" type="image/webp"><img
                                            src="img/article/reviews.png" alt="">
                                    </picture>
                                </div>
                                <div class="top-reviews__info">
                                    <div class="top-reviews__name">Max Volkov</div>
                                    <div class="top-reviews__date">26 июля</div>
                                </div>
                                <div class="top-reviews__rating _icon-review-star">4.5</div>
                            </div>
                            <div class="reviews__bottom">Покупал в подарок девушке, она очень довольна!</div>
                        </div>
                        <div class="reviews__item">
                            <div class="reviews__top top-reviews">
                                <div class="top-reviews__image">
                                    <picture>
                                        <source srcset="img/article/reviews.webp" type="image/webp"><img
                                            src="img/article/reviews.png" alt="">
                                    </picture>
                                </div>
                                <div class="top-reviews__info">
                                    <div class="top-reviews__name">Мария Третьякова</div>
                                    <div class="top-reviews__date">26 июля</div>
                                </div>
                                <div class="top-reviews__rating _icon-review-star">4.5</div>
                            </div>
                            <div class="reviews__bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.</div>
                        </div>
                    </div>
                    <button class="reviews__button button" data-popup="#popup_review">ОСТАВИТЬ ОТЗЫВ</button>
                </div> --}}


                {{-- <form action="#" class="info-product__reviews-form reviews-form">


                    <div class="reviews-form__title">Отзыв о товаре</div>

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
                        <button class="reviews-form__button button">ОСТАВИТЬ ОТЗЫВ</button>
                    </div>

                </form> --}}


            </div>
        </div>
    </section>


    {{-- <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">Похожие товары</div>
                    <a href="" class="product-section__link">Смотреть все</a>
                </div>
                <div class="products-items">
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="img/product/image01.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_first" src="img/product/image01.jpg"
                                    alt="">
                            </picture>
                            <picture>
                                <source srcset="img/product/image02.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_second" src="img/product/image02.jpg"
                                    alt="">
                            </picture>
                            <span class="item-product__sale">20%</span>
                            <button class="item-product__favotite _icon-favorite"></button>
                        </a>
                        <div class="item-product__content">
                            <div class="item-product__subtitle">Куплено более 2100</div>
                            <div class="item-product__price price-product">
                                <div class="price-product__current">3.200.000 сум</div>
                                <div class="price-product__old">4.000.000 сум</div>
                            </div>
                            <a href="" class="item-product__title">Sleeve Sweatshot</a>
                            <div class="item-product__colors">
                                <a href="" class="colors-item active"><span
                                        style="background-color: #000;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #29734F;"></span></a>
                                <a href="" class="colors-item active"><span
                                        style="background-color: #332973;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #732963;"></span></a>
                            </div>
                            <div class="item-product__buttons">
                                <button class="item-product__card-button _icon-card-product"></button>
                                <a href="" class="button">{{ trans('common.details') }}</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="img/product/image01.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_first" src="img/product/image01.jpg"
                                    alt="">
                            </picture>
                            <picture>
                                <source srcset="img/product/image02.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_second" src="img/product/image02.jpg"
                                    alt="">
                            </picture>
                            <span class="item-product__sale">20%</span>
                            <button class="item-product__favotite _icon-favorite"></button>
                        </a>
                        <div class="item-product__content">
                            <div class="item-product__subtitle">Куплено более 2100</div>
                            <div class="item-product__price price-product">
                                <div class="price-product__current">3.200.000 сум</div>
                                <div class="price-product__old">4.000.000 сум</div>
                            </div>
                            <a href="" class="item-product__title">Sleeve Sweatshot</a>
                            <div class="item-product__colors">
                                <a href="" class="colors-item active"><span
                                        style="background-color: #000;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #29734F;"></span></a>
                                <a href="" class="colors-item active"><span
                                        style="background-color: #332973;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #732963;"></span></a>
                            </div>
                            <div class="item-product__buttons">
                                <button class="item-product__card-button _icon-card-product"></button>
                                <a href="" class="button">{{ trans('common.details') }}</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="img/product/image01.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_first" src="img/product/image01.jpg"
                                    alt="">
                            </picture>
                            <picture>
                                <source srcset="img/product/image02.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_second" src="img/product/image02.jpg"
                                    alt="">
                            </picture>
                            <span class="item-product__sale">20%</span>
                            <button class="item-product__favotite _icon-favorite"></button>
                        </a>
                        <div class="item-product__content">
                            <div class="item-product__subtitle">Куплено более 2100</div>
                            <div class="item-product__price price-product">
                                <div class="price-product__current">3.200.000 сум</div>
                                <div class="price-product__old">4.000.000 сум</div>
                            </div>
                            <a href="" class="item-product__title">Sleeve Sweatshot</a>
                            <div class="item-product__colors">
                                <a href="" class="colors-item active"><span
                                        style="background-color: #000;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #29734F;"></span></a>
                                <a href="" class="colors-item active"><span
                                        style="background-color: #332973;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #732963;"></span></a>
                            </div>
                            <div class="item-product__buttons">
                                <button class="item-product__card-button _icon-card-product"></button>
                                <a href="" class="button">{{ trans('common.details') }}</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="img/product/image01.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_first" src="img/product/image01.jpg"
                                    alt="">
                            </picture>
                            <picture>
                                <source srcset="img/product/image02.webp" type="image/webp"><img
                                    class="item-product__img item-product__img_second" src="img/product/image02.jpg"
                                    alt="">
                            </picture>
                            <span class="item-product__sale">20%</span>
                            <button class="item-product__favotite _icon-favorite"></button>
                        </a>
                        <div class="item-product__content">
                            <div class="item-product__subtitle">Куплено более 2100</div>
                            <div class="item-product__price price-product">
                                <div class="price-product__current">3.200.000 сум</div>
                                <div class="price-product__old">4.000.000 сум</div>
                            </div>
                            <a href="" class="item-product__title">Sleeve Sweatshot</a>
                            <div class="item-product__colors">
                                <a href="" class="colors-item active"><span
                                        style="background-color: #000;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #29734F;"></span></a>
                                <a href="" class="colors-item active"><span
                                        style="background-color: #332973;"></span></a>
                                <a href="" class="colors-item"><span
                                        style="background-color: #732963;"></span></a>
                            </div>
                            <div class="item-product__buttons">
                                <button class="item-product__card-button _icon-card-product"></button>
                                <a href="" class="button">{{ trans('common.details') }}</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
<style>
    .main-product__slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .popup-order {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        max-width: 400px;
        width: 100%;
    }

    .popup-content h2 {
        font-size: 28px;
        margin-top: 0;
        text-align: center;
        font-weight: 900;
        margin-bottom: 10px;
    }

    .popup-content p {
        font-size: 18px;
        margin-bottom: 20px;
        text-align: center;
    }

    .popup-content form {
        display: flex;
        flex-direction: column;
    }

    .popup-content label {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .popup-content input[type="text"],
    .popup-content input[type="tel"] {
        font-size: 16px;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #000;
    }

    .popup-content button[type="submit"] {
        font-size: 18px;
        padding: 10px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .popup-content button[type="submit"]:hover {
        background-color: #000000ba;
    }
</style>

<div id="popup_order" class="popup-order" @if (session('order_status')) style="display:block;" @endif>
    <div class="popup-content">
        @if (session('order_status'))
            <h2>{{ trans('common.application_successfully_sent') }}</h2>
        @else
            <h2>{{ trans('common.order') }}</h2>
            <p>{{ $product->name }} ({{ $product->price }})</p>
            <form action="{{ route('order') }}" method="POST">
                @csrf
                <input type="text" name="product" value="{{ $product->name }}" hidden>
                <input type="text" id="form-order-color-name" name="color" value="" hidden>
                <input type="text" id="form-order-size-name" name="size" value="" hidden>
                <input type="text" name="url" value="{{ url()->current() }}" hidden>
                <label for="name">{{ trans('common.name') }}:</label>
                <input type="text" id="name" name="name" required>
                <label for="phone">{{ trans('common.phone') }}:</label>
                <input type="tel" id="phone" name="phone" required>
                <button type="submit">{{ trans('common.send') }}</button>
            </form>
        @endif
    </div>
</div>
<script>
    window.onload = function() {
        const openPopupBtn = document.getElementById("open_popup");
        const popup = document.getElementById("popup_order");

        openPopupBtn.addEventListener("click", function() {
            popup.style.display = "block";
        });

        window.addEventListener("click", function(event) {
            if (event.target === popup) {
                popup.style.display = "none";
            }
        });
    };
    document.addEventListener('DOMContentLoaded', () => {
        const colorElements = document.querySelectorAll('[data-color-name]');
        const dataSizeName = document.querySelectorAll('[data-size-name]');
        // const formSizeName = document.querySelectorAll('[data-color-name]');

        colorElements.forEach(colorElement => {
            colorElement.addEventListener('click', () => {
                const colorName = colorElement.getAttribute('data-color-name');
                document.querySelector('#product-color-name').innerText = colorName;
                document.querySelector('#form-order-color-name').value = colorName;
            });
        });

        dataSizeName.forEach(colorElement => {
            colorElement.addEventListener('click', () => {
                const sizeName = colorElement.getAttribute('data-size-name');
                document.querySelector('#form-order-size-name').value = sizeName;
            });
        });
    });
</script>
