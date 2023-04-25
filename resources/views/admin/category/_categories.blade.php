@foreach ($categories as $categoryItem)
    @if (isset($category) && !empty($category) && $category->id == $categoryItem->id)
        @continue
    @endif
    <option value="{{ $categoryItem->id ?? '' }}" @isset($category->parent_id)
        @if ($category->parent_id == $categoryItem->id)
            selected
        @endif
    @endisset>
        {{ $delimiter ?? '' }}{{ $categoryItem->title ?? '' }}
    </option>

    @isset($categoryItem->children)
        @include('admin.category._categories', [
            'categories' => $categoryItem->children,
            'delimiter' => ' - ' . $delimiter,
        ])
    @endisset
@endforeach
