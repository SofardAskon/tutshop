@foreach ($categories as $categoryItem)
    <option value="{{ $categoryItem->id ?? '' }}"
        @isset($product->id)

        @if ($product->categories->contains('id', $categoryItem->id))
            @selected(true)
        @endif
        
        @endisset>
        {{ $delimiter ?? '' }}{{ $categoryItem->title ?? '' }}
    </option>

    @isset($categoryItem->children)
        @include('admin.product._categories', [
            'categories' => $categoryItem->children,
            'delimiter' => ' - ' . $delimiter,
        ])
    @endisset
@endforeach
