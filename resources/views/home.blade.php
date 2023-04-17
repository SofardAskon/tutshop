@extends('layout')

@section('content')
    <section class="page__discounts discounts">
        <div class="discounts__container">
            <div class="discounts__body">
                <div class="discounts__slider swiper">
                    <div class="discounts__wrapper swiper-wrapper">
                        @foreach ($slider as $slide)
                            <div class="discounts__slide swiper-slide slide-discounts">
                                <div class="slide-discounts__content">
                                    <h3 class="slide-discounts__title">{{ $slide->title }}</h3>
                                    <div class="slide-discounts__text">{{ $slide->description }}</div>
                                    <a href="{{ $slide->url }}" class="slide-discounts__link button">ПОДРОБНЕЕ</a>
                                </div>

                                <div class="slide-discounts__image-ibg">
                                    @foreach ($slide->downloads as $index => $downloadItem)
                                        @if ($index == 0)
                                            <img src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="#">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="discounts__pagination pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="discounts-small">
        <div class="discounts-small__container">
            <div class="discounts-small__body">
                <div class="discounts-small__item">10% скидка на одежду </div>
                <div class="discounts-small__item">дополнительная скидка 20%</div>
            </div>
        </div>
    </section>

    <section class="page__category category">
        <div class="category__container">
            <div class="category__body">
                <div class="category__top">
                    <h4 class="category__title">Категории</h4>
                </div>
                <a href="" class="category__link">Смотреть все</a>
                <div class="category__items">
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image01.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image1.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Женская одежда</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image02.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image2.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Детская одежда</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image03.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image3.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Обувь</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image04.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image4.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Аксуссуары</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image05.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image5.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Сумки</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image06.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image6.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Мужская одежда</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image07.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image7.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Электроника</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image08.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image8.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Детские товары</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image09.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image9.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Товары для дома</div>
                    </a>
                    <a href="" class="category__item item-category">
                        <div class="item-category__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/category/image10.png') }}"
                                    media="(min-width: 768.98px)">
                                <img src="{{ asset('assets/img/category/image110.png') }}" alt="">
                            </picture>
                        </div>
                        <div class="item-category__title">Акции</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">Новое поступление</div>
                    <a href="" class="product-section__link">Смотреть все</a>
                </div>
                <div class="products-items">
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="page__banners banners-page">
        <div class="banners-page__container">
            <div class="banners-page__body">
                <a href="" class="banners-page__item">
                    <div class="banners-page__title">Одежда</div>
                    <div class="banners-page__title banners-page__title_mt">Скидки на все</div>
                    <div class="banners-page__num">30%</div>
                    <picture>
                        <source srcset="{{ asset('assets/img/banners/image1.webp') }}" type="image/webp"><img
                            src="{{ asset('assets/img/banners/image1.jpg') }}" class="banners-page__image"
                            alt="">
                    </picture>
                </a>
                <a href="" class="banners-page__item">
                    <div class="banners-page__title">Акция на аксессуары Apple</div>
                    <div class="banners-page__text">это замечательная возможность совершить выгодную покупку и
                        получить в качестве бонуса подарок или скидку</div>
                    <picture>
                        <source srcset="{{ asset('assets/img/banners/image2.webp') }}" type="image/webp"><img
                            src="{{ asset('assets/img/banners/image2.jpg') }}" class="banners-page__image"
                            alt="">
                    </picture>
                </a>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">Товары со скидкой</div>
                    <a href="" class="product-section__link">Смотреть все</a>
                </div>
                <div class="products-items">
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="page__sales">
        <div class="sales__container">
            <div class="sales__body">
                <a href="" class="sales__item item-sales">
                    <div class="item-sales__title">Одежда</div>
                    <div class="item-sales__number">30%</div>
                    <picture>
                        <source srcset="{{ asset('assets/img/sales/image1.webp') }}" type="image/webp"><img
                            src="{{ asset('assets/img/sales/image1.jpg') }}" alt="" class="item-sales__image">
                    </picture>
                </a>
                <a href="" class="sales__item item-sales">
                    <div class="item-sales__title">Одежда</div>
                    <div class="item-sales__number">50%</div>
                    <picture>
                        <source srcset="{{ asset('assets/img/sales/image2.webp') }}" type="image/webp"><img
                            src="{{ asset('assets/img/sales/image2.jpg') }}" alt="" class="item-sales__image">
                    </picture>
                </a>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">Вы смотрели</div>
                    <a href="" class="product-section__link">Смотреть все</a>
                </div>
                <div class="products-items">
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_first"
                                    src="{{ asset('assets/img/product/image01.jpg') }}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image02.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img_second"
                                    src="{{ asset('assets/img/product/image02.jpg') }}" alt="">
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
                                <a href="" class="button">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
