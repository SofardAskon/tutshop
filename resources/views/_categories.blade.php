@foreach ($categories as $category)
    <li class="content-catalog__item">
        <a href="/shop?categories={{ $category->id }}" class="content-catalog__link">
            {{-- <div class="content-catalog__ico"><img src="{{ asset('assets/img/header/catalog1.svg') }}" alt=""></div> --}}
            <span class="_icon-arrow-down">{{ $category->title }}</span>
        </a>
        <div class="content-catalog__wrap wrap-content-catalog" data-simplebar>
            <a href="/shop?categories={{ $category->id }}" class="wrap-content-catalog__title">{{ $category->title }}
                {{-- <small>125338 товаров</small> --}}
            </a>
            <div class="wrap-content-catalog__body">
                <ul class="content-catalog__sub-list">
                    @isset($category->children)
                        @foreach ($category->children as $categoryChildren)
                            <a href="/shop?categories={{ $categoryChildren->id }}"
                                class="content-catalog__sub-title">{{ $categoryChildren->title }}</a>
                            @foreach ($categoryChildren->children as $categoryChildrenThree)
                                <li class="content-catalog__sub-item"><a
                                        href="/shop?categories={{ $categoryChildrenThree->id }}"
                                        class="content-catalog__sub-link">{{ $categoryChildrenThree->title }}</a></li>
                            @endforeach
                        @endforeach
                    @endisset
                </ul>
            </div>
        </div>
    </li>
@endforeach
