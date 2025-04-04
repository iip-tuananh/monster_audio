<product-card
        class="product-card product-card--show-secondary-media bg-custom text-custom"
        style="--background: 255 255 255; --text-color: 26 26 26;">
    @if($product->state == 2)
        <div class="product-card__badge-list">
            <sold-out-badge class="badge badge--sold-out">Hết hàng</sold-out-badge>
        </div>
    @endif

    <div class="product-card__figure">
        <a data-instant="">
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

            <div class="product-card__quick-buy">
                <form  action="#" id=""
                      accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" is="product-form">
                    <input type="hidden" name="form_type" value="product"
                    ><input type="hidden" name="utf8" value="✓"><input type="hidden" name="id" value="39466293067934">

                    <div class="pointer-fine:hidden">
                        <button type="submit" is="custom-button" class="product-card__mobile-quick-buy-button" aria-label="+ Quick add"><div><svg role="presentation" fill="none" stroke-width="2" focusable="false" width="16" height="14" class="icon icon-quick-buy-cart" viewBox="0 0 16 14">
                                    <path d="M7.75 4.75H2.283a1 1 0 0 0-.97 1.244l1.574 6.25a1 1 0 0 0 .97.756h7.787a1 1 0 0 0 .97-.756l1.573-6.25a1 1 0 0 0-.97-1.244H7.75Zm0 0V1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></div><span class="button__loader">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                  </span></button>
                    </div>

                    <div class="pointer-coarse:hidden">
                        <button type="button" class="button" is="custom-button"
                                data-image="{{ $product->image->path ?? '' }}"
                                data-price="{{ $product->price }}"
                                data-name="{{ $product->name }}"
                                ng-click="addToCart({{ $product->id }},  $event)">
                            <div>+ Quick add</div>
                            <span class="button__loader">
                            <span></span>
                            <span></span>
                            <span></span>
                          </span></button></div>
                    <input type="hidden" name="product-id" value="6602208936094"><input type="hidden" name="section-id" value="template--17549462175902__main"></form>
            </div>
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
