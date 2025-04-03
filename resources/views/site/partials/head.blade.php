<head>
    <meta charset="UTF-8"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="#"/>

    <script>(function (html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- This site is optimized with the Yoast SEO plugin v21.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="@yield('title')" />
    <meta name="robots" content="noodp,index,follow" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('description')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ url()->current() }}" />
    <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="598" />
    <meta property="og:image:height" content="333" />
    <meta property="og:image:alt" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <!-- Fav Icon -->
    <link rel="icon" href="{{$config->favicon->path ?? ''}}" type="image/x-icon">
    <!-- / Yoast SEO plugin. -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://mymonsteraudio.com"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Lifestyle Series",
                    "item": "https://mymonsteraudio.com/collections/lifestyle"
                }
            ]
        }
    </script>

    <style>/* Typography (heading) */
        @font-face {
            font-family: "DIN Next";
            font-weight: 700;
            font-style: normal;
            font-display: fallback;
            src: url("{{ asset('site/fonts/dinnext_n7.57888b0b2051a4dba7d02aad7ca64db99eca3cf1.woff2') }}") format("woff2"),
            url("{{ asset('site/fonts/dinnext_n7.8ca52ee0f403ce0c89c90387f16284e4637c1b10.woff') }}") format("woff");
        }

        @font-face {
            font-family: "DIN Next";
            font-weight: 700;
            font-style: italic;
            font-display: fallback;
            src: url("//mymonsteraudio.com/cdn/fonts/din_next/dinnext_i7.3e0968fa491d382704988ea5c9fc6209193f03d0.woff2?h1=bXltb25zdGVyYXVkaW8uY29t&h2=bXltb25zdGVyYXVkaW8uYWNjb3VudC5teXNob3BpZnkuY29t&hmac=00431ba4e061c42d80b11e01248226d868ac4a0b6e7c53198599735718fa9352") format("woff2"),
            url("//mymonsteraudio.com/cdn/fonts/din_next/dinnext_i7.28611b7c75be07249f4251b10e48a8d9f8dbf8ba.woff?h1=bXltb25zdGVyYXVkaW8uY29t&h2=bXltb25zdGVyYXVkaW8uYWNjb3VudC5teXNob3BpZnkuY29t&hmac=44a23824f29e241dc19ac332becea2af1e0589845554e778b41a06a14cc6adbb") format("woff");
        }

        /* Typography (body) */
        @font-face {
            font-family: "DIN Next";
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
            src: url("{{ asset('site/fonts/dinnext_n4.438c249fdbceeefafa64221353c5ece2fdb8ae14.woff2') }}") format("woff2"),
            url("{{ asset('site/fonts/dinnext_n4.ba1a214c52f07ec250a5179209eb84e73639e1c9.woff') }}") format("woff");
        }

        @font-face {
            font-family: "DIN Next";
            font-weight: 400;
            font-style: italic;
            font-display: fallback;
            src: url("//mymonsteraudio.com/cdn/fonts/din_next/dinnext_i4.61ded265c0c537a08a3ef6c1f78e76a5f3be91c9.woff2?h1=bXltb25zdGVyYXVkaW8uY29t&h2=bXltb25zdGVyYXVkaW8uYWNjb3VudC5teXNob3BpZnkuY29t&hmac=35301fa90e38a70c6aad6a7e7cdd03b157f487a2f351243584692d50a789710f") format("woff2"),
            url("//mymonsteraudio.com/cdn/fonts/din_next/dinnext_i4.09dd19acb435d364f8a7263a588c573108d49efc.woff?h1=bXltb25zdGVyYXVkaW8uY29t&h2=bXltb25zdGVyYXVkaW8uYWNjb3VudC5teXNob3BpZnkuY29t&hmac=dea8237b38b29f4a58c8151bf8a322cdc5d185c60f0c0a15af27a4564269d305") format("woff");
        }

        @font-face {
            font-family: "DIN Next";
            font-weight: 700;
            font-style: normal;
            font-display: fallback;
            src: url("{{ asset('site/fonts/dinnext_n7.57888b0b2051a4dba7d02aad7ca64db99eca3cf1.woff2') }}") format("woff2"),
            url("{{ asset('site/fonts/dinnext_n7.8ca52ee0f403ce0c89c90387f16284e4637c1b10.woff') }}") format("woff");
        }

        @font-face {
            font-family: "DIN Next";
            font-weight: 700;
            font-style: italic;
            font-display: fallback;
            src: url("//mymonsteraudio.com/cdn/fonts/din_next/dinnext_i7.3e0968fa491d382704988ea5c9fc6209193f03d0.woff2?h1=bXltb25zdGVyYXVkaW8uY29t&h2=bXltb25zdGVyYXVkaW8uYWNjb3VudC5teXNob3BpZnkuY29t&hmac=00431ba4e061c42d80b11e01248226d868ac4a0b6e7c53198599735718fa9352") format("woff2"),
            url("//mymonsteraudio.com/cdn/fonts/din_next/dinnext_i7.28611b7c75be07249f4251b10e48a8d9f8dbf8ba.woff?h1=bXltb25zdGVyYXVkaW8uY29t&h2=bXltb25zdGVyYXVkaW8uYWNjb3VudC5teXNob3BpZnkuY29t&hmac=44a23824f29e241dc19ac332becea2af1e0589845554e778b41a06a14cc6adbb") format("woff");
        }

        :root {
            /**
         * ---------------------------------------------------------------------
         * SPACING VARIABLES
         *
         * We are using a spacing inspired from frameworks like Tailwind CSS.
         * ---------------------------------------------------------------------
         */
            --spacing-0-5: 0.125rem; /* 2px */
            --spacing-1: 0.25rem; /* 4px */
            --spacing-1-5: 0.375rem; /* 6px */
            --spacing-2: 0.5rem; /* 8px */
            --spacing-2-5: 0.625rem; /* 10px */
            --spacing-3: 0.75rem; /* 12px */
            --spacing-3-5: 0.875rem; /* 14px */
            --spacing-4: 1rem; /* 16px */
            --spacing-4-5: 1.125rem; /* 18px */
            --spacing-5: 1.25rem; /* 20px */
            --spacing-5-5: 1.375rem; /* 22px */
            --spacing-6: 1.5rem; /* 24px */
            --spacing-6-5: 1.625rem; /* 26px */
            --spacing-7: 1.75rem; /* 28px */
            --spacing-7-5: 1.875rem; /* 30px */
            --spacing-8: 2rem; /* 32px */
            --spacing-8-5: 2.125rem; /* 34px */
            --spacing-9: 2.25rem; /* 36px */
            --spacing-9-5: 2.375rem; /* 38px */
            --spacing-10: 2.5rem; /* 40px */
            --spacing-11: 2.75rem; /* 44px */
            --spacing-12: 3rem; /* 48px */
            --spacing-14: 3.5rem; /* 56px */
            --spacing-16: 4rem; /* 64px */
            --spacing-18: 4.5rem; /* 72px */
            --spacing-20: 5rem; /* 80px */
            --spacing-24: 6rem; /* 96px */
            --spacing-28: 7rem; /* 112px */
            --spacing-32: 8rem; /* 128px */
            --spacing-36: 9rem; /* 144px */
            --spacing-40: 10rem; /* 160px */
            --spacing-44: 11rem; /* 176px */
            --spacing-48: 12rem; /* 192px */
            --spacing-52: 13rem; /* 208px */
            --spacing-56: 14rem; /* 224px */
            --spacing-60: 15rem; /* 240px */
            --spacing-64: 16rem; /* 256px */
            --spacing-72: 18rem; /* 288px */
            --spacing-80: 20rem; /* 320px */
            --spacing-96: 24rem; /* 384px */

            /* Container */
            --container-max-width: 1600px;
            --container-narrow-max-width: 1350px;
            --container-gutter: var(--spacing-5);
            --section-outer-spacing-block: var(--spacing-12);
            --section-inner-max-spacing-block: var(--spacing-10);
            --section-inner-spacing-inline: var(--container-gutter);
            --section-stack-spacing-block: var(--spacing-8);

            /* Grid gutter */
            --grid-gutter: var(--spacing-5);

            /* Product list settings */
            --product-list-row-gap: var(--spacing-8);
            --product-list-column-gap: var(--grid-gutter);

            /* Form settings */
            --input-gap: var(--spacing-2);
            --input-height: 2.625rem;
            --input-padding-inline: var(--spacing-4);

            /* Other sizes */
            --sticky-area-height: calc(var(--sticky-announcement-bar-enabled, 0) * var(--announcement-bar-height, 0px) + var(--sticky-header-enabled, 0) * var(--header-height, 0px));

            /* RTL support */
            --transform-logical-flip: 1;
            --transform-origin-start: left;
            --transform-origin-end: right;

            /**
         * ---------------------------------------------------------------------
         * TYPOGRAPHY
         * ---------------------------------------------------------------------
         */

            /* Font properties */
            --heading-font-family: "DIN Next", sans-serif;
            --heading-font-weight: 700;
            --heading-font-style: normal;
            --heading-text-transform: normal;
            --heading-letter-spacing: -0.02em;
            --text-font-family: "DIN Next", sans-serif;
            --text-font-weight: 400;
            --text-font-style: normal;
            --text-letter-spacing: 0.0em;

            /* Font sizes */
            --text-h0: 3rem;
            --text-h1: 2.5rem;
            --text-h2: 2rem;
            --text-h3: 1.5rem;
            --text-h4: 1.375rem;
            --text-h5: 1.125rem;
            --text-h6: 1rem;
            --text-xs: 0.6875rem;
            --text-sm: 0.75rem;
            --text-base: 0.875rem;
            --text-lg: 1.125rem;

            /**
         * ---------------------------------------------------------------------
         * COLORS
         * ---------------------------------------------------------------------
         */

            /* Color settings */
            --accent: 26 26 26;
            --text-primary: 26 26 26;
            --background-primary: 240 240 240;
            --dialog-background: 255 255 255;
            --border-color: var(--text-color, var(--text-primary)) / 0.12;

            /* Button colors */
            --button-background-primary: 26 26 26;
            --button-text-primary: 255 255 255;
            --button-background-secondary: 240 196 23;
            --button-text-secondary: 26 26 26;

            /* Status colors */
            --success-background: 224 244 232;
            --success-text: 0 163 65;
            --warning-background: 255 246 233;
            --warning-text: 255 183 74;
            --error-background: 254 231 231;
            --error-text: 248 58 58;

            /* Product colors */
            --on-sale-text: 248 58 58;
            --on-sale-badge-background: 248 58 58;
            --on-sale-badge-text: 255 255 255;
            --sold-out-badge-background: 0 0 0;
            --sold-out-badge-text: 255 255 255;
            --primary-badge-background: 128 60 238;
            --primary-badge-text: 255 255 255;
            --star-color: 255 183 74;
            --product-card-background: 255 255 255;
            --product-card-text: 26 26 26;

            /* Header colors */
            --header-background: 240 240 240;
            --header-text: 26 26 26;

            /* Footer colors */
            --footer-background: 255 255 255;
            --footer-text: 26 26 26;

            /* Rounded variables (used for border radius) */
            --rounded-xs: 0.25rem;
            --rounded-sm: 0.375rem;
            --rounded: 0.75rem;
            --rounded-lg: 1.5rem;
            --rounded-full: 9999px;

            --rounded-button: 3.75rem;
            --rounded-input: 0.5rem;

            /* Box shadow */
            --shadow-sm: 0 2px 8px rgb(var(--text-primary) / 0.1);
            --shadow: 0 5px 15px rgb(var(--text-primary) / 0.1);
            --shadow-md: 0 5px 30px rgb(var(--text-primary) / 0.1);
            --shadow-block: 0px 18px 50px rgb(var(--text-primary) / 0.1);

            /**
         * ---------------------------------------------------------------------
         * OTHER
         * ---------------------------------------------------------------------
         */

            --cursor-close-svg-url: url(//mymonsteraudio.com/cdn/shop/t/9/assets/cursor-close.svg?v=147174565022153725511723046902);
            --cursor-zoom-in-svg-url: url(//mymonsteraudio.com/cdn/shop/t/9/assets/cursor-zoom-in.svg?v=154953035094101115921723046902);
            --cursor-zoom-out-svg-url: url(//mymonsteraudio.com/cdn/shop/t/9/assets/cursor-zoom-out.svg?v=16155520337305705181723046902);
            --checkmark-svg-url: url(//mymonsteraudio.com/cdn/shop/t/9/assets/checkmark.svg?v=77552481021870063511723046902);
        }

        [dir="rtl"]:root {
            /* RTL support */
            --transform-logical-flip: -1;
            --transform-origin-start: right;
            --transform-origin-end: left;
        }

        @media screen and (min-width: 700px) {
            :root {
                /* Typography (font size) */
                --text-h0: 4rem;
                --text-h1: 3rem;
                --text-h2: 2.5rem;
                --text-h3: 2rem;
                --text-h4: 1.625rem;
                --text-h5: 1.25rem;
                --text-h6: 1.125rem;

                --text-xs: 0.75rem;
                --text-sm: 0.875rem;
                --text-base: 1.0rem;
                --text-lg: 1.25rem;

                /* Spacing */
                --container-gutter: 2rem;
                --section-outer-spacing-block: var(--spacing-16);
                --section-inner-max-spacing-block: var(--spacing-12);
                --section-inner-spacing-inline: var(--spacing-12);
                --section-stack-spacing-block: var(--spacing-12);

                /* Grid gutter */
                --grid-gutter: var(--spacing-6);

                /* Product list settings */
                --product-list-row-gap: var(--spacing-12);

                /* Form settings */
                --input-gap: 1rem;
                --input-height: 3.125rem;
                --input-padding-inline: var(--spacing-5);
            }
        }

        @media screen and (min-width: 1000px) {
            :root {
                /* Spacing settings */
                --container-gutter: var(--spacing-12);
                --section-outer-spacing-block: var(--spacing-18);
                --section-inner-max-spacing-block: var(--spacing-16);
                --section-inner-spacing-inline: var(--spacing-16);
                --section-stack-spacing-block: var(--spacing-12);
            }
        }

        @media screen and (min-width: 1150px) {
            :root {
                /* Spacing settings */
                --container-gutter: var(--spacing-12);
                --section-outer-spacing-block: var(--spacing-20);
                --section-inner-max-spacing-block: var(--spacing-16);
                --section-inner-spacing-inline: var(--spacing-16);
                --section-stack-spacing-block: var(--spacing-12);
            }
        }

        @media screen and (min-width: 1400px) {
            :root {
                /* Typography (font size) */
                --text-h0: 5rem;
                --text-h1: 3.75rem;
                --text-h2: 3rem;
                --text-h3: 2.25rem;
                --text-h4: 2rem;
                --text-h5: 1.5rem;
                --text-h6: 1.25rem;

                --section-outer-spacing-block: var(--spacing-24);
                --section-inner-max-spacing-block: var(--spacing-18);
                --section-inner-spacing-inline: var(--spacing-18);
            }
        }

        @media screen and (min-width: 1600px) {
            :root {
                --section-outer-spacing-block: var(--spacing-24);
                --section-inner-max-spacing-block: var(--spacing-20);
                --section-inner-spacing-inline: var(--spacing-20);
            }
        }

        /**
       * ---------------------------------------------------------------------
       * LIQUID DEPENDANT CSS
       *
       * Our main CSS is Liquid free, but some very specific features depend on
       * theme settings, so we have them here
       * ---------------------------------------------------------------------
       */
        @media screen and (pointer: fine) {
            .button:not([disabled]):hover, .btn:not([disabled]):hover, .shopify-payment-button__button--unbranded:not([disabled]):hover {
                --button-background-opacity: 0.85;
            }

            .button--subdued:not([disabled]):hover {
                --button-background: var(--text-color) / .05 !important;
            }
        }</style>
    <script>
        document.documentElement.classList.replace('no-js', 'js');

        // This allows to expose several variables to the global scope, to be used in scripts
        window.themeVariables = {
            settings: {
                showPageTransition: true,
                headingApparition: "split_fade",
                pageType: "collection",
                moneyFormat: "$",
                moneyWithCurrencyFormat: "$ USD",
                currencyCodeEnabled: false,
                cartType: "popover",
                showDiscount: true,
                discountMode: "saving"
            },

            strings: {
                accessibilityClose: "Close",
                accessibilityNext: "Next",
                accessibilityPrevious: "Previous",
                addToCartButton: "Add to cart",
                soldOutButton: "Sold out",
                preOrderButton: "Pre-order",
                unavailableButton: "Unavailable",
                closeGallery: "Close gallery",
                zoomGallery: "Zoom",
                errorGallery: "Image cannot be loaded",
                soldOutBadge: "Sold out",
                discountBadge: "Save @@",
                sku: "SKU:",
                searchNoResults: "No results could be found.",
                addOrderNote: "Add order note",
                editOrderNote: "Edit order note",
                shippingEstimatorNoResults: "Sorry, we do not ship to your address.",
                shippingEstimatorOneResult: "There is one shipping rate for your address:",
                shippingEstimatorMultipleResults: "There are several shipping rates for your address:",
                shippingEstimatorError: "One or more error occurred while retrieving shipping rates:"
            },

            breakpoints: {
                'sm': 'screen and (min-width: 700px)',
                'md': 'screen and (min-width: 1000px)',
                'lg': 'screen and (min-width: 1150px)',
                'xl': 'screen and (min-width: 1400px)',

                'sm-max': 'screen and (max-width: 699px)',
                'md-max': 'screen and (max-width: 999px)',
                'lg-max': 'screen and (max-width: 1149px)',
                'xl-max': 'screen and (max-width: 1399px)'
            }
        };
        window.addEventListener('DOMContentLoaded', () => {
            const isReloaded = (window.performance.navigation && window.performance.navigation.type === 1) || window.performance.getEntriesByType('navigation').map((nav) => nav.type).includes('reload');

            if ('animate' in document.documentElement && window.matchMedia('(prefers-reduced-motion: no-preference)').matches && document.referrer.includes(location.host) && !isReloaded) {
                document.body.animate({opacity: [0, 1]}, {duration: 115, fill: 'forwards'});
            }
        });

        window.addEventListener('pageshow', (event) => {
            document.body.classList.remove('page-transition');

            if (event.persisted) {
                document.body.animate({opacity: [0, 1]}, {duration: 0, fill: 'forwards'});
            }
        });// For detecting native share
        document.documentElement.classList.add(`native-share--${navigator.share ? 'enabled' : 'disabled'}`);</script>
    {{-- <script type="module" src="/site/js/vendor.min.js?v=114992621884149252901723046902"></script> --}}
    {{-- <script type="module" src="/site/js/theme.js?v=45785366765952398841723047854"></script> --}}
    <script type="module" src="/site/js/sections.js?v=94856139559083518311723047868"></script>

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
    <script async="async" src="/site/js/preloads.js?locale=en-US"></script>
    <script id="shopify-features" type="application/json">{
        "accessToken": "608492a350ff55aa15167cb8daea5c6f",
        "betas": [
            "rich-media-storefront-analytics"
        ],
        "domain": "mymonsteraudio.com",
        "predictiveSearch": true,
        "shopId": 31987892355,
        "smart_payment_buttons_url": "https:\/\/mymonsteraudio.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
        "dynamic_checkout_cart_url": "https:\/\/mymonsteraudio.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
        "locale": "en"
    }</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "mymonsteraudio.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = {"active": "USD", "rate": "1.0"};
        Shopify.country = "US";
        Shopify.theme = {
            "name": "Impact",
            "id": 139435016350,
            "schema_name": "Impact",
            "schema_version": "5.1.1",
            "theme_store_id": 1190,
            "role": "main"
        };
        Shopify.theme.handle = "null";
        Shopify.theme.style = {"id": null, "handle": null};
        Shopify.cdnHost = "mymonsteraudio.com/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";</script>
    <script type="module">!function (o) {
            (o.Shopify = o.Shopify || {}).modules = !0
        }(window);</script>
    <script>!function (o) {
            function n() {
                var o = [];

                function n() {
                    o.push(Array.prototype.slice.apply(arguments))
                }

                return n.q = o, n
            }

            var t = o.Shopify = o.Shopify || {};
            t.loadFeatures = n(), t.autoloadFeatures = n()
        }(window);</script>
    <script id="shop-js-analytics" type="application/json">{
        "pageType": "collection"
    }</script>
    {{-- <script>(function () {
            function asyncLoad() {
                var urls = ["https:\/\/chimpstatic.com\/mcjs-connected\/js\/users\/c94fb8058058008f0419b5ef7\/6863c9020098fc3cc24d6094e.js?shop=mymonsteraudio.myshopify.com", "\/\/cdn.shopify.com\/proxy\/991344abe5399c2a22aaea25c50d75ef94a9c7b21a862fc2e1c73cdad9a16d61\/apps.bazaarvoice.com\/deployments\/monster\/main_site\/production\/en_US\/bv.js?shop=mymonsteraudio.myshopify.com\u0026sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if (window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();</script> --}}
    {{-- <script integrity="sha256-EGCDRYTvIEOXsReXgqGwkAR+5Dl8tickSrieA/ZcQwc="
            data-source-attribution="shopify.loadfeatures" defer="defer"
            src="/site/js/load_feature-1060834584ef204397b1179782a1b090047ee4397cb627244ab89e03f65c4307.js"
            crossorigin="anonymous"></script>
    <script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8="
            data-source-attribution="shopify.dynamic-checkout" defer="defer"
            src="/site/js/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js"
            crossorigin="anonymous"></script> --}}
    {{-- <script id='scb4127' type='text/javascript' async='' src='/site/js/storefront-banner.js'></script> --}}
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
    <link href="/site/css/theme.css?v=171648844962393731081723464103" rel="stylesheet" type="text/css" media="all"/>
    <link href="/site/css/main.css?v=171648844962393731081723464103" rel="stylesheet" type="text/css" media="all"/>
    <link href="/site/css/pagefly-animation.css?v=171648844962393731081723464103" rel="stylesheet" type="text/css" media="all"/>
    <!-- Start of esiaudio Zendesk Widget script -->
    {{-- <script
            id="ze-snippet"
            src="/site/js/snippet.js?key=b55ae7fb-6466-4925-86f5-dccf949533a5"
    ></script> --}}
    <!-- End of esiaudio Zendesk Widget script -->


    <!-- BEGIN app block: shopify://apps/pagefly-page-builder/blocks/app-embed/83e179f7-59a0-4589-8c66-c0dddf959200 -->


    <script src="/site/js/pagefly-helper.js" defer="defer"></script>

    <script src="/site/js/pagefly-general-helper.js" defer="defer"></script>

    <script src="/site/js/pagefly-snap-slider.js" defer="defer"></script>

    <script src="/site/js/pagefly-slideshow-v3.js" defer="defer"></script>

    <script src="/site/js/pagefly-slideshow-v4.js" defer="defer"></script>

    <script src="/site/js/pagefly-glider.js" defer="defer"></script>

    <script src="/site/js/pagefly-slideshow-v1-v2.js" defer="defer"></script>

    {{-- <script src="/site/js/pagefly-product-media.js" defer="defer"></script>

    <script src="/site/js/pagefly-product.js" defer="defer"></script>


    {{-- <script id='pagefly-helper-data' type='application/json'>
        {
            "page_optimization": {
                "assets_prefetching": false
            },
            "elements_asset_mapper": {
                "Accordion": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-accordion.js",
                "Accordion3": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-accordion3.js",
                "CountDown": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-countdown.js",
                "GMap1": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-gmap.js",
                "GMap2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-gmap.js",
                "GMapBasicV2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-gmap.js",
                "GMapAdvancedV2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-gmap.js",
                "HTML.Video": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-htmlvideo.js",
                "HTML.Video2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-htmlvideo2.js",
                "HTML.Video3": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-htmlvideo2.js",
                "BackgroundVideo": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-htmlvideo2.js",
                "Instagram": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-instagram.js",
                "Instagram2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-instagram.js",
                "Insta3": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-instagram3.js",
                "Tabs": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-tab.js",
                "Tabs3": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-tab3.js",
                "ProductBox": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-cart.js",
                "FBPageBox2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-facebook.js",
                "FBLikeButton2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-facebook.js",
                "TwitterFeed2": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-twitter.js",
                "Paragraph4": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-paragraph4.js",
                "AliReviews": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "BackInStock": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "GloboBackInStock": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "GrowaveWishlist": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "InfiniteOptionsShopPad": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "InkybayProductPersonalizer": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "LimeSpot": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "Loox": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "Opinew": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "Powr": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "ProductReviews": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "PushOwl": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "ReCharge": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "Rivyo": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "TrackingMore": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "Vitals": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js",
                "Wiser": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-3rd-elements.js"
            },
            "custom_elements_mapper": {
                "pf-click-action-element": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-click-action-element.js",
                "pf-dialog-element": "https://cdn.shopify.com/extensions/77e7b71d-5d40-4aab-88ec-f1b41fd94a94/pagefly-page-builder-149/assets/pagefly-dialog-element.js"
            }
        }
    </script> --}}
    <!-- END app block -->
    {{-- <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
    <script>(function () {
            if ("sendBeacon" in navigator && "performance" in window) {
                var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

                function handle_abandonment_event(e) {
                    var entries = performance.getEntries().filter(function (entry) {
                        return /monorail-edge.shopifysvc.com/.test(entry.name);
                    });
                    if (!window.abandonment_tracked && entries.length === 0) {
                        window.abandonment_tracked = true;
                        var currentMs = Date.now();
                        var navigation_start = performance.timing.navigationStart;
                        var payload = {
                            shop_id: 31987892355,
                            url: window.location.href,
                            navigation_start,
                            duration: currentMs - navigation_start,
                            session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                            page_type: "collection"
                        };
                        window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                            schema_id: "online_store_buyer_site_abandonment/1.1",
                            payload: payload,
                            metadata: {event_created_at_ms: currentMs, event_sent_at_ms: currentMs}
                        }));
                    }
                }

                window.addEventListener('pagehide', handle_abandonment_event);
            }
        }());</script> --}}
    {{-- <script id="web-pixels-manager-setup">(function e(e, d, r, n, o, i) {
            if (void 0 === i && (i = {}), !Boolean(null === (t = null === (a = window.Shopify) || void 0 === a ? void 0 : a.analytics) || void 0 === t ? void 0 : t.replayQueue)) {
                var a, t;
                window.Shopify = window.Shopify || {};
                var s = window.Shopify;
                s.analytics = s.analytics || {};
                var l = s.analytics;
                l.replayQueue = [], l.publish = function (e, d, r) {
                    return l.replayQueue.push([e, d, r]), !0
                };
                try {
                    self.performance.mark("wpm:start")
                } catch (e) {
                }
                var u = function () {
                        var e = {
                            modern: /Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[2-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,
                            legacy: /Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[2-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/
                        }, d = e.modern, r = e.legacy, n = navigator.userAgent;
                        return n.match(d) ? "modern" : n.match(r) ? "legacy" : "unknown"
                    }(), c = "modern" === u ? "modern" : "legacy", f = (null != o ? o : {modern: "", legacy: ""})[c],
                    m = function (e) {
                        return [e.baseUrl, "/wpm", "/b", e.hashVersion, "modern" === e.buildTarget ? "m" : "l", ".js"].join("")
                    }({baseUrl: r, hashVersion: n, buildTarget: c}), p = function (e) {
                        var d = e.version, r = e.bundleTarget, n = e.surface, o = e.pageUrl, i = e.monorailEndpoint;
                        return {
                            emit: function (e) {
                                var a = e.status, t = e.errorMsg, s = (new Date).getTime(), l = JSON.stringify({
                                    metadata: {event_sent_at_ms: s},
                                    events: [{
                                        schema_id: "web_pixels_manager_load/3.1",
                                        payload: {
                                            version: d,
                                            bundle_target: r,
                                            page_url: o,
                                            status: a,
                                            surface: n,
                                            error_msg: t
                                        },
                                        metadata: {event_created_at_ms: s}
                                    }]
                                });
                                if (!i) return console && console.warn && console.warn("[Web Pixels Manager] No Monorail endpoint provided, skipping logging."), !1;
                                try {
                                    return self.navigator.sendBeacon.bind(self.navigator)(i, l)
                                } catch (e) {
                                }
                                var u = new XMLHttpRequest;
                                try {
                                    return u.open("POST", i, !0), u.setRequestHeader("Content-Type", "text/plain"), u.send(l), !0
                                } catch (e) {
                                    return console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging to Monorail."), !1
                                }
                            }
                        }
                    }({
                        version: n,
                        bundleTarget: u,
                        surface: e.surface,
                        pageUrl: self.location.href,
                        monorailEndpoint: e.monorailEndpoint
                    });
                try {
                    i.browserTarget = u, function (e) {
                        var d = e.src, r = e.async, n = void 0 === r || r, o = e.onload, i = e.onerror, a = e.sri,
                            t = e.scriptDataAttributes, s = void 0 === t ? {} : t, l = document.createElement("script"),
                            u = document.querySelector("head"), c = document.querySelector("body");
                        if (l.async = n, l.src = d, a && (l.integrity = a, l.crossOrigin = "anonymous"), s) for (var f in s) if (Object.prototype.hasOwnProperty.call(s, f)) try {
                            l.dataset[f] = s[f]
                        } catch (e) {
                        }
                        if (o && l.addEventListener("load", o), i && l.addEventListener("error", i), u) u.appendChild(l); else {
                            if (!c) throw new Error("Did not find a head or body element to append the script");
                            c.appendChild(l)
                        }
                    }({
                        src: m, async: !0, onload: function () {
                            if (!function () {
                                var e, d;
                                return Boolean(null === (d = null === (e = window.Shopify) || void 0 === e ? void 0 : e.analytics) || void 0 === d ? void 0 : d.initialized)
                            }()) {
                                var r = window.webPixelsManager.init(e) || void 0;
                                if (r) {
                                    d(r);
                                    var n = window.Shopify.analytics;
                                    n.replayQueue.forEach((function (e) {
                                        var d = e[0], n = e[1], o = e[2];
                                        r.publishCustomEvent(d, n, o)
                                    })), n.replayQueue = [], n.publish = r.publishCustomEvent, n.visitor = r.visitor, n.initialized = !0
                                }
                            }
                        }, onerror: function () {
                            return p.emit({status: "failed", errorMsg: "".concat(m, " has failed to load")})
                        }, sri: function (e) {
                            var d = /^sha384-[A-Za-z0-9+/=]+$/;
                            return "string" == typeof e && d.test(e)
                        }(f) ? f : "", scriptDataAttributes: i
                    }), p.emit({status: "loading"})
                } catch (e) {
                    p.emit({status: "failed", errorMsg: (null == e ? void 0 : e.message) || "Unknown error"})
                }
            }
        })({
            shopId: 31987892355,
            storefrontBaseUrl: "https://mymonsteraudio.com",
            extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",
            // monorailEndpoint: "https://monorail-edge.shopifysvc.com/unstable/produce_batch",
            surface: "storefront-renderer",
            enabledBetaFlags: [],
            webPixelsConfigList: [{
                "id": "376930462",
                "configuration": "{\"locale\":\"en_US\",\"client\":\"monster\",\"environment\":\"production\",\"deployment_zone\":\"main_site\"}",
                "eventPayloadVersion": "v1",
                "runtimeContext": "STRICT",
                "scriptVersion": "4492434ddebd18327f58be8b29d07da2",
                "type": "APP",
                "apiClientId": 1888040,
                "privacyPurposes": ["ANALYTICS", "MARKETING"]
            }, {
                "id": "shopify-app-pixel",
                "configuration": "{}",
                "eventPayloadVersion": "v1",
                "runtimeContext": "STRICT",
                "scriptVersion": "0411",
                "apiClientId": "shopify-pixel",
                "type": "APP",
                "privacyPurposes": ["ANALYTICS", "MARKETING"]
            }, {
                "id": "shopify-custom-pixel",
                "eventPayloadVersion": "v1",
                "runtimeContext": "LAX",
                "scriptVersion": "0411",
                "apiClientId": "shopify-pixel",
                "type": "CUSTOM",
                "privacyPurposes": ["ANALYTICS", "MARKETING"]
            }],
            isMerchantRequest: false,
            effectiveTopLevelDomain: "",
            initData: {
                "shop": {
                    "name": "My Monster Audio",
                    "paymentSettings": {"currencyCode": "USD"},
                    "myshopifyDomain": "mymonsteraudio.myshopify.com",
                    "countryCode": "US",
                    "storefrontUrl": "https://mymonsteraudio.com"
                }, "customer": null, "cart": null, "checkout": null, "productVariants": [], "purchasingCompany": null
            },
        }, function pageEvents(webPixelsManagerAPI) {
            webPixelsManagerAPI.publish("page_viewed", {});
            webPixelsManagerAPI.publish("collection_viewed", {
                "collection": {
                    "id": "299650023582",
                    "title": "Lifestyle Series",
                    "productVariants": [{
                        "price": {"amount": 129.99, "currencyCode": "USD"},
                        "product": {
                            "title": "Monster Decora",
                            "vendor": "A nostalgic 30 watt home speaker with wireless Bluetooth connectivity, wireless Qi charger and multiple input",
                            "id": "4551791378563",
                            "untranslatedTitle": "Monster Decora",
                            "url": "/products/monster-decora",
                            "type": "Lifestyle"
                        },
                        "id": "32188695969923",
                        "image": {"src": "//mymonsteraudio.com/cdn/shop/products/Angle_2_e0e8605c-d3e7-45d1-a454-14b9ef18d409.jpg?v=1581988190"},
                        "sku": "MNDECORA-HZL",
                        "title": "Default Title",
                        "untranslatedTitle": "Default Title"
                    }, {
                        "price": {"amount": 129.99, "currencyCode": "USD"},
                        "product": {
                            "title": "Monster Trio",
                            "vendor": "Multi Qi Charger Speaker with smart Watch Compatible Dock.",
                            "id": "4550559137923",
                            "untranslatedTitle": "Monster Trio",
                            "url": "/products/trio",
                            "type": "Lifestyle"
                        },
                        "id": "32185174163587",
                        "image": {"src": "//mymonsteraudio.com/cdn/shop/products/Front_778ef9ec-d168-4a49-8a96-f4815c6e532d.jpg?v=1581964553"},
                        "sku": "MNTRIO",
                        "title": "Default Title",
                        "untranslatedTitle": "Default Title"
                    }, {
                        "price": {"amount": 129.99, "currencyCode": "USD"},
                        "product": {
                            "title": "Monster Retro",
                            "vendor": "Larger than the Decora, this retro 30 watt home speaker comes with multiple inputs, built-in qi charger, and Bluetooth connectivity.",
                            "id": "4550751453315",
                            "untranslatedTitle": "Monster Retro",
                            "url": "/products/monster-retro",
                            "type": "Lifestyle"
                        },
                        "id": "32185854984323",
                        "image": {"src": "//mymonsteraudio.com/cdn/shop/products/Angle_2.jpg?v=1581969072"},
                        "sku": "MNRETRO-DW",
                        "title": "Default Title",
                        "untranslatedTitle": "Default Title"
                    }]
                }
            });
        }, "https://mymonsteraudio.com/cdn", "9bea40f4w74d83a37pc4328d8bm553b069e", {
            "modern": "",
            "legacy": ""
        }, {
            "shopId": "31987892355",
            "storefrontBaseUrl": "https://mymonsteraudio.com",
            "extensionBaseUrl": "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",
            "surface": "storefront-renderer",
            "enabledBetaFlags": "[]",
            "isMerchantRequest": "false",
            "hashVersion": "9bea40f4w74d83a37pc4328d8bm553b069e"
        });</script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'USD';
        var meta = {
            "products": [{
                "id": 4551791378563,
                "gid": "gid:\/\/shopify\/Product\/4551791378563",
                "vendor": "A nostalgic 30 watt home speaker with wireless Bluetooth connectivity, wireless Qi charger and multiple input",
                "type": "Lifestyle",
                "variants": [{
                    "id": 32188695969923,
                    "price": 12999,
                    "name": "Monster Decora",
                    "public_title": null,
                    "sku": "MNDECORA-HZL"
                }]
            }, {
                "id": 4550559137923,
                "gid": "gid:\/\/shopify\/Product\/4550559137923",
                "vendor": "Multi Qi Charger Speaker with smart Watch Compatible Dock.",
                "type": "Lifestyle",
                "variants": [{
                    "id": 32185174163587,
                    "price": 12999,
                    "name": "Monster Trio",
                    "public_title": null,
                    "sku": "MNTRIO"
                }]
            }, {
                "id": 4550751453315,
                "gid": "gid:\/\/shopify\/Product\/4550751453315",
                "vendor": "Larger than the Decora, this retro 30 watt home speaker comes with multiple inputs, built-in qi charger, and Bluetooth connectivity.",
                "type": "Lifestyle",
                "variants": [{
                    "id": 32185854984323,
                    "price": 12999,
                    "name": "Monster Retro",
                    "public_title": null,
                    "sku": "MNRETRO-DW"
                }]
            }], "page": {"pageType": "collection", "resourceType": "collection", "resourceId": 299650023582}
        };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script class="analytics">
        (function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function (token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function (token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function (e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function (error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1',
                            {
                                shop_id: 31987892355,
                                theme_id: 139435016350,
                                app_name: "storefront",
                                context_url: window.location.href,
                                source_url: "//mymonsteraudio.com/cdn/s/trekkie.storefront.0acbcc60e879fb44c87ca67c62fa1e49f3a2c6ae.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = '//mymonsteraudio.com/cdn/s/trekkie.storefront.0acbcc60e879fb44c87ca67c62fa1e49f3a2c6ae.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = '//mymonsteraudio.com/cdn/s/trekkie.storefront.0acbcc60e879fb44c87ca67c62fa1e49f3a2c6ae.min.js';
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                {
                    "Trekkie": {
                        "appName": "storefront",
                        "development": false,
                        "defaultAttributes": {
                            "shopId": 31987892355,
                            "isMerchantRequest": null,
                            "themeId": 139435016350,
                            "themeCityHash": "16609850660500432183",
                            "contentLanguage": "en",
                            "currency": "USD"
                        },
                        "isServerSideCookieWritingEnabled": true,
                        "monorailRegion": "shop_domain"
                    },
                    "Session Attribution": {},
                    "S2S": {
                        "facebookCapiEnabled": false,
                        "source": "trekkie-storefront-renderer",
                        "apiClientId": 580111
                    }
                }
            );

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {
                }
                ;
                document.write = originalDocumentWrite;

                window.ShopifyAnalytics.lib.page(null, {
                    "pageType": "collection",
                    "resourceType": "collection",
                    "resourceId": 299650023582,
                    "shopifyEmitted": true
                });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);
                    window.ShopifyAnalytics.lib.track("Viewed Product Category", {
                        "currency": "USD",
                        "category": "Collection: lifestyle",
                        "collectionName": "lifestyle",
                        "collectionId": 299650023582,
                        "nonInteraction": true
                    }, undefined, undefined, {"shopifyEmitted": true});
                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//mymonsteraudio.com/cdn/shopifycloud/shopify/assets/shop_events_listener-7e40c6290cd8fa1230e4aaf3237dddc1b481b77fa56e4b2df23c8bb8ad35e726.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
    <script
            defer
            src="/site/js/shopify-perf-kit-1.5.0.min.js"
            data-application="storefront-renderer"
            data-shop-id="31987892355"
            data-render-region="gcp-asia-southeast1"
            data-page-type="collection"
            data-theme-instance-id="139435016350"
            data-monorail-region="shop_domain"
            data-resource-timing-sampling-rate="10"
    ></script> --}}
</head>
