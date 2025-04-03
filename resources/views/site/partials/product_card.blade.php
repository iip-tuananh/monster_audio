<product-card
        class="product-card product-card--show-secondary-media bg-custom text-custom"
        style="--background: 255 255 255; --text-color: 26 26 26;">
    @if($product->state == 2)
        <div class="product-card__badge-list">
            <sold-out-badge class="badge badge--sold-out">Hết hàng</sold-out-badge>
        </div>
    @endif

    <div class="product-card__figure">
        <a href="/products/monster-flame" data-instant="">
            @php
                $sizes = [200, 300, 400, 500, 600, 700, 800, 1000];

                $srcset = collect($sizes)->map(function($size) use ($product) {
                    return (@$product->image->path ?? '' ). "?width={$size} {$size}w";
                })->implode(', ');
            @endphp
            <img
                    src="{{ @$product->image->path ?? '' }}?width=1000"
                    alt="{{ $product->name }}"
                    srcset="{{ $srcset }}"
                    width="1000" height="1000" loading="lazy"
                    sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 1200px) calc(100vw / 3 - 64px), calc((100vw - 96px) / 3 - (24px / 3 * 2))"
                    class="product-card__image product-card__image--primary  aspect-square">

            @if(isset($product->galleries) && count($product->galleries))
                @php
                    $gallery = $product->galleries[0];

                     $srcsetGallery = collect($sizes)->map(function($size) use ($gallery) {
                    return $gallery->image->path . "?width={$size} {$size}w";
                })->implode(', ');
                @endphp
                <img
                        src="{{ $gallery->image->path  }}?width=1000"
                        alt="{{ $product->name }}"
                        srcset="{{ $srcsetGallery }}"
                        width="1000" height="1000" loading="lazy"
                        class="product-card__image product-card__image--secondary object-fill" fetchpriority="low"
                        sizes="(max-width: 699px) calc(100vw / 2 - 40px), (max-width: 1200px) calc(100vw / 3 - 64px), calc((100vw - 96px) / 3 - (24px / 3 * 2))">
            @endif


        </a>
    </div>
    <div class="product-card__info ">
        <div class="v-stack gap-0.5 w-full "><span class="product-card__title"><a
                        href="/products/monster-decora" class="bold"
                        data-instant>{{ $product->name }}</a></span>
            <price-list class="price-list  ">
                <sale-price class="text-subdued">
                    <span class="sr-only">Sale price</span>{{ formatCurrency($product->price) }} đ
                </sale-price>
            </price-list>
        </div>

        <div data-bv-show="inline_rating" data-bv-product-id="4551791378563"
             data-bv-redirect-url="/products/monster-decora" data-bv-seo="false"></div>

    </div>
</product-card>
