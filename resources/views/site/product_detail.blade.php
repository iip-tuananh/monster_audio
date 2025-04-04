@extends('site.layouts.master')
@section('title')

@endsection

@section('css')
    <style>
        /* Phần bao bên ngoài */
        .sort-container {
            display: inline-block;
            font-family: sans-serif; /* Hoặc font bạn muốn */
        }

        /* Label "Sort by:" */
        .sort-container label {
            font-weight: bold;
            margin-right: 8px;
        }

        /* Select chính */
        .sort-select {
            /* Kích thước, padding, border... */
            font-size: 14px;
            padding: 6px 8px;
            min-width: 180px;
            border: 1px solid #ccc;
            border-radius: 4px;

            /* Xóa kiểu mặc định của trình duyệt (mũi tên, background...) */
            appearance: none;
            -moz-appearance: none; /* Firefox */
            -webkit-appearance: none; /* Safari & Chrome */

            /* Nền trắng + icon mũi tên */
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg%20width%3D'8'%20height%3D'6'%20viewBox%3D'0%200%208%206'%20xmlns%3D'http%3A//www.w3.org/2000/svg'%3E%3Cpath%20d%3D'm1%201.5%203%203%203-3'%20fill%3D'none'%20stroke%3D'%23333'%20stroke-width%3D'1.5'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 8px 6px;

            /* Con trỏ chuột + hiệu ứng focus */
            cursor: pointer;
        }

        .sort-select:focus {
            outline: none;
            border-color: #999;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }


    </style>
@endsection

@section('content')
    <div ng-controller="productDetail">
        <section id="shopify-section-template--17549462929566__main"
                 class="shopify-section shopify-section--main-product">
            <style>
                #shopify-section-template--17549462929566__main {
                    --section-background-hash: 054922020920008346060000003430673;
                }

                #shopify-section-template--17549462929566__main + * {
                    --previous-section-background-hash: 054922020920008346060000003430673;
                }</style>
            <style>
                #shopify-section-template--17549462929566__main {
                    --product-grid: auto / minmax(0, 1fr);
                    --product-gallery-media-list-grid: auto / auto-flow 100%;
                    --product-gallery-media-list-gap: var(--spacing-0-5);
                }

                @media screen and (max-width: 999px) {
                    #shopify-section-template--17549462929566__main {
                        --section-spacing-block-start: 0px;
                    }
                }

                @media screen and (min-width: 1000px) {
                    #shopify-section-template--17549462929566__main {
                        --product-grid: auto / minmax(0, 1.1fr) minmax(0, 0.9fr);
                        --product-gallery-media-list-grid: auto / auto-flow 100%;
                        --product-gallery-media-list-gap: calc(var(--grid-gutter) / 2);
                    }
                }

                @media screen and (min-width: 1400px) {
                    #shopify-section-template--17549462929566__main {
                        --product-gallery-media-list-gap: var(--grid-gutter);
                    }
                }
            </style>

            <div class="section section--tight  section-full bg-custom" style="--background: 255 255 255;">
                <div class="product">
                    <product-gallery form="product-form-7493354127518-template--17549462929566__main" allow-zoom="3"
                                     class="product-gallery product-gallery--mobile-dots product-gallery--desktop-carousel product-gallery--desktop-thumbnails-left product-gallery--mobile-expanded">
                        <div class="product-gallery__ar-wrapper">
                            <div class="product-gallery__media-list-wrapper">
                                <custom-cursor class="product-gallery__cursor" style="translate: 611.5px 583.406px;">
                                    <div class="circle-button circle-button--fill circle-button--lg">
                                        <svg role="presentation" focusable="false" width="7" height="10"
                                             class="icon icon-chevron-right" viewBox="0 0 7 10">
                                            <path d="m1 9 4-4-4-4" fill="none" stroke="currentColor"
                                                  stroke-width="2"></path>
                                        </svg>
                                    </div>
                                </custom-cursor>
                                <media-carousel desktop-mode="carousel_thumbnails_left" adaptive-height=""
                                                initial-index="0"
                                                id="product-gallery-7493354127518-template--17549462929566__main"
                                                class="product-gallery__media-list full-bleed scroll-area md:unbleed is-scrollable"
                                >

                                    @php
                                        $sizes = [200, 300, 400, 500, 600];
                                    @endphp

                                    @if(isset($product->galleries) && count($product->galleries))
                                        @foreach($product->galleries as $key => $gallery)
                                            @php
                                                $srcsetGallery = collect($sizes)->map(function($size) use ($gallery) {
                                               return $gallery->image->path . "?width={$size} {$size}w";
                                           })->implode(', ');
                                            @endphp


                                            <div class="product-gallery__media snap-center is-selected"
                                                 data-media-type="image" data-media-id="28292814438558">
                                                <img src="{{ @$product->image->path ?? '' }}?width=660"
                                                     alt="{{ $product->name }}" srcset="{{ $srcsetGallery }}"
                                                     width="660" height="660" loading="eager" fetchpriority="high"
                                                     sizes="(max-width: 740px) calc(100vw - 40px), (max-width: 999px) calc(100vw - 64px), min(730px, 40vw)"
                                                     class="rounded">
                                            </div>
                                        @endforeach

                                    @endif


                                </media-carousel>
                                <div class="product-gallery__zoom ">
                                    <button type="button" is="product-zoom-button"
                                            class="circle-button circle-button--fill ring">
                                        <span class="sr-only">Zoom</span>
                                        <svg role="presentation" fill="none" stroke-width="2" focusable="false"
                                             width="15" height="15" class="icon icon-image-zoom" viewBox="0 0 15 15">
                                            <circle cx="7.067" cy="7.067" r="6.067" stroke="currentColor"></circle>
                                            <path d="M11.4 11.4 14 14" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M7 4v6M4 7h6" stroke="currentColor"></path>
                                        </svg>
                                    </button>
                                </div>
                                <page-dots class="page-dots page-dots--blurred md:hidden"
                                           aria-controls="product-gallery-7493354127518-template--17549462929566__main">
                                    @if(isset($product->galleries) && count($product->galleries))
                                        @foreach($product->galleries as $key => $gallery)
                                            <button type="button" class="tap-area"
                                                    aria-current="{{$key == 0 ? true : false}}">
                                                <span class="sr-only">Go to item {{ $key + 1 }}</span>
                                            </button>
                                        @endforeach
                                    @endif
                                </page-dots>
                            </div>
                        </div>
                        <scroll-shadow class="product-gallery__thumbnail-list-wrapper">
                            <page-dots align-selected=""
                                       class="product-gallery__thumbnail-list scroll-area bleed md:unbleed"
                                       aria-controls="product-gallery-7493354127518-template--17549462929566__main">
                                @php
                                    $sizes = [56, 64, 112, 128, 168, 192];
                                @endphp

                                @if(isset($product->galleries) && count($product->galleries))
                                    @foreach($product->galleries as $key => $gallery)
                                        @php
                                            $srcsetGallery = collect($sizes)->map(function($size) use ($gallery) {
                                           return $gallery->image->path . "?width={$size} {$size}w";
                                       })->implode(', ');
                                        @endphp

                                        <button type="button" class="product-gallery__thumbnail"
                                                aria-current="{{ $key == 0 ? true : false }}"
                                                aria-label="Go to item {{$key + 1}}">
                                            <img src="{{ @$product->image->path ?? '' }}?width=660"
                                                 alt="{{ $product->name }}"
                                                 srcset="{{ $srcsetGallery }}" width="660" height="660" loading="lazy"
                                                 sizes="(max-width: 699px) 56px, 64px"
                                                 class="object-contain rounded-sm">
                                        </button>

                                    @endforeach

                                @endif


                            </page-dots>
                        </scroll-shadow>
                    </product-gallery>
                    <safe-sticky class="product-info" style="top: 114px;">
                        <div class="product-info__vendor">
                            <a href="/collections/vendors?q=Roller%20360%2C%20delivers%20a%20full%20360%20degree%20sound.%20It%20delivers%20up%20to%20240%20Watts"
                               class=" link-faded"
                            >{{ $product->category->name ?? '' }}</a></div>
                        <h1 class="product-info__title h2"> {{ $product->name }}</h1>
                        <div class="product-info__price">
                            <div class="rating-with-text">
                                <price-list role="region" aria-live="polite" class="price-list price-list--lg ">
                                    <sale-price form="product-form-7493354127518-template--17549462929566__main"
                                                class="text-lg">
                                        <span class="sr-only">Sale price</span>{{ formatCurrency($product->price) }} đ
                                    </sale-price>

                                    <compare-at-price form="product-form-7493354127518-template--17549462929566__main"
                                                      hidden="" class="text-subdued line-through">
                                        <span class="sr-only">Regular price</span></compare-at-price>
                                    <unit-price form="product-form-7493354127518-template--17549462929566__main"
                                                hidden="" class="text-subdued">(/)
                                    </unit-price>
                                </price-list>
                                <div class="product-info__badge-list">
                                    @if($product->state == 2)
                                        <sold-out-badge form="product-form-7493354127518-template--17549462929566__main"
                                                        class="badge badge--sold-out">Hết hàng
                                        </sold-out-badge>
                                    @endif
                                    <on-sale-badge hidden="" discount-mode="saving"
                                                   form="product-form-7493354127518-template--17549462929566__main"
                                                   class="badge badge--on-sale">Save $-279.99
                                    </on-sale-badge>
                                </div>
                            </div>
                        </div>
                        <div id="shopify-block-ANVNlMEo1dnp2MnptL__bazaarvoice_reviews_photos_rating_summary_block_tm7jzE"
                             class="shopify-block shopify-app-block">
                            <div data-bv-show="rating_summary" data-bv-product-id="7493354127518" data-bv-ready="true">
                                <div class="bv_main_container">
                                    <meta itemprop="bestRating" content="5">
                                    <span itemprop="itemReviewed" itemscope="true"
                                          itemtype="https://schema.org/IndividualProduct"
                                          class="bv_microdata_hidden"><span
                                                itemprop="name">Rockin Roller 360</span></span>
                                    <style>/* == START CLEANSLATE == */

                                        [data-bv-show="rating_summary"] a,
                                        [data-bv-show="rating_summary"] span,
                                        [data-bv-show="rating_summary"] div,
                                        [data-bv-show="rating_summary"] svg,
                                        [data-bv-show="rating_summary"] path,
                                        [data-bv-show="rating_summary"] polygon,
                                        [data-bv-show="rating_summary"] button {
                                            background-attachment: scroll !important;
                                            background-color: transparent !important;
                                            background-image: none !important; /* This rule affects the use of pngfix JavaScript http://dillerdesign.com/experiment/DD_BelatedPNG for IE6, which is used to force the browser to recognise alpha-transparent PNGs files that replace the IE6 lack of PNG transparency. (The rule overrides the VML image that is used to replace the given CSS background-image). If you don't know what that means, then you probably haven't used the pngfix script, and this comment may be ignored :) */
                                            background-position: 0 0 !important;
                                            background-repeat: repeat !important;
                                            border-color: black !important;
                                            border-color: currentColor !important; /* `border-color` should match font color. Modern browsers (incl. IE9) allow the use of "currentColor" to match the current font 'color' value <http://www.w3.org/TR/css3-color/#currentcolor>. For older browsers, a default of 'black' is given before this rule. Guideline to support older browsers: if you haven't already declared a border-color for an element, be sure to do so, e.g. when you first declare the border-width. */
                                            border-radius: 0 !important;
                                            border-style: none !important;
                                            border-width: medium !important;
                                            bottom: auto !important;
                                            clear: none !important;
                                            clip: auto !important;
                                            color: inherit !important;
                                            counter-increment: none !important;
                                            counter-reset: none !important;
                                            cursor: auto !important;
                                            direction: inherit !important;
                                            display: inline !important;
                                            float: none !important;
                                            font-family: inherit !important; /* As with other inherit values, this needs to be set on the root container element */
                                            font-size: inherit !important;
                                            font-style: inherit !important;
                                            font-variant: normal !important;
                                            font-weight: inherit !important;
                                            height: auto !important;
                                            left: auto !important;
                                            letter-spacing: normal !important;
                                            line-height: inherit !important;
                                            list-style-type: inherit !important; /* Could set list-style-type to none */
                                            list-style-position: outside !important;
                                            list-style-image: none !important;
                                            margin: 0 !important;
                                            max-height: none !important;
                                            max-width: none !important;
                                            min-height: 0 !important;
                                            min-width: 0 !important;
                                            opacity: 1;
                                            outline: invert none medium !important;
                                            overflow: visible !important;
                                            padding: 0 !important;
                                            position: static !important;
                                            quotes: "" "" !important;
                                            right: auto !important;
                                            table-layout: auto !important;
                                            text-align: inherit !important;
                                            text-decoration: inherit !important;
                                            text-indent: 0 !important;
                                            text-transform: none !important;
                                            top: auto !important;
                                            unicode-bidi: normal !important;
                                            vertical-align: baseline !important;
                                            visibility: inherit !important;
                                            white-space: normal !important;
                                            width: auto !important;
                                            word-spacing: normal !important;
                                            z-index: auto !important;

                                            /* CSS3 */
                                            /* Including all prefixes according to http://caniuse.com/ */
                                            /* CSS Animations don't cascade, so don't require resetting */
                                            -webkit-background-origin: padding-box !important;
                                            background-origin: padding-box !important;
                                            -webkit-background-clip: border-box !important;
                                            background-clip: border-box !important;
                                            -webkit-background-size: auto !important;
                                            -moz-background-size: auto !important;
                                            background-size: auto !important;
                                            -webkit-border-image: none !important;
                                            -moz-border-image: none !important;
                                            -o-border-image: none !important;
                                            border-image: none !important;
                                            -webkit-border-radius: 0 !important;
                                            -moz-border-radius: 0 !important;
                                            border-radius: 0 !important;
                                            -webkit-box-sizing: content-box !important;
                                            -moz-box-sizing: content-box !important;
                                            box-sizing: content-box !important;
                                            -webkit-column-count: auto !important;
                                            -moz-column-count: auto !important;
                                            column-count: auto !important;
                                            -webkit-column-gap: normal !important;
                                            -moz-column-gap: normal !important;
                                            column-gap: normal !important;
                                            -webkit-column-rule: medium none black !important;
                                            -moz-column-rule: medium none black !important;
                                            column-rule: medium none black !important;
                                            -webkit-column-span: 1 !important;
                                            -moz-column-span: 1 !important; /* doesn't exist yet but probably will */
                                            column-span: 1 !important;
                                            -webkit-column-width: auto !important;
                                            -moz-column-width: auto !important;
                                            column-width: auto !important;
                                            font-feature-settings: normal !important;
                                            overflow-x: visible !important;
                                            overflow-y: visible !important;
                                            -webkit-hyphens: manual !important;
                                            -moz-hyphens: manual !important;
                                            hyphens: manual !important;
                                            -webkit-perspective: none !important;
                                            -moz-perspective: none !important;
                                            -ms-perspective: none !important;
                                            -o-perspective: none !important;
                                            perspective: none !important;
                                            -webkit-perspective-origin: 50% 50% !important;
                                            -moz-perspective-origin: 50% 50% !important;
                                            -ms-perspective-origin: 50% 50% !important;
                                            -o-perspective-origin: 50% 50% !important;
                                            perspective-origin: 50% 50% !important;
                                            -webkit-backface-visibility: visible !important;
                                            -moz-backface-visibility: visible !important;
                                            -ms-backface-visibility: visible !important;
                                            -o-backface-visibility: visible !important;
                                            backface-visibility: visible !important;
                                            text-shadow: none !important;
                                            -webkit-transition: all 0s ease 0s !important;
                                            transition: all 0s ease 0s !important;
                                            -webkit-transform: none !important;
                                            -moz-transform: none !important;
                                            -ms-transform: none !important;
                                            -o-transform: none !important;
                                            transform: none !important;
                                            -webkit-transform-origin: 50% 50% !important;
                                            -moz-transform-origin: 50% 50% !important;
                                            -ms-transform-origin: 50% 50% !important;
                                            -o-transform-origin: 50% 50% !important;
                                            transform-origin: 50% 50% !important;
                                            -webkit-transform-style: flat !important;
                                            -moz-transform-style: flat !important;
                                            -ms-transform-style: flat !important;
                                            -o-transform-style: flat !important;
                                            transform-style: flat !important;
                                            word-break: normal !important;
                                        }

                                        /* Necessary because cursor: auto breaks our hover styling */
                                        [data-bv-show="rating_summary"] svg,
                                        [data-bv-show="rating_summary"] polygon {
                                            cursor: inherit !important;
                                        }

                                        [data-bv-show="rating_summary"] div {
                                            display: block !important;
                                        }

                                        [data-bv-show="rating_summary"] a {
                                            color: blue !important;
                                            text-decoration: underline !important;
                                        }

                                        [data-bv-show="rating_summary"] a:visited {
                                            color: #529 !important;
                                        }

                                        [data-bv-show="rating_summary"] a, [data-bv-show="rating_summary"] a * {
                                            cursor: pointer !important;
                                        }

                                        [data-bv-show="rating_summary"] path,
                                        [data-bv-show="rating_summary"] polygon {
                                            fill: currentColor !important;
                                        }

                                        /* == ROOT CONTAINER ELEMENT == */
                                        /* This contains default values for child elements to inherit  */
                                        [data-bv-show="rating_summary"] {
                                            font-size: medium !important;
                                            line-height: 1 !important;
                                            direction: ltr !important;
                                            text-align: left !important; /* for IE, Opera */
                                            text-align: start !important; /* recommended W3C Spec */
                                            color: black !important;
                                            font-style: normal !important;
                                            font-weight: normal !important;
                                            text-decoration: none !important;
                                            list-style-type: disc !important;
                                        }

                                        /* == END CLEANSLATE == */
                                        [data-bv-show="rating_summary"] .bv_main_container {
                                            display: inline-flex !important;
                                            flex-wrap: wrap !important;
                                            background-color: transparent !important;
                                            margin-bottom: 0px !important;
                                            margin-left: 0px !important;
                                            margin-right: 0px !important;
                                            margin-top: 0px !important;
                                            padding-bottom: 0px !important;
                                            padding-left: 0px !important;
                                            padding-right: 0px !important;
                                            padding-top: 0px !important;
                                            border-bottom-style: none !important;
                                            border-bottom-color: transparent !important;
                                            border-bottom-width: 0px !important;
                                            border-left-style: none !important;
                                            border-left-color: transparent !important;
                                            border-left-width: 0px !important;
                                            border-right-style: none !important;
                                            border-right-color: transparent !important;
                                            border-right-width: 0px !important;
                                            border-top-style: none !important;
                                            border-top-color: transparent !important;
                                            border-top-width: 0px !important;
                                            border-bottom-left-radius: 0px !important;
                                            border-bottom-right-radius: 0px !important;
                                            border-top-left-radius: 0px !important;
                                            border-top-right-radius: 0px !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_main_container_row_flex {
                                            display: inline-flex !important;
                                            align-items: center !important;
                                            padding-right: 1em !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_main_container_row_normal {
                                            width: 100% !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_main_container_CTA_row {
                                            display: inline-flex !important;
                                            padding-top: 0.5em !important;
                                            width: 100% !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_main_container_line_break {
                                            margin-top: 0.5em !important;
                                            width: 100% !important;
                                            max-width: 24em !important;
                                            border-bottom: 1px solid #CECECE !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_microdata_hidden {
                                            display: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_zero_ratings_text_container {
                                            padding-right: 1em !important;
                                            overflow: hidden !important;
                                            display: inline-block !important;
                                            text-overflow: ellipsis !important;
                                            white-space: nowrap !important;
                                            max-width: 300px !important;
                                            cursor: default !important;
                                            color: #000000 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        @media screen and (max-width: 450px) {
                                            [data-bv-show="rating_summary"] .bv_main_container .bv_zero_ratings_text_container {
                                                max-width: 90vw !important;
                                                margin: 10px 0 !important;
                                            }
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_avgRating_component_container {
                                            display: flex !important;
                                            align-items: center !important;
                                            padding-right: 0.1em !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_avgRating_component_container:hover {
                                            cursor: pointer !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_avgRating_component_container:visited {
                                            color: #212121 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_component_container {
                                            display: flex !important;
                                            align-items: center !important;
                                            white-space: nowrap !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_delimeter {
                                            padding-right: 0.1em !important;
                                            color: #ccc !important;
                                            font-size: 16px !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_text {
                                            white-space: nowrap !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_text:hover {
                                            cursor: pointer !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_numReviews_text:visited {
                                            color: #212121 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_percentRecommend_component_container {
                                            padding-top: 0.5em !important;
                                            color: #000000 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_incentivized_component_container {
                                            padding-top: 0.5em !important;
                                            padding-bottom: 0.3em !important;
                                            color: #000000 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container {
                                            padding-top: 0.5em !important;
                                            color: #000000 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container > a,
                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container button {
                                            padding: 0 !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container > a:hover,
                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container button:hover {
                                            cursor: pointer !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container > a:visited,
                                        [data-bv-show="rating_summary"] .bv_main_container .bv_questionsAndAnswers_component_container button:visited {
                                            color: #212121 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_ms_focusable > a:focus,
                                        [data-bv-show="rating_summary"] .bv_main_container .bv_ms_focusable button:focus {
                                            border: 1px solid blue !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_stars_component_container {
                                            display: flex !important;
                                            align-items: center !important;
                                            overflow: hidden !important;
                                            white-space: nowrap !important;
                                            padding-right: 1em !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_stars_component_container span {
                                            display: inherit !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_stars_component_container svg:not(:last-child) {
                                            padding-right: 1px !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_stars_component_container:hover {
                                            cursor: pointer !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_button_buttonFull {
                                            padding: 0.5em 1em 0.5em 1em !important;
                                            align-self: center !important;
                                            border: none !important;
                                            text-align: center !important;
                                            text-decoration: none !important;
                                            background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 100%) !important;
                                            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0) !important;
                                            color: #FFFFFF !important;
                                            font-size: 16px !important;
                                            background-color: #000000 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: bold !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                            border-bottom-style: none !important;
                                            border-bottom-color: #212121 !important;
                                            border-bottom-width: 0px !important;
                                            border-left-style: none !important;
                                            border-left-color: #212121 !important;
                                            border-left-width: 0px !important;
                                            border-right-style: none !important;
                                            border-right-color: #212121 !important;
                                            border-right-width: 0px !important;
                                            border-top-style: none !important;
                                            border-top-color: #212121 !important;
                                            border-top-width: 0px !important;
                                            border-bottom-left-radius: 4px !important;
                                            border-bottom-right-radius: 4px !important;
                                            border-top-left-radius: 4px !important;
                                            border-top-right-radius: 4px !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_button_buttonFull:hover {
                                            cursor: pointer !important;
                                            background-image: none !important;
                                            box-shadow: none !important;
                                            background-color: #999999 !important;
                                            color: #FFFFFF !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: bold !important;
                                            font-style: normal !important;
                                            font-size: 16px !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_button_buttonMinimalist {
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_button_buttonMinimalist:hover {
                                            cursor: pointer !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_button_buttonMinimalist:visited {
                                            color: #212121 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_ms_focusable:focus {
                                            border: 1px solid blue !important;
                                        }

                                        [data-bv-show="rating_summary"] .bv_main_container .bv_offscreen_text {
                                            position: absolute !important;
                                            width: 1px !important;
                                            height: 1px !important;
                                            overflow: hidden !important;
                                            clip: rect(1px 1px 1px 1px) !important;
                                            padding: 0 !important;
                                            border: 0 !important;
                                        }

                                        div.bv_modal_component_container[data-bv-modal] {
                                            display: flex !important;
                                            flex-wrap: wrap !important;
                                            position: absolute !important;
                                            z-index: 1000 !important;
                                            background-color: #ffffff !important;
                                        }

                                        div.bv_modal_component_container[data-bv-modal] .bv_modal_outer_content:before {
                                            content: '';
                                            display: inline-flex !important;
                                            position: absolute !important;
                                            left: 45% !important;
                                            top: -5px !important;
                                            width: 10px !important;
                                            height: 10px !important;
                                            border-right: 1px solid black !important;
                                            border-bottom: 1px solid black !important;
                                            transform: rotate(-135deg) !important;
                                            background-color: #ffffff !important;
                                        }

                                        div.bv_modal_component_container[data-bv-modal] .bv_modal_outer_content {
                                            margin: 0 auto !important;
                                            display: inline-flex !important;
                                            flex-wrap: wrap !important;
                                            padding: 2em !important;
                                            border: 1px solid black !important;
                                            max-width: 270px !important;
                                        }

                                        .bv_histogram_component_container {
                                            min-width: 200px !important;
                                        }

                                        .bv_histogram_row_prefix {
                                            display: table-cell !important;
                                            vertical-align: middle !important;
                                            white-space: nowrap !important;
                                        }

                                        .bv_histogram_row_container {
                                            min-width: 200px !important;
                                            height: 25px !important;
                                            padding: 0px !important;
                                            margin: 0px !important;
                                            display: table-row !important;
                                            cursor: pointer !important;
                                            color: #000000 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        .bv_histogram_row_container:hover {
                                            background-color: #F7F7F7 !important;
                                        }

                                        .bv_histogram_row_bar_empty {
                                            border-radius: 2px !important;
                                            height: 10px !important;
                                            display: block !important;
                                            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0, rgba(255, 255, 255, 0) 100%) !important;
                                            background-color: #ccc !important;
                                            background-color: #230939 !important;
                                        }

                                        .bv_histogram_row_bar_filled {
                                            border-radius: 2px !important;
                                            height: 10px !important;
                                            display: block !important;
                                            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) 0, rgba(255, 255, 255, 0) 100%) !important;
                                            background-color: #00788C !important;
                                        }

                                        .bv_histogram_row_full_bar {
                                            display: table-cell !important;
                                            padding-left: 10px !important;
                                            padding-right: 10px !important;
                                            width: 100% !important;
                                            vertical-align: middle !important;
                                        }

                                        .bv_histogram_row_rating {
                                            display: table-cell !important;
                                            vertical-align: middle !important;
                                            text-align: center !important;
                                        }

                                        .bv_histogram_row_star {
                                            vertical-align: middle !important;
                                            margin-left: 2px;
                                        }

                                        .bv_button_buttonFull {
                                            padding: 0.5em 1em 0.5em 1em !important;
                                            align-self: center !important;
                                            border: none !important;
                                            text-align: center !important;
                                            text-decoration: none !important;
                                            background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 100%) !important;
                                            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0) !important;
                                            color: #FFFFFF !important;
                                            font-size: 16px !important;
                                            background-color: #000000 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: bold !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                            border-bottom-style: none !important;
                                            border-bottom-color: #212121 !important;
                                            border-bottom-width: 0px !important;
                                            border-left-style: none !important;
                                            border-left-color: #212121 !important;
                                            border-left-width: 0px !important;
                                            border-right-style: none !important;
                                            border-right-color: #212121 !important;
                                            border-right-width: 0px !important;
                                            border-top-style: none !important;
                                            border-top-color: #212121 !important;
                                            border-top-width: 0px !important;
                                            border-bottom-left-radius: 4px !important;
                                            border-bottom-right-radius: 4px !important;
                                            border-top-left-radius: 4px !important;
                                            border-top-right-radius: 4px !important;
                                        }

                                        .bv_button_buttonFull:hover {
                                            cursor: pointer !important;
                                            background-image: none !important;
                                            box-shadow: none !important;
                                            background-color: #999999 !important;
                                            color: #FFFFFF !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: bold !important;
                                            font-style: normal !important;
                                            font-size: 16px !important;
                                            text-decoration: none !important;
                                        }

                                        .bv_button_buttonMinimalist {
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        .bv_button_buttonMinimalist:hover {
                                            cursor: pointer !important;
                                            color: #212121 !important;
                                            font-size: 16px !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        .bv_button_buttonMinimalist:visited {
                                            color: #212121 !important;
                                            font-family: "Proxima Nova", Helvetica, Arial, sans-serif !important;
                                            text-transform: none !important;
                                            font-weight: normal !important;
                                            font-style: normal !important;
                                            text-decoration: none !important;
                                        }

                                        .bv_ms_focusable:focus {
                                            border: 1px solid blue !important;
                                        }

                                        .bv_offscreen_text {
                                            position: absolute !important;
                                            width: 1px !important;
                                            height: 1px !important;
                                            overflow: hidden !important;
                                            clip: rect(1px 1px 1px 1px) !important;
                                            padding: 0 !important;
                                            border: 0 !important;
                                        }

                                        .bv_ms_focusable:focus {
                                            border: 1px solid blue !important;
                                        }

                                    </style>


                                </div>
                            </div>


                        </div>
                        <div class="product-info__rating"></div>
                        <payment-terms class="product-info__payment-terms"
                                       form="product-form-7493354127518-template--17549462929566__main">
                            <form id="product-installment-form-template--17549462929566__main-7493354127518"
                                  accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                <input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8"
                                                                                             value="✓">
                                <input type="hidden" name="id" value="42593135100062"><input type="hidden"
                                                                                             name="product-id"
                                                                                             value="7493354127518">
                                <input type="hidden" name="section-id" value="template--17549462929566__main"></form>
                        </payment-terms>
                        <hr class="product-info__separator">
                        <div class="product-info__description">

                            <div class="prose">
                                {!! $product->intro !!}
                            </div>
                        </div>
                        <div class="product-info__variant-picker">
                            <noscript>
                                <input type="hidden" name="id"
                                       form="product-form-7493354127518-template--17549462929566__main"
                                       value="42593135100062">
                            </noscript>
                        </div>
                        <div class="product-info__buy-buttons">
                            <form method="post" action="/cart/add"
                                  id="product-form-7493354127518-template--17549462929566__main"
                                  accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data"
                                  is="product-form">
                                <input type="hidden" name="form_type" value="product">
                                <input type="hidden" name="utf8" value="✓"><input type="hidden" name="id"
                                                                                  value="42593135100062">
                                <div class="v-stack gap-4">
                                    @if($product->state == 2)
                                        <buy-buttons class="buy-buttons buy-buttons--multiple" template="pf-0a23ce27"
                                                     form="product-form-7493354127518-template--17549462929566__main">
                                            <button type="submit" class="button button--xl button--subdued" disabled=""
                                                    is="custom-button">
                                                <div>Hết hàng</div>
                                                <span class="button__loader">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                  </span>
                                            </button>
                                        </buy-buttons>
                                    @else
                                        <buy-buttons class="buy-buttons buy-buttons--multiple" template="pf-e275e229"
                                                     form="product-form-6602208936094-template--17549464109214__main">
                                            <button type="button" class="button button--xl button--secondary"
                                                    data-image="{{ $product->image->path ?? '' }}"
                                                    data-price="{{ $product->price }}"
                                                    data-name="{{ $product->name }}"
                                                    ng-click="addToCart({{ $product->id }},  $event)"
                                                    is="custom-button">
                                                <div>Thêm vào giỏ hàng</div>
                                                <span class="button__loader">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                  </span>
                                            </button>
                                            {{--                                            <div data-shopify="payment-button" class="shopify-payment-button">--}}
                                            {{--                                                <shopify-accelerated-checkout recommended="null" --}}
                                            {{--                                                                              fallback="{&quot;name&quot;:&quot;buy_it_now&quot;,&quot;wallet_params&quot;:{}}" --}}
                                            {{--                                                                              access-token="608492a350ff55aa15167cb8daea5c6f" --}}
                                            {{--                                                                              buyer-country="VN" buyer-locale="en" buyer-currency="USD" --}}
                                            {{--                                                                              variant-params="[{&quot;id&quot;:39466293067934,&quot;requiresShipping&quot;:true}]"--}}
                                            {{--                                                                              shop-id="31987892355" requires-shipping="">--}}
                                            {{--                                                    <shopify-buy-it-now-button access-token="608492a350ff55aa15167cb8daea5c6f" --}}
                                            {{--                                                                               buyer-country="VN" buyer-currency="USD" wallet-params="{}"--}}
                                            {{--                                                                               page-type="product" slot="button" requires-shipping="" call-to-action="">--}}
                                            {{--                                                        <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button></shopify-buy-it-now-button></shopify-accelerated-checkout> --}}
                                            {{--                                                <small id="shopify-buyer-consent" class="hidden" aria-hidden="true"> This item is a recurring or deferred purchase. By continuing, I agree to the --}}
                                            {{--                                                    <span id="shopify-subscription-policy-button">cancellation policy</span> --}}
                                            {{--                                                    and authorize you to charge my payment method at the prices, frequency and dates listed on this page until my order is fulfilled or I cancel, if permitted.--}}
                                            {{--                                                </small> --}}
                                            {{--                                            </div>--}}
                                            <style>
                                                #shopify-section-template--17549464109214__main .shopify-payment-button {
                                                }
                                            </style>
                                        </buy-buttons>
                                    @endif


                                </div>
                                <input type="hidden" name="product-id" value="7493354127518"><input type="hidden"
                                                                                                    name="section-id"
                                                                                                    value="template--17549462929566__main">
                            </form>
                        </div>
                    </safe-sticky>
                </div>
            </div>

        </section>

        <style>
            .product-des {
                max-width: 800px; /* Điều chỉnh độ rộng tối đa theo ý bạn */
                margin: 0 auto;   /* Căn giữa block theo chiều ngang */
            }
        </style>

        <div class="product-des">
            {!! $product->body !!}
        </div>


        <cart-notification-drawer open-from="bottom" ng-if="showCartNotification"
                                  class="quick-buy-drawer drawer show-close-cursor"
                                  role="dialog" aria-modal="true" style="display: block; right: 0px; bottom: 0px;
                                   opacity: 1; visibility: visible; background-color: white" open="">
            <div class="quick-buy-drawer__info">
                <div class="banner banner--success  justify-center">
                    <svg role="presentation" focusable="false"
                         stroke-width="2" width="18" height="18" class="offset-icon icon icon-success"
                         style="--icon-height: 18px" viewBox="0 0 18 18">
                        <path d="M0 9C0 4.02944 4.02944 0 9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9Z"
                              fill="currentColor"></path>
                        <path d="M5 8.8L7.62937 11.6L13 6" stroke="#ffffff" fill="none"></path>
                    </svg>
                    Đã thêm vào giỏ hàng!
                </div>
                <div class="quick-buy-drawer__variant text-start h-stack gap-6">
                    <img src="<% product.image %>" alt="Monster Torch"

                         width="900" height="900" loading="lazy" sizes="80px"
                         class="quick-buy-drawer__media rounded-xs">
                    <div class="v-stack gap-1">
                        <div class="v-stack gap-0.5">
                            <a href="/products/monster-torch?variant=39466293067934"
                               class="bold justify-self-start"><% product.name %></a>
                            <price-list class="price-list  ">
                                <sale-price class="text-subdued">
                                    <span class="sr-only">Sale price</span><% product.price | number:0 %> đ
                                </sale-price>
                            </price-list>
                        </div>
                    </div>
                </div>

                <form class="buy-buttons buy-buttons--compact">
                    <a class="button button--secondary" href="/gio-hang.html">Xem giỏ hàng</a>


                    <button type="submit" class="button" name="checkout" is="custom-button">

                            <a href="/thanh-toan.html">Thanh toán</a>

                        <span class="button__loader">
        <span></span>
        <span></span>
        <span></span>
      </span></button>
                </form>
            </div>
        </cart-notification-drawer>


    </div>

    <template id="popover-default-template">
        <button part="outside-close-button" is="close-button" aria-label="Close">
            <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close"
                 viewBox="0 0 24 24">
                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
            </svg>
        </button>

        <div part="overlay"></div>

        <div part="content">
            <header part="title">
                <slot name="title"></slot>
            </header>

            <div part="body">
                <slot></slot>
            </div>
        </div>
    </template>
@endsection

@push('scripts')
    <script>
        app.controller('productDetail', function ($rootScope, $scope, $sce, $interval, cartItemSync) {
            $scope.searching = false;
            $scope.priceGte = 0;
            $scope.priceLte = 20000000;

            $scope.filterProduct = function () {
                $scope.searchProduct();
            }

            $scope.sortOptionChanged = function () {
                $scope.searchProduct();
            }

            $scope.searchProduct = function () {
                jQuery.ajax({
                    type: "GET",
                    url: "{{route('front.ajax-search-products')}}",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                        availability: $scope.availability,
                        priceGte: $scope.priceGte,
                        priceLte: $scope.priceLte,
                        sortOption: $scope.sortOption,
                    },
                    beforeSend: function () {
                        jQuery('.loading-spin').show();
                        // showOverlay();
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.searching = true;
                            $scope.errors = null;
                            $scope.productListHtml = $sce.trustAsHtml(response.data);

                            // window.location.href = "/dat-hang-thanh-cong/";
                        } else {
                            $scope.errors = response.errors;
                        }
                    },
                    error: function () {
                    },
                    complete: function () {
                        jQuery('.loading-spin').hide();
                        // hideOverlay();
                        // $scope.loading.submit = false;
                        $scope.$applyAsync();
                    },
                });
            }


            $scope.addToCart = function (productId, event) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);
                var element = event.currentTarget;

                var product = {
                    image: element.getAttribute('data-image'),
                    price: element.getAttribute('data-price'),
                    name: element.getAttribute('data-name')
                };

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                        'qty': 1
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);

                            $scope.showCartNotification = true;

                            setTimeout(function () {
                                $scope.showCartNotification = false;
                            }, 3000);

                            $scope.product = product;
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);
                        }
                    },
                    error: function () {
                        jQuery.toast('Thao tác thất bại !')
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }
        })

    </script>
@endpush
