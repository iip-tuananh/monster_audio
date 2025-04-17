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
                        <div class="v-stack gap-6"><p class="h3">Trở thành người đầu tiên nhận thông tin mới nhất</p>
                            <div class="prose text-subdued"><p>Đăng ký nhận bản tin

                                </p></div>
                            <form method="#" action="#" id="footer-newsletter"
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
                    <div class="footer__block footer__block--menu"><p class="bold">Danh mục sản phẩm</p>
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
                    <div class="footer__block footer__block--menu"><p class="bold">Sản phẩm mới</p>
                        <ul class="v-stack gap-3" role="list">
                            @foreach($newProducts as $newProduct)
                                <li>
                                    <a href="{{ route('front.show-product-detail', ['slug' => $newProduct->slug]) }}" class="inline-block link-faded break-all">{{ $newProduct->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="footer__block footer__block--text"><p class="bold">Về chúng tôi</p>
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
                                <a href="{{ $config->youtube }}" class="tap-area" target="_blank" rel="noreferrer noopener" aria-label="Follow on Instagram">
                                    <svg role="presentation" focusable="false" width="27" height="27"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.397 6.36989C14.4258 5.53763 14.2438 4.7116 13.8679 3.96849C13.6129 3.66358 13.259 3.45781 12.8678 3.38704C11.2499 3.24024 9.62537 3.18007 8.00106 3.20679C6.38268 3.17886 4.76396 3.23709 3.15176 3.38123C2.83302 3.43921 2.53805 3.58871 2.30284 3.8115C1.77954 4.29411 1.72139 5.11977 1.66325 5.81751C1.57889 7.07203 1.57889 8.33079 1.66325 9.58531C1.68007 9.97803 1.73854 10.3678 1.83768 10.7482C1.90779 11.0419 2.04963 11.3136 2.25051 11.539C2.48732 11.7736 2.78916 11.9316 3.11687 11.9925C4.37043 12.1473 5.63352 12.2114 6.89631 12.1844C8.93139 12.2135 10.7164 12.1844 12.8271 12.0216C13.1629 11.9644 13.4732 11.8062 13.7167 11.5681C13.8795 11.4052 14.0011 11.2059 14.0714 10.9866C14.2794 10.3485 14.3815 9.68073 14.3738 9.00968C14.397 8.68406 14.397 6.71876 14.397 6.36989ZM6.68698 9.35855V5.75936L10.1292 7.56768C9.16397 8.10261 7.89059 8.70732 6.68698 9.35855Z" fill="currentColor"></path>
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
