@foreach ($categories as $category)
    <button type="button" data-spoller class="spollers-sub__title _icon-arrow-down">{{ $category->title }}</button>
    <ul class="spollers-sub__body">
        @isset($category->children)
            @foreach ($category->children as $categoryChildren)
                <li class="spollers-sub__line"><a href="{{ route('shop.category', ['id' => $categoryChildren->id]) }}">{{ $categoryChildren->title }}</a></li>

                @foreach ($categoryChildren->children as $categoryChildrenThree)
                    <li class="spollers-sub__line"><a href="{{ route('shop.category', ['id' => $categoryChildrenThree->id]) }}">{{ $categoryChildrenThree->title }}</a>
                    </li>
                @endforeach
            @endforeach
        @endisset
    </ul>
@endforeach
