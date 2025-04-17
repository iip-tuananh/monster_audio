<header id="shopify-section-sections--17549455556766__header" ng-controller="headerPartial"
        class="shopify-section shopify-section-group-header-group shopify-section--header">
    <style>
        :root {
            --sticky-header-enabled: 1;
        }

        #shopify-section-sections--17549455556766__header {
            --header-grid-template: "main-nav logo secondary-nav" / minmax(0, 1fr) auto minmax(0, 1fr);
            --header-padding-block: var(--spacing-4-5);
            --header-background-opacity: 1.0;
            --header-background-blur-radius: 0px;
            --header-transparent-text-color: 255 255 255;
            --header-logo-width: 100px;
            --header-logo-height: 16px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .shopify-section--announcement-bar ~ #shopify-section-sections--17549455556766__header {
            top: calc(var(--sticky-announcement-bar-enabled, 0) * var(--announcement-bar-height, 0px));
        }

        @media screen and (max-width: 699px) {
            .navigation-drawer {
                --drawer-content-max-height: calc(100vh - (var(--spacing-2) * 2));
            }
        }

        @media screen and (min-width: 700px) {
            #shopify-section-sections--17549455556766__header {
                --header-logo-width: 120px;
                --header-logo-height: 19px;
                --header-padding-block: var(--spacing-8-5);
            }
        }

        @media screen and (min-width: 1150px) {
            #shopify-section-sections--17549455556766__header {
                --header-grid-template: "logo main-nav secondary-nav" / minmax(0, 1fr) fit-content(70%) minmax(0, 1fr);
            }
        }</style>

    <height-observer variable="header">
        <store-header class="header" sticky>
            <div class="header__wrapper">
                <div class="header__main-nav">
                    <div class="header__icon-list">
                        <button type="button" class="tap-area lg:hidden" aria-controls="header-sidebar-menu">
                            <span class="sr-only">Open navigation menu</span>
                            <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"
                                 class="icon icon-hamburger" viewBox="0 0 22 22">
                                <path d="M1 5h20M1 11h20M1 17h20" stroke="currentColor" stroke-linecap="round"></path>
                            </svg>
                        </button>

{{--                        <a href="/search" class="tap-area sm:hidden" aria-controls="search-drawer">--}}
{{--                            <span class="sr-only">Open search</span>--}}
{{--                            <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"--}}
{{--                                 class="icon icon-search" viewBox="0 0 22 22">--}}
{{--                                <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor"></circle>--}}
{{--                                <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
                        <nav class="header__link-list justify-center wrap" role="navigation">
                            <ul class="contents" role="list">

                                <li><a href="/" class="bold link-faded-reverse">Trang chủ</a></li>

                                <li>
                                    <details class="relative" is="dropdown-disclosure" trigger="click">
                                        <summary class="text-with-icon gap-2.5 bold link-faded-reverse"
                                                 data-url="/collections/all">Shop
                                            <svg role="presentation" focusable="false" width="10" height="7"
                                                 class="icon icon-chevron-bottom" viewBox="0 0 10 7">
                                                <path d="m1 1 4 4 4-4" fill="none" stroke="currentColor"
                                                      stroke-width="2"></path>
                                            </svg>
                                        </summary>

                                        <div class="dropdown-menu ">
                                            <ul class="contents" role="list">
                                                @foreach($categories as $category)
                                                    <li>
                                                        <details class="relative" is="dropdown-disclosure" trigger="click">
                                                            <summary class="dropdown-menu__item group">
                                                            <span><span
                                                                        class="reversed-link">{{ $category->name }}</span></span>
                                                                <svg role="presentation" focusable="false" width="7"
                                                                     height="10" class="icon icon-chevron-right"
                                                                     viewBox="0 0 7 10">
                                                                    <path d="m1 9 4-4-4-4" fill="none" stroke="currentColor"
                                                                          stroke-width="2"></path>
                                                                </svg>
                                                            </summary>

                                                            <div class="dropdown-menu">
                                                                <ul class="contents" role="list">
                                                                    @foreach($category->childs as $child)
                                                                        <li>
                                                                            <a href="{{ route('front.show-product-list', ['categorySlug' => $child->slug]) }}"
                                                                               class="dropdown-menu__item group">
                                                                                <span><span class="reversed-link">{{ $child->name }}</span></span>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </details>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </details>
                                </li>

                                <li><a href="{{ route('front.collections') }}" class="bold link-faded-reverse">Bộ sưu tập</a></li>

                                <li><a href="{{ route('front.support') }}" class="bold link-faded-reverse">Hỗ trợ</a></li>

                                <li><a href="{{ route('front.contact') }}" class="bold link-faded-reverse">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <a href="/" class="header__logo"><span class="sr-only">My Monster Audio</span><img
                            src="//mymonsteraudio.com/cdn/shop/files/monster-logo_fd65b50d-324c-4fdb-8ba2-72dcceeeadfc.png?v=1613531832&amp;width=792"
                            alt=""
                            srcset="//mymonsteraudio.com/cdn/shop/files/monster-logo_fd65b50d-324c-4fdb-8ba2-72dcceeeadfc.png?v=1613531832&amp;width=240 240w, //mymonsteraudio.com/cdn/shop/files/monster-logo_fd65b50d-324c-4fdb-8ba2-72dcceeeadfc.png?v=1613531832&amp;width=360 360w"
                            width="792" height="128" sizes="120px" class="header__logo-image"><img
                            src="//mymonsteraudio.com/cdn/shop/files/monster-logo_169fc6b0-3f46-4b66-a852-a4be27c3314c.png?v=1613531831&amp;width=792"
                            alt=""
                            srcset="//mymonsteraudio.com/cdn/shop/files/monster-logo_169fc6b0-3f46-4b66-a852-a4be27c3314c.png?v=1613531831&amp;width=240 240w, //mymonsteraudio.com/cdn/shop/files/monster-logo_169fc6b0-3f46-4b66-a852-a4be27c3314c.png?v=1613531831&amp;width=360 360w"
                            width="792" height="128" sizes="120px"
                            class="header__logo-image header__logo-image--transparent"></a>

                <div class="header__secondary-nav">
                    <div class="header__icon-list">
{{--                        <a href="#" class="hidden tap-area sm:block"--}}
{{--                                                      aria-controls="search-drawer">--}}
{{--                            <span class="sr-only">Open search</span>--}}
{{--                            <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"--}}
{{--                                 class="icon icon-search" viewBox="0 0 22 22">--}}
{{--                                <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor"></circle>--}}
{{--                                <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round"--}}
{{--                                      stroke-linejoin="round"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}

                        <a href="/gio-hang.html" data-no-instant class="relative tap-area" >
                            <span class="sr-only">Open cart</span>
                            <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"
                                 class="icon icon-cart" viewBox="0 0 22 22">
                                <path d="M11 7H3.577A2 2 0 0 0 1.64 9.497l2.051 8A2 2 0 0 0 5.63 19H16.37a2 2 0 0 0 1.937-1.503l2.052-8A2 2 0 0 0 18.422 7H11Zm0 0V1"
                                      fill="none" stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                            <div class="header__cart-count">
                                <cart-count class="count-bubble"
                                            ng-class="{'opacity-0': cart.count === 0}"
                                            aria-hidden="true"> <% cart.count %></cart-count>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </store-header>
    </height-observer>

    <navigation-drawer mobile-opening="left" open-from="left" id="header-sidebar-menu"
                       class="navigation-drawer drawer lg:hidden" aria-expanded="true"  >
        <button is="close-button" aria-label="Close">
            <svg role="presentation" stroke-width="2" focusable="false" width="19" height="19" class="icon icon-close"
                 viewBox="0 0 24 24">
                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
            </svg>
        </button>
        <div class="panel-list__wrapper">
            <div class="panel">
                <div class="panel__wrapper">
                    <div class="panel__scroller v-stack gap-8">
                        <ul class="v-stack gap-4">
                            <li class="h3 sm:h4"><a href="/" class="group block w-full">
                                    <span><span class="reversed-link">Trang chủ</span></span>
                                </a></li>
                            <li class="h3 sm:h4">
                                <button class="text-with-icon w-full group justify-between" aria-expanded="false"
                                        data-panel="1-0">
                                    <span>Shop</span>
                                    <span class="circle-chevron group-hover:colors group-expanded:colors"><svg
                                                role="presentation" focusable="false" width="5" height="8"
                                                class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
        <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
      </svg></span>
                                </button>
                            </li>
                            <li class="h3 sm:h4"><a href="{{ route('front.collections') }}" class="group block w-full">
                                    <span><span class="reversed-link">Bộ sưu tập</span></span>
                                </a></li>
                            <li class="h3 sm:h4"><a href="{{ route('front.support') }}" class="group block w-full">
                                    <span><span class="reversed-link">Hỗ trợ</span></span>
                                </a></li>
                            <li class="h3 sm:h4"><a href="{{ route('front.contact') }}" class="group block w-full">
                                    <span><span class="reversed-link">Liên hệ</span></span>
                                </a></li>
                        </ul>
                    </div>
{{--                    <div class="panel-footer v-stack gap-5">--}}
{{--                        <div class="panel-footer__localization-wrapper h-stack gap-6 border-t md:hidden"><a--}}
{{--                                    href="/account" class="panel-footer__account-link bold text-sm">Account</a></div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="panel gap-8">
                <div class="panel__wrapper" hidden>
                    <ul class="v-stack gap-4">
                        <li class="lg:hidden">
                            <button class="text-with-icon h6 text-subdued" data-panel="0">
                                <svg role="presentation" focusable="false" width="7" height="10"
                                     class="icon icon-chevron-left reverse-icon" viewBox="0 0 7 10">
                                    <path d="M6 1 2 5l4 4" fill="none" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                Shop
                            </button>
                        </li>
                        @foreach($categories as $key => $category)
                            <li class="h3 sm:h4">
                                <button class="text-with-icon w-full justify-between" aria-expanded="false"
                                        data-panel="2-{{$key}}">
                                    <span>{{ $category->name }}</span>
                                    <span class="circle-chevron group-hover:colors group-expanded:colors"><svg
                                            role="presentation" focusable="false" width="5" height="8"
                                            class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
        <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
      </svg></span>
                                </button>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="panel">
                @foreach($categories as $category)
                    <div class="panel__wrapper" hidden>
                        <ul class="v-stack gap-4">
                            <li class="text-with-icon lg:hidden">
                                <button class="text-with-icon h6 text-subdued" data-panel="1">
                                    <svg role="presentation" focusable="false" width="7" height="10"
                                         class="icon icon-chevron-left reverse-icon" viewBox="0 0 7 10">
                                        <path d="M6 1 2 5l4 4" fill="none" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    {{ $category->name }}
                                </button>
                            </li>
                            @foreach($category->childs as $child)
                                <li class="h3 sm:h5">
                                    <a class="group block w-full"
                                       href="{{ route('front.show-product-list', ['categorySlug' => $child->slug]) }}"><span><span
                                                class="reversed-link">{{ $child->name }}</span></span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </navigation-drawer>

    <script>
        document.documentElement.style.setProperty('--header-height', Math.round(document.getElementById('shopify-section-sections--17549455556766__header').clientHeight) + 'px');
    </script>

</header>
