@extends('site.layouts.master')
@section('title')

@endsection

@section('content')
    <div ng-controller="productCategory">
        <section id="shopify-section-template--17549462175902__banner"
                 class="shopify-section shopify-section--collection-banner">
            <style>
                #shopify-section-template--17549462175902__banner {
                    --section-spacing-block-end: 0;
                    --content-over-media-overlay: 0 0 0 / 0.3;
                }

                .shopify-section:first-child .section[allow-transparent-header] {
                    padding-block-start: max(var(--section-inner-max-spacing-block), var(--header-height));
                }</style>

            <div class="section   section-blends section-full text-custom" style="--text-color: 255 255 255;">
                <image-banner reveal-on-scroll="true"
                              class="collection-banner content-over-media content-over-media--sm shadow-block rounded-lg  text-custom"
                              style="--text-color: 255 255 255;">
                    @php
                        $sizes = [200, 300, 400, 500, 600, 700, 800, 1000];

                        $srcset = collect($sizes)->map(function($size) use ($category) {
                            return (@$category->image->path ?? '' ). "?width={$size} {$size}w";
                        })->implode(', ');
                    @endphp
                    <img
                            src="{{$category->image->path ?? ''}}?width=600"
                            alt="Lifestyle Series"
                            srcset="{{ $srcset }}"
                            width="600" height="720" fetchpriority="high"
                            sizes="(max-width: 740px) calc(100vw - 40px), (max-width: 999px) calc(100vw - 64px), min(2080.0px, 100vw - 96px)">
                    <div class="place-self-center text-center sm:place-self-center sm:text-center">
                        <div class="v-stack gap-4 sm:gap-6">
                            <h1 class="h0" reveal-on-scroll="true">
                                <split-lines>{{ $category->name }}</split-lines>
                            </h1>
                            <div class="prose">
                                <meta charset="utf-8">
                                <span data-mce-fragment="1">
                                    {!! $category->intro !!}
                                </span><br>
                            </div>
                        </div>
                    </div>
                </image-banner>
            </div>
        </section>
        <section id="shopify-section-template--17549462175902__main"
                 class="shopify-section shopify-section--main-collection">
            <style>
                #shopify-section-template--17549462175902__main {
                    --section-background-hash: 0;
                }

                #shopify-section-template--17549462175902__main + * {
                    --previous-section-background-hash: 0;
                }</style>
            <style>#shopify-section-template--17549462175902__main {
                    --product-list-gap: var(--spacing-2);
                    --product-list-items-per-row: 2;
                    --product-list-grid: auto-flow dense / repeat(var(--product-list-items-per-row), minmax(0, 1fr));
                    --product-list-promo-grid-column: span 2;

                    --content-over-media-gap: var(--spacing-8);
                }

                @media screen and (min-width: 700px) {
                    #shopify-section-template--17549462175902__main {
                        --product-list-gap: var(--product-list-row-gap) var(--product-list-column-gap);
                        --product-list-items-per-row: 2;
                        --product-list-promo-grid-column: span 1;
                    }
                }

                @media screen and (min-width: 1000px) {
                    #shopify-section-template--17549462175902__main {
                        --product-list-items-per-row: 2;
                        --product-list-promo-grid-column: span 2;
                    }
                }

                @media screen and (min-width: 1200px) {
                    #shopify-section-template--17549462175902__main {
                        --product-list-items-per-row: 3;
                    }
                }

                @media screen and (min-width: 1400px) {
                    #shopify-section-template--17549462175902__main {
                        --product-list-items-per-row: 3;
                    }
                }
            </style>

            <div class="container">
                <div class="collection collection--filters-sidebar">
                    <facet-drawer header-bordered id="facets-drawer" class="facets-drawer drawer" open-from="left">
                        <p class="h5" slot="header">Filters</p>
                        <form id="facet-form" is="facet-form" section-id="template--17549462175902__main" method="GET"
                              action="/collections/lifestyle" class="facets-vertical"><input type="hidden" name="page"
                                                                                             value="">
                            <input type="hidden" name="section_id" value="template--17549462175902__main" disabled>
                            <details id="accordion-sort-by" class=" accordion  group" aria-expanded="false"
                                     is="accordion-disclosure">
                                <summary>
                                    <div class="accordion__toggle bold"><span>Sort by</span><span
                                                class="circle-chevron group-hover:colors group-expanded:colors group-expanded:rotate"><svg
                                                    role="presentation" focusable="false" width="8" height="6"
                                                    class="icon icon-chevron-bottom-small" viewBox="0 0 8 6">
        <path d="m1 1.5 3 3 3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
      </svg></span>
                                    </div>
                                </summary>

                                <div class="accordion__content">
                                    <div class="checkbox-list">
{{--                                        <div class="checkbox-container"><input--}}
{{--                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-manual"--}}
{{--                                                    class="checkbox" type="radio" name="sort_by" value="manual"><label--}}
{{--                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-manual">Featured</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="checkbox-container"><input--}}
{{--                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-best-selling"--}}
{{--                                                    class="checkbox" type="radio" name="sort_by" value="best-selling"--}}
{{--                                                    checked><label--}}
{{--                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-best-selling">Best--}}
{{--                                                selling</label></div>--}}
                                        <div class="checkbox-container"><input
                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-title-ascending"
                                                    class="checkbox" type="radio" name="sort_by"
                                                    value="title-ascending"><label
                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-title-ascending">Alphabetically,
                                                A-Z</label></div>
                                        <div class="checkbox-container"><input
                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-title-descending"
                                                    class="checkbox" type="radio" name="sort_by"
                                                    value="title-descending"><label
                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-title-descending">Alphabetically,
                                                Z-A</label></div>
                                        <div class="checkbox-container"><input
                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-price-ascending"
                                                    class="checkbox" type="radio" name="sort_by"
                                                    value="price-ascending"><label
                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-price-ascending">Price,
                                                low to high</label></div>
                                        <div class="checkbox-container"><input
                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-price-descending"
                                                    class="checkbox" type="radio" name="sort_by"
                                                    value="price-descending"><label
                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-price-descending">Price,
                                                high to low</label></div>
                                        <div class="checkbox-container"><input
                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-created-ascending"
                                                    class="checkbox" type="radio" name="sort_by"
                                                    value="created-ascending"><label
                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-created-ascending">Date,
                                                old to new</label></div>
                                        <div class="checkbox-container"><input
                                                    id="checkbox-template--17549462175902__main--drawer-sort_by-created-descending"
                                                    class="checkbox" type="radio" name="sort_by"
                                                    value="created-descending"><label
                                                    for="checkbox-template--17549462175902__main--drawer-sort_by-created-descending">Date,
                                                new to old</label></div>
                                    </div>
                                </div>
                            </details>
                            <div class="accordion">
                                <div class="accordion__toggle"><label
                                            for="facets-drawer-template--17549462175902__main-filter.v.availability"
                                            class="bold">Còn hàng</label>
                                    <input id="facets-drawer-template--17549462175902__main-filter.v.availability"
                                           type="checkbox" class="switch" name="filter.v.availability" value="1"></div>
                            </div>
                            <details id="accordion-filter-v-price" class=" accordion  group" aria-expanded="false"
                                     is="accordion-disclosure">
                                <summary>
                                    <div class="accordion__toggle bold"><span>Price</span><span
                                                class="circle-chevron group-hover:colors group-expanded:colors group-expanded:rotate"><svg
                                                    role="presentation" focusable="false" width="8" height="6"
                                                    class="icon icon-chevron-bottom-small" viewBox="0 0 8 6">
        <path d="m1 1.5 3 3 3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
      </svg></span>
                                    </div>
                                </summary>

                                <div class="accordion__content">
                                    <price-range class="price-range ">
                                        <div class="range-group no-js:hidden"
                                             style="--range-min: 0.0%; --range-max: 99.99230769230769%">
                                            <input type="range" aria-label="From price" class="range" min="0" max="130"
                                                   step="2" value="0">
                                            <input type="range" aria-label="To price" class="range" min="0" max="130"
                                                   step="2" value="130">
                                        </div>
                                        <div class="input-group"><label class="input-prefix text-sm">
                                                <span class="prefix text-subdued">$</span>
                                                <input aria-label="From price" class="field" type="number"
                                                       inputmode="numeric"
                                                       name="filter.v.price.gte" id="filter.v.price.gte" min="0" max="130"
                                                       step="2" placeholder="0" autocomplete="off">
                                            </label><span class="text-subdued text-sm">to</span><label
                                                    class="input-prefix text-sm">
                                                <span class="prefix text-subdued">$</span>
                                                <input aria-label="To price" class="field" type="number" inputmode="numeric"
                                                       name="filter.v.price.lte" id="filter.v.price.lte" min="0" max="130"
                                                       step="2" placeholder="130" autocomplete="off">
                                            </label></div>
                                    </price-range>
                                </div>
                            </details>
                            <div class="facets-drawer__floating-apply">
                                <button type="button" class="button button--xl w-full"


                                        is="facet-apply-button"
                                >Apply
                                </button>
                            </div>
                            <noscript style="display: block; margin-top: 20px;">
                                <button type="submit" class="button button--lg w-full"


                                        is="custom-button"
                                >Apply
                                </button>
                            </noscript>
                        </form>
                    </facet-drawer>
                    <div class="collection__top-bar">
                        <div class="text-with-icon">
                            <svg role="presentation" fill="none" focusable="false" stroke-width="2" width="20" height="14"
                                 class="icon-subdued icon icon-filter" viewBox="0 0 20 14">
                                <path d="M1 2C0.447715 2 0 2.44772 0 3C0 3.55228 0.447715 4 1 4V2ZM1 4H5V2H1V4Z"
                                      fill="currentColor"></path>
                                <path d="M1 10C0.447715 10 0 10.4477 0 11C0 11.5523 0.447715 12 1 12V10ZM1 12H11V10H1V12Z"
                                      fill="currentColor"></path>
                                <path d="M10 2H9V4H10V2ZM19 4C19.5523 4 20 3.55228 20 3C20 2.44772 19.5523 2 19 2V4ZM10 4H19V2H10V4Z"
                                      fill="currentColor"></path>
                                <path d="M16 10H15V12H16V10ZM19 12C19.5523 12 20 11.5523 20 11C20 10.4477 19.5523 10 19 10V12ZM16 12H19V10H16V12Z"
                                      fill="currentColor"></path>
                                <circle cx="7" cy="3" r="2" stroke="currentColor"></circle>
                                <circle cx="13" cy="11" r="2" stroke="currentColor"></circle>
                            </svg>
                            Filters
                        </div>
                        <div style="text-align: right">

                                <label for="sortSelect" style="margin-right: 8px; font-weight: bold;">Sort by:</label>
                                <select id="sortSelect"
                                        ng-model="sortOption"
                                        ng-change="sortOptionChanged()"
                                        style="padding: 4px 8px; min-width: 200px;">
{{--                                    <option value="manual">Featured</option>--}}
{{--                                    <option value="best-selling">Best selling</option>--}}
                                    <option value="">Mặc định</option>
                                    <option value="name_asc">Tên (A-Z)</option>
                                    <option value="name_desc">Tên (Z-A)</option>
                                    <option value="price_asc">Giá tăng dần</option>
                                    <option value="price_desc">Giá giảm dần</option>
                                    <option value="date_asc">Ngày cũ đến mới</option>
                                    <option value="date_desc">Ngày mới đến cũ</option>
                                </select>
                        </div>
                    </div>

                    <facet-floating-filter class="facets__floating-filter md:hidden">
                        <button type="button" class="button button--xl"
                                style="--button-background: 26 26 26 / var(--button-background-opacity, 1);--button-outline-color: 26 26 26;--button-text-color: 240 240 240;"
                                aria-controls="facets-drawer" aria-expanded="false"


                                is="custom-button"
                        >
                            <div class="text-with-icon justify-center">
                                <svg role="presentation" fill="none" focusable="false" stroke-width="2" width="18"
                                     height="18" class="icon icon-filter" viewBox="0 0 20 14">
                                    <path d="M1 2C0.447715 2 0 2.44772 0 3C0 3.55228 0.447715 4 1 4V2ZM1 4H5V2H1V4Z"
                                          fill="currentColor"></path>
                                    <path d="M1 10C0.447715 10 0 10.4477 0 11C0 11.5523 0.447715 12 1 12V10ZM1 12H11V10H1V12Z"
                                          fill="currentColor"></path>
                                    <path d="M10 2H9V4H10V2ZM19 4C19.5523 4 20 3.55228 20 3C20 2.44772 19.5523 2 19 2V4ZM10 4H19V2H10V4Z"
                                          fill="currentColor"></path>
                                    <path d="M16 10H15V12H16V10ZM19 12C19.5523 12 20 11.5523 20 11C20 10.4477 19.5523 10 19 10V12ZM16 12H19V10H16V12Z"
                                          fill="currentColor"></path>
                                    <circle cx="7" cy="3" r="2" stroke="currentColor"></circle>
                                    <circle cx="13" cy="11" r="2" stroke="currentColor"></circle>
                                </svg>
                                Filter and sort
                            </div>
                        </button>
                    </facet-floating-filter>
                    <div class="collection__facets">
                        <safe-sticky class="collection__facets-scroller">
                            <form id="facet-form" is="facet-form" section-id="template--17549462175902__main" class="facets-vertical">
                                <input type="hidden" name="page" value="">
                                <input type="hidden" name="section_id" value="template--17549462175902__main" disabled>
                                <div class="accordion">
                                    <div class="accordion__toggle"><label
                                                for="facets-sidebar-template--17549462175902__main-filter.v.availability"
                                                class="bold">Còn hàng</label>
                                        <input id="facets-sidebar-template--17549462175902__main-filter.v.availability"
                                               ng-model="availability"
                                               ng-change="filterProduct()"
                                               type="checkbox" class="switch" name="filter.v.availability" value="1"
                                        ></div>
                                </div>

                                <details id="accordion-filter-v-price" class="accordion group" aria-expanded="false" is="accordion-disclosure">
                                    <summary>
                                        <div class="accordion__toggle bold">
                                            <span>Giá</span>
                                            <span class="circle-chevron group-hover:colors group-expanded:colors group-expanded:rotate">
                <svg role="presentation" focusable="false" width="8" height="6" class="icon icon-chevron-bottom-small" viewBox="0 0 8 6">
                    <path d="m1 1.5 3 3 3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
            </span>
                                        </div>
                                    </summary>

                                    <div class="accordion__content">
                                        <price-range class="price-range">
                                            <div class="range-group no-js:hidden" style="--range-min: 0.0%; --range-max: 99.99230769230769%">
                                                <input type="range" aria-label="Từ giá" class="range" min="0" max="20000000" step="100000" value="0" ng-model="priceGte" ng-change="filterProduct()">
                                                <input type="range" aria-label="Đến giá" class="range" min="0" max="20000000" step="100000" value="20000000" ng-model="priceLte" ng-change="filterProduct()">
                                            </div>
                                            <div class="input-group">
                                                <label class="input-prefix text-sm">
                                                    <span class="prefix text-subdued">₫</span>
                                                    <input aria-label="Từ giá" class="field" type="number" inputmode="numeric" name="filter.v.price.gte" id="filter.v.price.gte" min="0" max="20000000" step="100000" placeholder="0" autocomplete="off">
                                                </label>
                                                <span class="text-subdued text-sm">đến</span>
                                                <label class="input-prefix text-sm">
                                                    <span class="prefix text-subdued">₫</span>
                                                    <input aria-label="Đến giá" class="field" type="number" inputmode="numeric" name="filter.v.price.lte" id="filter.v.price.lte" min="0" max="20000000" step="100000" placeholder="20000000" autocomplete="off">
                                                </label>
                                            </div>
                                        </price-range>
                                    </div>
                                </details>

                                <noscript style="display: block; margin-top: 20px;">
                                    <button type="submit" class="button button--lg w-full"
                                            is="custom-button"
                                    >Apply
                                    </button>
                                </noscript>
                            </form>
                        </safe-sticky>
                    </div>
                    <div class="collection__results">
                        <div class="v-stack gap-6">
                            <div class="v-stack gap-4 md:hidden"><p class="text-center">3 products</p></div>

                            <reveal-items selector=".product-list > *" ng-if="!searching">
                                <product-list class="product-list" role="region" aria-live="polite" >
                                    @foreach($products as $product)
                                        @include('site.partials.product_card', ['product' => $product])
                                    @endforeach
                                </product-list>

                            </reveal-items>
                            <reveal-items selector=".product-list > *" ng-if="searching" ng-bind-html="productListHtml">

                            </reveal-items>
                        </div>
                    </div>

                    <nav class="collection__pagination pagination" role="navigation" aria-label="Pagination navigation" ng-if="!searching">
                        {{ $products->links('site.pagination.paginate') }}

                    </nav>


                    <nav class="collection__pagination pagination" role="navigation" aria-label="Pagination navigation"  ng-if="searching" ng-bind-html="paginationHtml">
                    </nav>

                    <div >
                    </div>
                </div>
            </div>
        </section>


        <cart-notification-drawer open-from="bottom" ng-if="showCartNotification"
                                  class="quick-buy-drawer drawer show-close-cursor"
                                  role="dialog" aria-modal="true" style="display: block; right: 0px; bottom: 0px;
                                   opacity: 1; visibility: visible; background-color: white" open="">
            <div class="quick-buy-drawer__info"><div class="banner banner--success  justify-center">
                    <svg role="presentation" focusable="false"
                         stroke-width="2" width="18" height="18" class="offset-icon icon icon-success"
                         style="--icon-height: 18px" viewBox="0 0 18 18">
                        <path d="M0 9C0 4.02944 4.02944 0 9 0C13.9706 0 18 4.02944 18 9C18 13.9706 13.9706 18 9 18C4.02944 18 0 13.9706 0 9Z" fill="currentColor"></path>
                        <path d="M5 8.8L7.62937 11.6L13 6" stroke="#ffffff" fill="none"></path>
                    </svg>Đã thêm vào giỏ hàng!</div><div class="quick-buy-drawer__variant text-start h-stack gap-6">
                    <img src="<% product.image %>" alt="Monster Torch"

                         width="900" height="900" loading="lazy" sizes="80px" class="quick-buy-drawer__media rounded-xs"><div class="v-stack gap-1">
                        <div class="v-stack gap-0.5">
                            <a href="/products/monster-torch?variant=39466293067934"
                               class="bold justify-self-start"><% product.name %></a>
                            <price-list class="price-list  ">
                                <sale-price class="text-subdued">
                                    <span class="sr-only">Sale price</span><% product.price | number:0 %> đ</sale-price></price-list></div></div>
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


@endsection

@push('scripts')
    <script>
        app.controller('productCategory', function ($rootScope, $scope, $sce, $interval, cartItemSync) {
            $scope.searching = false;
            $scope.priceGte = 0;
            $scope.priceLte = 20000000;
            $scope.availability = true;

            $scope.filterProduct = function () {
                $scope.searchProduct();
            }

            $scope.sortOptionChanged = function () {
                $scope.searchProduct();
            }

            $scope.searchProduct = function (page = 1) {
                const url = window.location.pathname;
                const segments = url.split('/');
                const folder = segments[1];

                let page_type = 'category';

                if(folder == 'collections') {
                    page_type = 'collections';
                }

                jQuery.ajax({
                    type: "GET",
                    url: "{{route('front.ajax-search-products')}}",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                        categoryId: {{ $category->id }},
                        page: page,
                        page_type: page_type,
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
                            $scope.paginationHtml = $sce.trustAsHtml(response.data_paginate);

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

            jQuery(document).on('click', '.pagination__item', function(e) {
                e.preventDefault();

                let href = jQuery(this).data('href');
                let params = new URLSearchParams(href.split('?')[1]);
                let page = params.get('page') || 1;

                $scope.searchProduct(page);
            });


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

                            setTimeout(function() {
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
