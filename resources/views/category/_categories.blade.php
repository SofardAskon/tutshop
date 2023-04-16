@foreach ($categories as $categoryItem)
    <option value="{{ $categoryItem->id ?? '' }}"
        @isset($category->id)
            @if ($category->paret_id == $categoryItem->id)
                selected=""
            @endif
            @if ($category->id == $categoryItem->id)
                selected=""
            @endif
        @endisset>
        {{ $delimiter ?? '' }}{{ $categoryItem->title ?? '' }}
    </option>

    @isset($categoryItem->children)
        @include('category._categories', [
            'categories' => $categoryItem->children,
            'delimiter' => ' - ' . $delimiter,
        ])
    @endisset
@endforeach
