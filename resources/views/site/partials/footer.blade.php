<!-- BEGIN sections: footer-group -->
<footer id="shopify-section-sections--17549455491230__footer"
        class="shopify-section shopify-section-group-footer-group shopify-section--footer">
    <style>
        @media screen and (min-width: 1000px) {
            #shopify-section-sections--17549455491230__footer {
                --footer-block-list-gap: var(--spacing-10);
                --footer-block-list-justify-content: space-between;
            }
        }
    </style>
    <div class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__block-list">
                    <div class="footer__block footer__block--newsletter">
                        <div class="v-stack gap-6"><p class="h3">Be the first one to know</p>
                            <div class="prose text-subdued"><p>Subscribe to newsletter</p></div>
                            <form method="post" action="/contact#footer-newsletter" id="footer-newsletter"
                                  accept-charset="UTF-8" class="footer__newsletter-form form"><input type="hidden"
                                                                                                     name="form_type"
                                                                                                     value="customer"/><input
                                        type="hidden" name="utf8" value="✓"/><input type="hidden" name="contact[tags]"
                                                                                    value="newsletter">
                                <div class="form-control"><input
                                            id="input-sections--17549455491230__footer--contactemail"
                                            class="input is-floating" type="email" dir="ltr" name="contact[email]"
                                            placeholder=" "


                                            autocomplete="email"

                                            enterkeyhint="send"
                                            required

                                    ><label for="input-sections--17549455491230__footer--contactemail"
                                            class="floating-label">E-mail</label>
                                    <div class="self-submit-button">
                                        <button type="submit" class="circle-chevron hover:colors">
                                            <span class="sr-only">Subscribe</span>
                                            <svg role="presentation" focusable="false" width="5" height="8"
                                                 class="icon icon-chevron-right-small reverse-icon"
                                                 viewBox="0 0 5 8">
                                                <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor"
                                                      stroke-width="1.5"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer__block footer__block--menu"><p class="bold">Products Menu</p>
                        @php
                            $productCategories = \App\Model\Admin\Category::query()->with(['childs'])
                                       ->where(['type' => 1, 'parent_id' => 0])
                                       ->orderBy('sort_order')
                                       ->get();
                               $allChilds = collect($productCategories)
                                   ->pluck('childs')
                                   ->flatten(1)
                                   ->all();
                            @endphp
                        <ul class="v-stack gap-3" role="list">
                            @foreach($allChilds as $child)
                                <li>
                                    <a href="{{ route('front.show-product-list', ['categorySlug' => $child->slug]) }}" class="inline-block link-faded break-all">{{ $child->name }}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="#" class="inline-block link-faded break-all">Privacy
                                    Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__block footer__block--menu"><p class="bold">New Products</p>
                        <ul class="v-stack gap-3" role="list">
                            @foreach($newProducts as $newProduct)
                                <li>
                                    <a href="{{ route('front.show-product-detail', ['slug' => $newProduct->slug]) }}" class="inline-block link-faded break-all">{{ $newProduct->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="footer__block footer__block--text"><p class="bold">About</p>
                        <div class="prose text-subdued">
                            <p>{{ $config->web_des }}
                            </p></div>
                    </div>
                </div>
                <div class="footer__aside">
                    <div class="footer__aside-bottom"><p class="footer__copyright text-sm text-subdued">© 2025, My
                            Monster Audio. <a target="_blank" rel="nofollow"
                                              href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
                                by Shopify</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
