@foreach ($colors as $colorItem)
    <option value="{{ $colorItem->id ?? '' }}"
        @isset($product->id)

        @if ($product->colors->contains('id', $colorItem->id))
            @selected(true)
        @endif
        
        @endisset>
        {{ $colorItem->name ?? '' }}
    </option>
@endforeach
