@foreach ($sizes as $sizeItem)
    <option value="{{ $sizeItem->id ?? '' }}"
        @isset($product->id)

        @if ($product->sizes->contains('id', $sizeItem->id))
            @selected(true)
        @endif
        
        @endisset>
        {{ $sizeItem->name ?? '' }}
    </option>
@endforeach
