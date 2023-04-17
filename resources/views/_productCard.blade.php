@foreach ($products as $product)
    <article class="products-items__item item-product">
        <a href="{{ route('product', $product->id) }}" class="item-product__image">
            @foreach ($product->downloads as $index => $downloadItem)
                @if ($index == 0)
                    <img class="item-product__img item-product__img_first"
                        src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="" style="object-fit:cover;">
                @endif
            @endforeach
            @foreach ($product->downloads as $index => $downloadItem)
                @if ($index == 0)
                    <img class="item-product__img item-product__img_first"
                        src="{{ asset('storage') . '/' . $downloadItem->path }}" alt="" style="object-fit:cover;">
                @endif
            @endforeach
            @php
                $discount = 100 - ($product->price / $product->old_price) * 100;
            @endphp
            <span class="item-product__sale">{{ round($discount) }}%</span>
            {{-- <button class="item-product__favotite _icon-favorite"></button> --}}
        </a>
        <div class="item-product__content">
            {{-- <div class="item-product__subtitle">Куплено более 2100</div> --}}
            <div class="item-product__price price-product">
                <div class="price-product__current">{{ $product->price }} сум</div>
                <div class="price-product__old">{{ $product->old_price }} сум</div>
            </div>
            <a href="{{ route('product', $product->id) }}" class="item-product__title">{{ $product->name }}</a>
            <div class="item-product__colors">
                {{-- <a href="" class="colors-item active"><span style="background-color: #000;"></span></a> --}}
                @foreach ($product->colors as $color)
                    <a href="#" class="colors-item"><span
                            style="background-color: {{ $color->hex_code }};"></span></a>
                @endforeach
            </div>
            <div class="item-product__buttons">
                {{-- <button class="item-product__card-button _icon-card-product"></button> --}}
                <a href="{{ route('product', $product->id) }}" class="button">ПОДРОБНЕЕ</a>
            </div>
        </div>
    </article>
@endforeach
@if (!sizeof($products))
    <div class="product-not-found">
        <h2>Ничего не найдено!</h2>
        <a href="{{ route('shop') }}">Показать все товары</a>
    </div>
@endif
