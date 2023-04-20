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
                    <h4 class="category__title">{{ trans('common.categories') }}</h4>
                </div>
                <a href="" class="category__link">{{ trans('common.see_all') }}</a>
                <div class="category__items">
                    @foreach ($categories as $categoryItem)
                        <a href="/shop?categories={{ $categoryItem->id }}" class="category__item item-category">
                            <div class="item-category__image">
                                @foreach ($categoryItem->downloads as $index => $downloadItem)
                                    @if ($index == 0)
                                        <img src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="#" width="70">
                                    @endif
                                @endforeach
                            </div>
                            <div class="item-category__title">{{ $categoryItem->title }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">{{ trans('common.new_arrival') }}</div>
                    <a href="{{ route('shop') }}" class="product-section__link">{{ trans('common.see_all') }}</a>
                </div>
                <div class="products-items">
                    @foreach ($products as $index => $product)
                        @if ($index <= 3)
                            <article class="products-items__item item-product">
                                <a href="{{ route('product', $product->id) }}" class="item-product__image">
                                    @foreach ($product->downloads as $index => $downloadItem)
                                        @if ($index == 0)
                                            <img class="item-product__img item-product__img_first" src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="" style="object-fit:cover;">
                                        @endif
                                    @endforeach
                                    @foreach ($product->downloads as $index => $downloadItem)
                                        @if ($index == 0)
                                            <img class="item-product__img item-product__img_first" src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="" style="object-fit:cover;">
                                        @endif
                                    @endforeach
                                    @if ($product->old_price)
                                        @php
                                            $discount = 100 - ($product->price / $product->old_price) * 100;
                                        @endphp
                                        <span class="item-product__sale">{{ round($discount) }}%</span>
                                    @endif
                                    {{-- <button class="item-product__favotite _icon-favorite"></button> --}}
                                </a>
                                <div class="item-product__content">
                                    {{-- <div class="item-product__subtitle">Куплено более 2100</div> --}}
                                    <div class="item-product__price price-product">
                                        <div class="price-product__current">{{ $product->price }} сум</div>
                                        @if ($product->old_price)
                                            <div class="price-product__old">{{ $product->old_price }} сум</div>
                                        @endif
                                    </div>
                                    <a href="{{ route('product', $product->id) }}" class="item-product__title">{{ $product->name }}</a>
                                    <div class="item-product__colors">
                                        {{-- <a href="" class="colors-item active"><span style="background-color: #000;"></span></a> --}}
                                        @foreach ($product->colors as $color)
                                            <a href="#" class="colors-item"><span style="background-color: {{ $color->hex_code }};"></span></a>
                                        @endforeach
                                    </div>
                                    <div class="item-product__buttons">
                                        {{-- <button class="item-product__card-button _icon-card-product"></button> --}}
                                        <a href="{{ route('product', $product->id) }}" class="button">ПОДРОБНЕЕ</a>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach

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
                        <source srcset="{{ asset('assets/img/banners/image1.webp') }}" type="image/webp"><img src="{{ asset('assets/img/banners/image1.jpg') }}" class="banners-page__image" alt="">
                    </picture>
                </a>
                <a href="" class="banners-page__item">
                    <div class="banners-page__title">Акция на аксессуары Apple</div>
                    <div class="banners-page__text">это замечательная возможность совершить выгодную покупку и
                        получить в качестве бонуса подарок или скидку</div>
                    <picture>
                        <source srcset="{{ asset('assets/img/banners/image2.webp') }}" type="image/webp"><img src="{{ asset('assets/img/banners/image2.jpg') }}" class="banners-page__image" alt="">
                    </picture>
                </a>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">{{ trans('common.items_on_sale') }}</div>
                    <a href="{{ route('shop') }}" class="product-section__link">{{ trans('common.see_all') }}</a>
                </div>
                <div class="products-items">
                    @foreach ($products as $index => $product)
                        @if ($index <= 3 && $product->old_price !== null)
                            <article class="products-items__item item-product">
                                <a href="{{ route('product', $product->id) }}" class="item-product__image">
                                    @foreach ($product->downloads as $index => $downloadItem)
                                        @if ($index == 0)
                                            <img class="item-product__img item-product__img_first" src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="" style="object-fit:cover;">
                                        @endif
                                    @endforeach
                                    @foreach ($product->downloads as $index => $downloadItem)
                                        @if ($index == 0)
                                            <img class="item-product__img item-product__img_first" src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="" style="object-fit:cover;">
                                        @endif
                                    @endforeach
                                    @if ($product->old_price)
                                        @php
                                            $discount = 100 - ($product->price / $product->old_price) * 100;
                                        @endphp
                                        <span class="item-product__sale">{{ round($discount) }}%</span>
                                    @endif
                                    {{-- <button class="item-product__favotite _icon-favorite"></button> --}}
                                </a>
                                <div class="item-product__content">
                                    {{-- <div class="item-product__subtitle">Куплено более 2100</div> --}}
                                    <div class="item-product__price price-product">
                                        <div class="price-product__current">{{ $product->price }} сум</div>
                                        @if ($product->old_price)
                                            <div class="price-product__old">{{ $product->old_price }} сум</div>
                                        @endif
                                    </div>
                                    <a href="{{ route('product', $product->id) }}" class="item-product__title">{{ $product->name }}</a>
                                    <div class="item-product__colors">
                                        {{-- <a href="" class="colors-item active"><span style="background-color: #000;"></span></a> --}}
                                        @foreach ($product->colors as $color)
                                            <a href="#" class="colors-item"><span style="background-color: {{ $color->hex_code }};"></span></a>
                                        @endforeach
                                    </div>
                                    <div class="item-product__buttons">
                                        {{-- <button class="item-product__card-button _icon-card-product"></button> --}}
                                        <a href="{{ route('product', $product->id) }}" class="button">ПОДРОБНЕЕ</a>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="page__sales">
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
    </section> --}}

    {{-- <section class="product-section">
        <div class="product-section__container">
            <div class="product-section__body">
                <div class="product-section__top">
                    <div class="product-section__title">Вы смотрели</div>
                    <a href="{{route('shop')}}" class="product-section__link">{{ trans('common.see_all') }}</a>
                </div>
                <div class="products-items">
                    <article class="products-items__item item-product">
                        <a href="" class="item-product__image">
                            <picture>
                                <source srcset="{{ asset('assets/img/product/image01.webp') }}" type="image/webp"><img
                                    class="item-product__img item-product__img-first"
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
    </section> --}}
@endsection
