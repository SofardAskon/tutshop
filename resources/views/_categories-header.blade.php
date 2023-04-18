@foreach ($categories as $category)
    <li class="category-header__item">
        <a href="/shop?categories={{ $category->id }}" class="category-header__link">{{ $category->title }}</a>
        <ul class="category-header__sub-list">
            @isset($category->children)
                @foreach ($category->children as $categoryChildren)
                    <li class="category-header__sub-item">
                        <a href="/shop?categories={{ $categoryChildren->id }}" class="category-header__sub-link">
                            <div class="category-header__sub-image">
                                {{-- <picture><source srcset="{{ asset('assets/img/header/category-header01.webp') }}" type="image/webp"><img src="{{ asset('assets/img/header/category-header01.png') }}"alt=""></picture> --}}
                            </div>
                            <div>{{ $categoryChildren->title }}</div>
                        </a>
                    </li>
                @endforeach
            @endisset
        </ul>
    </li>
@endforeach
