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
                    <div class="footer__aside-top"><ul class="social-media " role="list"><li>
                                <a href="{{ $config->facebook }}" class="tap-area" target="_blank" rel="noreferrer noopener" aria-label="Follow on Facebook"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-facebook" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.183 21.85v-8.868H7.2V9.526h2.983V6.982a4.17 4.17 0 0 1 4.44-4.572 22.33 22.33 0 0 1 2.667.144v3.084h-1.83a1.44 1.44 0 0 0-1.713 1.68v2.208h3.423l-.447 3.456h-2.97v8.868h-3.57Z" fill="currentColor"></path>
                                    </svg></a>
                            </li><li>
                                <a href="{{ $config->youtube }}" class="tap-area" target="_blank" rel="noreferrer noopener" aria-label="Follow on Instagram"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-instagram" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.4c-2.607 0-2.934.011-3.958.058-1.022.046-1.72.209-2.33.446a4.705 4.705 0 0 0-1.7 1.107 4.706 4.706 0 0 0-1.108 1.7c-.237.611-.4 1.31-.446 2.331C2.41 9.066 2.4 9.392 2.4 12c0 2.607.011 2.934.058 3.958.046 1.022.209 1.72.446 2.33a4.706 4.706 0 0 0 1.107 1.7c.534.535 1.07.863 1.7 1.108.611.237 1.309.4 2.33.446 1.025.047 1.352.058 3.959.058s2.934-.011 3.958-.058c1.022-.046 1.72-.209 2.33-.446a4.706 4.706 0 0 0 1.7-1.107 4.706 4.706 0 0 0 1.108-1.7c.237-.611.4-1.31.446-2.33.047-1.025.058-1.352.058-3.959s-.011-2.934-.058-3.958c-.047-1.022-.209-1.72-.446-2.33a4.706 4.706 0 0 0-1.107-1.7 4.705 4.705 0 0 0-1.7-1.108c-.611-.237-1.31-.4-2.331-.446C14.934 2.41 14.608 2.4 12 2.4Zm0 1.73c2.563 0 2.867.01 3.88.056.935.042 1.443.199 1.782.33.448.174.768.382 1.104.718.336.336.544.656.718 1.104.131.338.287.847.33 1.783.046 1.012.056 1.316.056 3.879 0 2.563-.01 2.867-.056 3.88-.043.935-.199 1.444-.33 1.782a2.974 2.974 0 0 1-.719 1.104 2.974 2.974 0 0 1-1.103.718c-.339.131-.847.288-1.783.33-1.012.046-1.316.056-3.88.056-2.563 0-2.866-.01-3.878-.056-.936-.042-1.445-.199-1.783-.33a2.974 2.974 0 0 1-1.104-.718 2.974 2.974 0 0 1-.718-1.104c-.131-.338-.288-.847-.33-1.783-.047-1.012-.056-1.316-.056-3.879 0-2.563.01-2.867.056-3.88.042-.935.199-1.443.33-1.782.174-.448.382-.768.718-1.104a2.974 2.974 0 0 1 1.104-.718c.338-.131.847-.288 1.783-.33C9.133 4.14 9.437 4.13 12 4.13Zm0 11.07a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm0-8.13a4.93 4.93 0 1 0 0 9.86 4.93 4.93 0 0 0 0-9.86Zm6.276-.194a1.152 1.152 0 1 1-2.304 0 1.152 1.152 0 0 1 2.304 0Z" fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li>
                            <li>
                                <a href="{{ $config->twitter }}" class="tap-area" target="_blank" rel="noreferrer noopener" aria-label="Follow on Twitter"><svg role="presentation" focusable="false" width="27" height="27" class="icon icon-youtube" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.414 4.96c1.506-.024 2.307.479 3.072 1.117.65-.05 1.495-.383 1.992-.614l.484-.242c-.285.702-.67 1.253-1.262 1.67-.131.093-.262.218-.426.277v.009c.843-.008 1.539-.357 2.2-.546v.01a5.934 5.934 0 0 1-1.318 1.384l-.607.442c.01.817-.014 1.598-.18 2.285-.971 3.995-3.544 6.707-7.616 7.868-1.462.418-3.825.59-5.5.208-.83-.188-1.581-.402-2.285-.684a9.54 9.54 0 0 1-1.1-.519l-.342-.19c.378.01.82.105 1.243.043.382-.056.757-.042 1.11-.113.879-.176 1.66-.41 2.332-.77.326-.175.82-.38 1.053-.632a3.59 3.59 0 0 1-1.157-.19c-1.258-.407-1.99-1.154-2.466-2.277.381.038 1.479.129 1.735-.07-.48-.023-.94-.278-1.27-.467-1.012-.58-1.837-1.551-1.83-3.047l.398.173c.254.098.512.15.815.208.128.024.384.093.531.043h-.019c-.195-.208-.514-.347-.71-.571-.65-.739-1.258-1.875-.873-3.229.097-.343.252-.646.417-.926l.019.009c.076.144.244.25.35.372.332.376.741.714 1.158 1.013 1.42 1.016 2.698 1.64 4.75 2.103.522.117 1.124.207 1.746.208-.175-.466-.119-1.22.019-1.67.346-1.134 1.097-1.952 2.2-2.39.263-.105.556-.18.863-.242l.474-.052Z" fill="currentColor"></path>
                                    </svg></a>
                            </li></ul>
                    </div>
                    <div class="footer__aside-bottom"><p class="footer__copyright text-sm text-subdued">© 2025
                            Monster Audio. <a target="_blank" rel="nofollow"
                                              href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
                                by LTA Teams</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
