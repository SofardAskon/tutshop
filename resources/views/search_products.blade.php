@extends('layout')

@section('content')
    <section class="page__catalog catalog-page">
        <div class="catalog-page__container">
            <div class="catalog-page__body">
                <div class="catalog-page__filter filter-catalog-page">
                    <ul class="filter-catalog-page__categoty">
                        @foreach ($categories as $categoryItem)
                            <li class="filter-catalog-page__item-category" data-id="{{ $categoryItem->id }}"><a href="{{ route('shop.category', ['id' => $categoryItem->id]) }}">{{ $categoryItem->title }}</a>
                            </li>
                        @endforeach
                    </ul>
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
