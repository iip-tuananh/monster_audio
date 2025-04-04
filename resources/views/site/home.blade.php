@extends('site.layouts.master')
@section('title')
    {{ $config->web_title }}
@endsection
@section('description')
    {{ $config->web_des }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection
@section('css')
@endsection
@section('content')
    <section id="shopify-section-template--17549462503582__slideshow" class="shopify-section shopify-section--slideshow">
        <style>
            #shopify-section-template--17549462503582__slideshow {
                --slideshow-background: linear-gradient(60deg, rgba(60, 65, 68, 1), rgba(23, 29, 33, 1) 98%);
                --slideshow-controls-background: ;
                --slideshow-controls-color: 255 255 255;
                margin-block-start: calc(-1 * var(--header-height) * var(--section-is-first));
            }

            #block-video_WWE7PJ {
                --slideshow-slide-background: linear-gradient(60deg, rgba(60, 65, 68, 1), rgba(23, 29, 33, 1) 98%);
                --slideshow-slide-controls-background: ;
                --slideshow-slide-controls-color: 255 255 255;
            }

            #block-video_UjkF9P {
                --slideshow-slide-background: linear-gradient(60deg, rgba(60, 65, 68, 1), rgba(23, 29, 33, 1) 98%);
                --slideshow-slide-controls-background: ;
                --slideshow-slide-controls-color: 255 255 255;
            }

            #block-video_Ue6UWT {
                --slideshow-slide-background: linear-gradient(60deg, rgba(60, 65, 68, 1), rgba(23, 29, 33, 1) 98%);
                --slideshow-slide-controls-background: ;
                --slideshow-slide-controls-color: 255 255 255;
            }
        </style>
        <x-slideshow class="slideshow  slideshow--multiple-slides" allow-transparent-header>
            <slideshow-carousel id="slideshow-template--17549462503582__slideshow" class="slideshow__carousel"
                reveal-on-scroll="true" selector=".slideshow__slide" transition="fade_with_text" autoplay="6" role="region">
                <custom-cursor class="slideshow__cursor circle-button circle-button--lg circle-button--fill"
                    aria-hidden="true">
                    <svg role="presentation" focusable="false" width="7" height="10" class="icon icon-chevron-right"
                        viewBox="0 0 7 10">
                        <path d="m1 9 4-4-4-4" fill="none" stroke="currentColor" stroke-width="2"></path>
                    </svg>
                    <svg class="slideshow__cursor-ring" viewBox="-28 -28 56 56" width="56" height="56" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle r="27" stroke-dasharray="158.33626974092556" stroke-dashoffset="158.33626974092556px">
                        </circle>
                    </svg>
                </custom-cursor>
                <a id="block-video_WWE7PJ"
                    href="#"
                    class="slideshow__slide is-selected" data-slide-type="video" role="group">
                    <div class="content-over-media content-over-media--lg "
                        style="--content-over-media-content-max-width: 780px; --content-over-media-overlay: 0 0 0 / 0.3">
                        <video-media class="sm:hidden">
                            <video playsinline="true" class="object-cover sm:hidden" muted="muted" loop="loop"
                                preload="metadata"
                                poster="//mymonsteraudio.com/cdn/shop/files/preview_images/e69321cf77bb494ebd767444cf78212e.thumbnail.0000000000_400x.jpg?v=1723829065">
                                <source
                                    src="//mymonsteraudio.com/cdn/shop/videos/c/vp/e69321cf77bb494ebd767444cf78212e/e69321cf77bb494ebd767444cf78212e.HD-1080p-7.2Mbps-33321715.mp4?v=0"
                                    type="video/mp4">
                                <img
                                    src="//mymonsteraudio.com/cdn/shop/files/preview_images/e69321cf77bb494ebd767444cf78212e.thumbnail.0000000000_400x.jpg?v=1723829065">
                            </video>
                        </video-media>
                        <video-media class="hidden sm:block">
                            <video playsinline="true" preload="metadata" muted="muted" loop="loop"
                                poster="//mymonsteraudio.com/cdn/shop/files/preview_images/e69321cf77bb494ebd767444cf78212e.thumbnail.0000000000_800x.jpg?v=1723829065">
                                <source
                                    src="//mymonsteraudio.com/cdn/shop/videos/c/vp/e69321cf77bb494ebd767444cf78212e/e69321cf77bb494ebd767444cf78212e.HD-1080p-7.2Mbps-33321715.mp4?v=0"
                                    type="video/mp4">
                                <img
                                    src="//mymonsteraudio.com/cdn/shop/files/preview_images/e69321cf77bb494ebd767444cf78212e.thumbnail.0000000000_800x.jpg?v=1723829065">
                            </video>
                        </video-media>
                        <div
                            class="place-self-center text-center sm:place-self-center-start sm:text-start  text-custom"style="--text-color: 255 255 255;">
                            <div class="prose">
                                <p class="subheading" data-sequence="subheading">The Ultimate Party Speaker</p>
                                <p class="h0" data-sequence="heading">
                                    <split-lines>GI-30</split-lines>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a id="block-video_UjkF9P"
                    href="#"
                    class="slideshow__slide " data-slide-type="video" role="group">
                    <div class="content-over-media content-over-media--lg "
                        style="--content-over-media-content-max-width: 780px; --content-over-media-overlay: 0 0 0 / 0.3">
                        <video-media class="sm:hidden">
                            <video playsinline="true" class="object-cover sm:hidden" muted="muted" loop="loop"
                                preload="metadata"
                                poster="//mymonsteraudio.com/cdn/shop/files/preview_images/b295965b81ad4b1fbd393de75bb32402.thumbnail.0000000000_400x.jpg?v=1723829090">
                                <source
                                    src="//mymonsteraudio.com/cdn/shop/videos/c/vp/b295965b81ad4b1fbd393de75bb32402/b295965b81ad4b1fbd393de75bb32402.HD-1080p-7.2Mbps-33321734.mp4?v=0"
                                    type="video/mp4">
                                <img
                                    src="//mymonsteraudio.com/cdn/shop/files/preview_images/b295965b81ad4b1fbd393de75bb32402.thumbnail.0000000000_400x.jpg?v=1723829090">
                            </video>
                        </video-media>
                        <video-media class="hidden sm:block">
                            <video playsinline="true" preload="metadata" muted="muted" loop="loop"
                                poster="//mymonsteraudio.com/cdn/shop/files/preview_images/b295965b81ad4b1fbd393de75bb32402.thumbnail.0000000000_800x.jpg?v=1723829090">
                                <source
                                    src="//mymonsteraudio.com/cdn/shop/videos/c/vp/b295965b81ad4b1fbd393de75bb32402/b295965b81ad4b1fbd393de75bb32402.HD-1080p-7.2Mbps-33321734.mp4?v=0"
                                    type="video/mp4">
                                <img
                                    src="//mymonsteraudio.com/cdn/shop/files/preview_images/b295965b81ad4b1fbd393de75bb32402.thumbnail.0000000000_800x.jpg?v=1723829090">
                            </video>
                        </video-media>
                        <div
                            class="place-self-center text-center sm:place-self-center-start sm:text-start  text-custom"style="--text-color: 255 255 255;">
                            <div class="prose">
                                <p class="subheading" data-sequence="subheading">The Ultimate Portable speaker</p>
                                <p class="h0" data-sequence="heading">
                                    <split-lines>Rockin Roller X</split-lines>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <div id="block-video_Ue6UWT" class="slideshow__slide " data-slide-type="video" role="group">
                    <div class="content-over-media content-over-media--lg "
                        style="--content-over-media-content-max-width: 780px; --content-over-media-overlay: 0 0 0 / 0.3">
                        <video-media class="sm:hidden">
                            <video playsinline="true" class="object-cover sm:hidden" muted="muted" loop="loop"
                                preload="metadata"
                                poster="//mymonsteraudio.com/cdn/shop/files/preview_images/28952383805a4765a8b15c01b8e3f59a.thumbnail.0000000000_400x.jpg?v=1722270347">
                                <source
                                    src="//mymonsteraudio.com/cdn/shop/videos/c/vp/28952383805a4765a8b15c01b8e3f59a/28952383805a4765a8b15c01b8e3f59a.HD-720p-1.6Mbps-32466983.mp4?v=0"
                                    type="video/mp4">
                                <img
                                    src="//mymonsteraudio.com/cdn/shop/files/preview_images/28952383805a4765a8b15c01b8e3f59a.thumbnail.0000000000_400x.jpg?v=1722270347">
                            </video>
                        </video-media>
                        <video-media class="hidden sm:block">
                            <video playsinline="true" preload="metadata" muted="muted" loop="loop"
                                poster="//mymonsteraudio.com/cdn/shop/files/preview_images/28952383805a4765a8b15c01b8e3f59a.thumbnail.0000000000_800x.jpg?v=1722270347">
                                <source
                                    src="//mymonsteraudio.com/cdn/shop/videos/c/vp/28952383805a4765a8b15c01b8e3f59a/28952383805a4765a8b15c01b8e3f59a.HD-720p-1.6Mbps-32466983.mp4?v=0"
                                    type="video/mp4">
                                <img
                                    src="//mymonsteraudio.com/cdn/shop/files/preview_images/28952383805a4765a8b15c01b8e3f59a.thumbnail.0000000000_800x.jpg?v=1722270347">
                            </video>
                        </video-media>
                        <div
                            class="place-self-center text-center sm:place-self-center-start sm:text-start  text-custom"style="--text-color: 255 255 255;">
                            <div class="prose">
                                <p class="subheading" data-sequence="subheading">Experience rich sound with full weather
                                    resistence</p>
                                <p class="h0" data-sequence="heading">
                                    <split-lines>36&quot; Dolby Atmos Indoor / Outdoor Soundbar</split-lines>
                                </p>
                                <a class="button button--xl"
                                    style="--button-background: 248 58 58 / var(--button-background-opacity, 1);--button-outline-color: 248 58 58;--button-text-color: 255 255 255;"
                                    href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideshow__controls">
                    <page-dots class="numbered-dots" aria-controls="slideshow-template--17549462503582__slideshow">
                        <button type="button" class="numbered-dots__item" aria-current="true">
                            <svg width="100%" height="100%" style="--percent: 0">
                                <circle cx="50%" cy="50%" r="15"></circle>
                                <circle cx="50%" cy="50%" r="15"></circle>
                            </svg>
                            <span>1</span>
                        </button>
                        <button type="button" class="numbered-dots__item" aria-current="false">
                            <svg width="100%" height="100%" style="--percent: 0">
                                <circle cx="50%" cy="50%" r="15"></circle>
                                <circle cx="50%" cy="50%" r="15"></circle>
                            </svg>
                            <span>2</span>
                        </button>
                        <button type="button" class="numbered-dots__item" aria-current="false">
                            <svg width="100%" height="100%" style="--percent: 0">
                                <circle cx="50%" cy="50%" r="15"></circle>
                                <circle cx="50%" cy="50%" r="15"></circle>
                            </svg>
                            <span>3</span>
                        </button>
                    </page-dots>
                </div>
            </slideshow-carousel>
        </x-slideshow>
    </section>
    {{-- <section id="shopify-section-template--17549462503582__collection-list"
        class="shopify-section shopify-section--collection-list">
        <style>
            #shopify-section-template--17549462503582__collection-list {
                --section-background-hash: 0;
            }

            #shopify-section-template--17549462503582__collection-list+* {
                --previous-section-background-hash: 0;
            }
        </style>
        <style>
            #shopify-section-template--17549462503582__collection-list .collection-list {
                --collection-list-grid: auto / auto-flow 73vw;
            }

            @media screen and (min-width: 700px) {
                #shopify-section-template--17549462503582__collection-list .collection-list {
                    --collection-list-grid: auto / auto-flow 36vw;
                }
            }

            @media screen and (min-width: 1000px) {
                #shopify-section-template--17549462503582__collection-list .collection-list {
                    --collection-list-grid: auto / auto-flow calc(var(--container-inner-width) / 4 - (var(--grid-gutter) / 3 * 2));
                }
            }

            @media screen and (min-width: 1400px) {
                #shopify-section-template--17549462503582__collection-list .collection-list {
                    --collection-list-grid: auto / auto-flow calc(var(--container-inner-width) / 4 - (var(--grid-gutter) / 4 * 3));
                }
            }
        </style>
        <div class="section   section-blends section-full">
            <div class="section-stack">
                <section-header class="section-header ">
                    <a href="#" class="text-with-icon group">
                        <span class="reversed-link">View all Products</span>
                        <span class="circle-chevron group-hover:colors">
                            <svg role="presentation" focusable="false" width="5" height="8"
                                class="icon icon-chevron-right-small reverse-icon" viewBox="0 0 5 8">
                                <path d="m.75 7 3-3-3-3" fill="none" stroke="currentColor" stroke-width="1.5"></path>
                            </svg>
                        </span>
                    </a>
                </section-header>
                <div class="floating-controls-container">
                    <scroll-carousel selector=".collection-card"
                        id="scroll-area-template--17549462503582__collection-list" class="scroll-area bleed ">
                        <collection-list class="collection-list">
                            @foreach ($newProducts as $product)
                            <a href="{{route('front.show-product-detail', $product->slug)}}" class="collection-card  shadow" reveal-js>
                                <div class="content-over-media group rounded-sm"
                                    style="--content-over-media-overlay: 0 0 0 / 0.3">
                                    <img src="{{$product->image ? $product->image->path : ''}}"
                                        alt=""
                                        srcset="{{$product->image ? $product->image->path : ''}}"
                                        width="1024" height="1536" loading="lazy"
                                        sizes="(max-width: 699px) 73vw, 400px" class="zoom-image">
                                    <div class="collection-card__content-wrapper text-custom place-self-start-center text-center"
                                        style="--text-color: 255 255 255">
                                        <div class="collection-card__content prose">
                                            <p class="subheading">{{$product->category->name}}</p>
                                            <p class="h2">{{$product->name}}</p>
                                        </div>
                                        <svg role="presentation" focusable="false" width="40" height="40"
                                            class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </collection-list>
                    </scroll-carousel>
                    <button is="prev-button" class="circle-button circle-button--lg circle-button--fill border group"
                        aria-controls="scroll-area-template--17549462503582__collection-list" disabled>
                        <span class="sr-only">Previous</span>
                        <span class="animated-arrow animated-arrow--reverse"></span>
                    </button>
                    <button is="next-button" class="circle-button circle-button--lg circle-button--fill border group"
                        aria-controls="scroll-area-template--17549462503582__collection-list">
                        <span class="sr-only">Next</span>
                        <span class="animated-arrow"></span>
                    </button>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="shopify-section-template--17549462503582__media-grid"
        class="shopify-section shopify-section--media-grid">
        <style>
            #shopify-section-template--17549462503582__media-grid {
                --section-background-hash: 0;
            }

            #shopify-section-template--17549462503582__media-grid+* {
                --previous-section-background-hash: 0;
            }
        </style>
        <style>
            #shopify-section-template--17549462503582__media-grid {
                --media-grid-row-height: 150px;
            }

            @media screen and (min-width: 700px) {
                #shopify-section-template--17549462503582__media-grid {
                    --media-grid-row-height: 290px;
                }
            }

            #media-grid-item-1 {
                --content-over-media-overlay: 0 0 0 /0.0;
            }

            #media-grid-item-2 {
                --content-over-media-overlay: 0 0 0 /0.0;
            }

            #media-grid-29246d34-c6e0-4373-84f6-b15e57736a00 {
                --content-over-media-overlay: 0 0 0 /0.0;
            }
        </style>
        <div class="section   section-blends section-full">
            <media-grid class="media-grid">
                @foreach ($productCategories as $key => $category)
                @if ($key == 0)
                    <a href="{{route('front.show-product-category', $category->slug)}}" class="media-grid__item shadow group" reveal-js
                        style="--media-grid-column-span: 2; --media-grid-row-span: 2">
                        <div id="media-grid-item-1"
                            class="content-over-media rounded bg-custom text-custom"style="--background: 0 0 0; --text-color: 255 255 255;">
                            <img src="{{$category->image ? $category->image->path : ''}}"
                                alt="{{$category->name}}"
                                srcset="{{$category->image ? $category->image->path : ''}}"
                                width="1754" height="1240" loading="lazy"
                                sizes="(max-width: 699px) 100vw, min(780px, 50vw)"
                                class="content-over-media__media zoom-image">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center">
                                <div class="prose">
                                    <p class="h4">
                                        {{$category->name}}
                                    </p>
                                    <button type="button" class="button button--lg" onclick="window.location.href='{{route('front.show-product-category', $category->slug)}}'"
                                        style="--button-background: 0 0 0 / var(--button-background-opacity, 1);--button-outline-color: 0 0 0;--button-text-color: 255 255 255;"
                                        is="custom-button">View Products</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="{{route('front.show-product-category', $category->slug)}}"
                        class="media-grid__item shadow group" reveal-js
                        style="--media-grid-column-span: 2; --media-grid-row-span: 1">
                        <div id="media-grid-item-2"
                            class="content-over-media rounded bg-custom text-custom"style="--background: 0 0 0; --text-color: 255 255 255;">
                            <img src="{{$category->image ? $category->image->path : ''}}"
                                alt=""
                                srcset="{{$category->image ? $category->image->path : ''}}"
                                width="5844" height="3896" loading="lazy"
                                sizes="(max-width: 699px) 100vw, min(780px, 50vw)"
                                class="content-over-media__media zoom-image">
                            <div class="place-self-center text-center sm:place-self-center sm:text-center">
                                <div class="prose">
                                    <p class="h4">
                                        {{$category->name}}
                                    </p>
                                    <button type="button" class="button button--lg" onclick="window.location.href='{{route('front.show-product-category', $category->slug)}}'"
                                        style="--button-background: 0 0 0 / var(--button-background-opacity, 1);--button-outline-color: 0 0 0;--button-text-color: 255 255 255;"
                                        is="custom-button">View Product</button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
                @endforeach
            </media-grid>
        </div>
    </section>
    <section id="shopify-section-template--17549462503582__before-after-image"
        class="shopify-section shopify-section--before-after-image">
        <style>
            #shopify-section-template--17549462503582__before-after-image {
                --section-background-hash: 0;
            }

            #shopify-section-template--17549462503582__before-after-image+* {
                --previous-section-background-hash: 0;
            }
        </style>
        <style>
            #shopify-section-template--17549462503582__before-after-image {
                --section-stack-intro: 50%;
                --section-stack-main: 66.6667%;
                --before-after-initial-drag-position: 20%;
            }
        </style>
        <div class="section   section-blends section-full">
            <div class="section-stack section-stack--center ">
                <div class="section-stack__intro">
                    <div class="prose text-center">
                        <h2 class="h2">About us</h2>
                        <p>{!! $config->introduction !!}</p>
                    </div>
                </div>
                <div class="section-stack__main">
                    <div class="before-after shadow  text-custom"style="--text-color: 255 255 255;">
                        <div class="before-after__before-image  text-custom"style="--text-color: 255 255 255;">
                            <picture><img
                                    src="//mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=1500"
                                    alt=""
                                    srcset="//mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=300 300w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=400 400w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=500 500w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=600 600w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=800 800w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=1000 1000w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=1200 1200w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_03.jpg?v=1707954331&amp;width=1400 1400w"
                                    width="1500" height="1000" loading="lazy"
                                    sizes="(max-width: 999px) 100vw, 1000px" draggable="false" class="rounded w-full">
                            </picture>
                        </div>
                        <div class="before-after__after-image  text-custom"style="--text-color: 255 255 255;">
                            <picture><img
                                    src="//mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=1400"
                                    alt=""
                                    srcset="//mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=300 300w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=400 400w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=500 500w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=600 600w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=800 800w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=1000 1000w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=1200 1200w, //mymonsteraudio.com/cdn/shop/files/MNVISION156_Monster_lifestyle_04.jpg?v=1707954331&amp;width=1400 1400w"
                                    width="1400" height="933" loading="lazy"
                                    sizes="(max-width: 999px) 100vw, 1000px" class="object-fill rounded"
                                    draggable="false"></picture>
                        </div>
                        <div class="before-after__cursor-wrapper">
                            <split-cursor class="before-after__cursor" style="--background: 255 255 255">
                                <span class="sr-only">Drag</span>
                                <svg role="presentation" focusable="false" width="28" height="35"
                                    viewBox="0 0 32 40">
                                    <path
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16V24C32 32.8366 24.8366 40 16 40C7.16344 40 0 32.8366 0 24V16Z"
                                        fill="#ffffff"></path>
                                    <path fill="#000000" d="M11 14H13V26H11zM15 14H17V26H15zM19 14H21V26H19z"></path>
                                </svg>
                            </split-cursor>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="shopify-section-template--17549462503582__multiple-images-with-text"
        class="shopify-section shopify-section--multiple-images-with-text">
        <style>
            #shopify-section-template--17549462503582__multiple-images-with-text {
                --section-background-hash: 0;
            }

            #shopify-section-template--17549462503582__multiple-images-with-text+* {
                --previous-section-background-hash: 0;
            }
        </style>
        <style>
            #shopify-section-template--17549462503582__multiple-images-with-text {
                --multiple-images-with-text-max-width: 580px;
                --multiple-images-with-text-images-grid-template: none;
                --multiple-images-with-text-images-alignment: center;
                --multiple-images-with-text-main-image-offset: 0px;
            }

            @media screen and (min-width: 1000px) {
                #shopify-section-template--17549462503582__multiple-images-with-text {
                    --multiple-images-with-text-max-width: none;
                    --multiple-images-with-text-grid-template-columns: minmax(0, 0.8fr) minmax(0, 1fr);
                    --multiple-images-with-text-column-gap: var(--spacing-20);
                    --multiple-images-with-text-alignment: start;
                }
            }

            @media screen and (min-width: 1150px) {
                #shopify-section-template--17549462503582__multiple-images-with-text {
                    --multiple-images-with-text-max-width: none;
                    --multiple-images-with-text-grid-template-columns: minmax(0, 0.8fr) minmax(0, 1fr);
                    --multiple-images-with-text-column-gap: var(--spacing-24);
                    --multiple-images-with-text-alignment: start;
                }
            }

            @media screen and (min-width: 1400px) {
                #shopify-section-template--17549462503582__multiple-images-with-text {
                    --multiple-images-with-text-column-gap: var(--spacing-28);
                }
            }
        </style>
        <div class="section  section--narrow section-blends section-full">
            <multiple-images-with-text class="multiple-images-with-text">
                <multiple-images-with-text-image-list reversed swipeable="false" layout="stacked"
                    class="multiple-images-with-text__image-list">
                    @foreach ($arrImageNewProducts as $key => $image)
                    <img
                        src="{{$image}}"
                        alt=""
                        srcset="{{$image}}"
                        width="1392" height="1335" loading="lazy" id="{{$image}}" sizes="min(100vw, 500px)"
                        class="rounded-sm shadow-sm ">
                    @endforeach
                    {{-- <img
                        src="//mymonsteraudio.com/cdn/shop/files/0082739654915_F.webp?v=1684515842&amp;width=660"
                        alt=""
                        srcset="//mymonsteraudio.com/cdn/shop/files/0082739654915_F.webp?v=1684515842&amp;width=200 200w, //mymonsteraudio.com/cdn/shop/files/0082739654915_F.webp?v=1684515842&amp;width=300 300w, //mymonsteraudio.com/cdn/shop/files/0082739654915_F.webp?v=1684515842&amp;width=400 400w, //mymonsteraudio.com/cdn/shop/files/0082739654915_F.webp?v=1684515842&amp;width=500 500w, //mymonsteraudio.com/cdn/shop/files/0082739654915_F.webp?v=1684515842&amp;width=600 600w"
                        width="660" height="660" loading="lazy" id="image-1664424486a2b084ab-0"
                        sizes="min(100vw, 500px)" class="rounded-sm shadow-sm "> --}}
                </multiple-images-with-text-image-list>
                <div class="multiple-images-with-text__content-with-nav">
                    <multiple-images-with-text-content-list swipeable="false"
                        class="multiple-images-with-text__content-list">
                        @foreach ($newProducts as $key1 => $product)
                        <div class="prose {{ $loop->first ? 'is-selected' : 'reveal-invisible' }}" image-id="{{$product->image ? $product->image->path : ''}}">
                            <p class="subheading">{{$product->category->name}}</p>
                            <p class="h1" reveal-on-scroll="true">
                                <split-lines>{{$product->name}}</split-lines>
                            </p>
                            {!! $product->intro !!}
                            <a class="button button--xl" href="{{route('front.show-product-detail', $product->slug)}}">Buy Now</a>
                        </div>
                        @endforeach
                        {{-- <div class="prose reveal-invisible" image-id="image-item_zGKDVp">
                            <p class="h1" reveal-on-scroll="true">
                                <split-lines>The Vision</split-lines>
                            </p>
                            <p>The Vision is Monster’s most innovative portable Bluetooth wireless speaker complete with a
                                15.6"" 1080P TV and built-in ATSC Air TV Tuner. Enjoy your favorite video content on the go
                                via the Antenna feature or plug in your favorite stream device directly through the Vision’s
                                2 HDMI port.</p>
                            <a class="button button--xl" href="/products/monster-vision156">Buy Now</a>
                        </div> --}}
                    </multiple-images-with-text-content-list>
                    <div class="prev-next-buttons">
                        <button is="prev-button" class="circle-button ring group">
                            <span class="sr-only">Previous</span>
                            <span class="animated-arrow animated-arrow--reverse"></span>
                        </button>
                        <button is="next-button" class="circle-button ring group">
                            <span class="sr-only">Next</span>
                            <span class="animated-arrow"></span>
                        </button>
                    </div>
                </div>
            </multiple-images-with-text>
        </div>
    </section>
    <div id="shopify-section-template--17549462503582__pagefly-home" class="shopify-section">
        <style>
            .home-lifestyle-container {
                max-width: 80vw;
                margin: auto;
                display: grid;
                grid-template-columns: 1fr 1fr;
                background-color: #fafafa
            }

            .home-lifestyle-inner-container {
                display: flex;
                flex-direction: column;
                margin: auto;
                justify-content: center;
                align-items: center;
                text-align: center
            }

            .home-lifestyle-inner-left-container {
                max-width: 70%;
                margin: auto;
                text-align: right
            }

            .home-lifestyle-inner-right-container {
                max-width: 70%;
                margin: auto;
                text-align: left
            }

            .home-lifestyle-inner-left-container>h3,
            .home-lifestyle-inner-right-container>h3 {
                font-size: 46px;
                font-weight: 600;
                color: red
            }

            .home-lifestyle-inner-left-container>p,
            .home-lifestyle-inner-right-container>p {
                font-size: 24px
            }

            @media only screen and (max-width:900px) {
                .home-lifestyle-container {
                    grid-template-columns: 1fr
                }
            }
        </style>
        {{-- <script>
            window.__pageflyProducts = window.__pageflyProducts || {};
            window.__pageflyProducts["7480405754014"] = {
                id: 7480405754014,
                handle: "monster-x6",
                title: "Monster X6",
                type: "Concert",
                url: "\/products\/monster-x6",
                vendor: "An all-in-one public address speaker, purposefully designed and engineered to be the last PA speaker you’ll ever need",
                variants: [{
                    "id": 42562566848670,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "MNX6",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": false,
                    "name": "Monster X6",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 27999,
                    "weight": 0,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "827396549346",
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                }],
                options: ["Title"],
                media: [{
                    "alt": null,
                    "id": 28231514128542,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_L_Blue_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_L_Blue_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514161310,
                    "position": 2,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Red_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Red_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514194078,
                    "position": 3,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Back_Angle_R_HM_03062023.jpg?v=1682724233"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Back_Angle_R_HM_03062023.jpg?v=1682724233",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514226846,
                    "position": 4,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Back_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Back_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514259614,
                    "position": 5,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Bottom_HM_03062023.jpg?v=1682724235"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Bottom_HM_03062023.jpg?v=1682724235",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514292382,
                    "position": 6,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_R_Full_color_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_R_Full_color_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514325150,
                    "position": 7,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_R_off_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_R_off_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 28231514357918,
                    "position": 8,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Full_color_stand_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Full_color_stand_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 31263452659870,
                    "position": 9,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0121.jpg?v=1733961635"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0121.jpg?v=1733961635",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263452594334,
                    "position": 10,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0124.jpg?v=1733961635"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0124.jpg?v=1733961635",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263452561566,
                    "position": 11,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0127.jpg?v=1733961635"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0127.jpg?v=1733961635",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263452627102,
                    "position": 12,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0144.jpg?v=1733961635"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0144.jpg?v=1733961635",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263452692638,
                    "position": 13,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0149.jpg?v=1733961635"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0149.jpg?v=1733961635",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263452725406,
                    "position": 14,
                    "preview_image": {
                        "aspect_ratio": 0.667,
                        "height": 1536,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0157.jpg?v=1733961635"
                    },
                    "aspect_ratio": 0.667,
                    "height": 1536,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0157.jpg?v=1733961635",
                    "width": 1024
                }],
                has_only_default_variant: true,
                options_with_values: [{
                    "name": "Title",
                    "position": 1,
                    "values": ["Default Title"]
                }],
                selected_variant: null,
                selected_or_first_available_variant: {
                    "id": 42562566848670,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "MNX6",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": false,
                    "name": "Monster X6",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 27999,
                    "weight": 0,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "827396549346",
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                },
                tags: ["Concert"],
                template_suffix: "pf-b17d682a",
                featured_image: "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_L_Blue_HM_03062023.jpg?v=1682724234",
                featured_media: {
                    "alt": null,
                    "id": 28231514128542,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 2500,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_L_Blue_HM_03062023.jpg?v=1682724234"
                    },
                    "aspect_ratio": 1.0,
                    "height": 2500,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_L_Blue_HM_03062023.jpg?v=1682724234",
                    "width": 2500
                },
                images: [
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_L_Blue_HM_03062023.jpg?v=1682724234",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Red_HM_03062023.jpg?v=1682724234",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Back_Angle_R_HM_03062023.jpg?v=1682724233",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Back_HM_03062023.jpg?v=1682724234",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Bottom_HM_03062023.jpg?v=1682724235",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_R_Full_color_HM_03062023.jpg?v=1682724234",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Angle_R_off_HM_03062023.jpg?v=1682724234",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Monster_X6_Product_2000px_Web_Front_Full_color_stand_HM_03062023.jpg?v=1682724234",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0121.jpg?v=1733961635",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0124.jpg?v=1733961635",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0127.jpg?v=1733961635",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0144.jpg?v=1733961635",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0149.jpg?v=1733961635",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0157.jpg?v=1733961635"
                ],
                quantity: ["42562566848670:0"]
            };
            window.__pageflyProducts["8018020860062"] = {
                id: 8018020860062,
                handle: "monster-gi30",
                title: "Monster GI30",
                type: "EZ-Play",
                url: "\/products\/monster-gi30",
                vendor: "My Monster Audio",
                variants: [{
                    "id": 44166894092446,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "MNGI30",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": false,
                    "name": "Monster GI30",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 59999,
                    "weight": 0,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "827396550717",
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                }],
                options: ["Title"],
                media: [{
                    "alt": null,
                    "id": 30654040342686,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 4031,
                        "width": 4031,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230505_1.jpg?v=1722237345"
                    },
                    "aspect_ratio": 1.0,
                    "height": 4031,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230505_1.jpg?v=1722237345",
                    "width": 4031
                }, {
                    "alt": null,
                    "id": 30654040375454,
                    "position": 2,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 4031,
                        "width": 4031,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230458_1.jpg?v=1722237345"
                    },
                    "aspect_ratio": 1.0,
                    "height": 4031,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230458_1.jpg?v=1722237345",
                    "width": 4031
                }, {
                    "alt": null,
                    "id": 31263447384222,
                    "position": 3,
                    "preview_image": {
                        "aspect_ratio": 0.667,
                        "height": 1536,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0092.jpg?v=1733961482"
                    },
                    "aspect_ratio": 0.667,
                    "height": 1536,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0092.jpg?v=1733961482",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263448072350,
                    "position": 4,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0101.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0101.jpg?v=1733961482",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263447613598,
                    "position": 5,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0107.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0107.jpg?v=1733961482",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263447810206,
                    "position": 6,
                    "preview_image": {
                        "aspect_ratio": 0.667,
                        "height": 1536,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0110.jpg?v=1733961482"
                    },
                    "aspect_ratio": 0.667,
                    "height": 1536,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0110.jpg?v=1733961482",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263447941278,
                    "position": 7,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0134.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0134.jpg?v=1733961482",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 30686389436574,
                    "position": 8,
                    "preview_image": {
                        "aspect_ratio": 1.415,
                        "height": 1240,
                        "width": 1754,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122606.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.415,
                    "height": 1240,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122606.jpg?v=1733961482",
                    "width": 1754
                }, {
                    "alt": null,
                    "id": 30686389502110,
                    "position": 9,
                    "preview_image": {
                        "aspect_ratio": 1.415,
                        "height": 1240,
                        "width": 1754,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122622.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.415,
                    "height": 1240,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122622.jpg?v=1733961482",
                    "width": 1754
                }, {
                    "alt": null,
                    "id": 30686389534878,
                    "position": 10,
                    "preview_image": {
                        "aspect_ratio": 1.415,
                        "height": 1240,
                        "width": 1754,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122634.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.415,
                    "height": 1240,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122634.jpg?v=1733961482",
                    "width": 1754
                }, {
                    "alt": null,
                    "id": 30686389403806,
                    "position": 11,
                    "preview_image": {
                        "aspect_ratio": 1.415,
                        "height": 1240,
                        "width": 1754,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122649.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.415,
                    "height": 1240,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122649.jpg?v=1733961482",
                    "width": 1754
                }, {
                    "alt": null,
                    "id": 30654037983390,
                    "position": 12,
                    "preview_image": {
                        "aspect_ratio": 0.457,
                        "height": 1633,
                        "width": 747,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230516.jpg?v=1733961482"
                    },
                    "aspect_ratio": 0.457,
                    "height": 1633,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230516.jpg?v=1733961482",
                    "width": 747
                }, {
                    "alt": null,
                    "id": 30654037950622,
                    "position": 13,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 4000,
                        "width": 4000,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230513.jpg?v=1733961482"
                    },
                    "aspect_ratio": 1.0,
                    "height": 4000,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230513.jpg?v=1733961482",
                    "width": 4000
                }, {
                    "alt": null,
                    "id": 30729853370526,
                    "position": 14,
                    "preview_image": {
                        "aspect_ratio": 0.833,
                        "height": 1800,
                        "width": 1500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240815104325.jpg?v=1733961482"
                    },
                    "aspect_ratio": 0.833,
                    "height": 1800,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240815104325.jpg?v=1733961482",
                    "width": 1500
                }],
                has_only_default_variant: true,
                options_with_values: [{
                    "name": "Title",
                    "position": 1,
                    "values": ["Default Title"]
                }],
                selected_variant: null,
                selected_or_first_available_variant: {
                    "id": 44166894092446,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "MNGI30",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": false,
                    "name": "Monster GI30",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 59999,
                    "weight": 0,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "827396550717",
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                },
                tags: ["Concert"],
                template_suffix: "pf-18e1f075",
                featured_image: "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230505_1.jpg?v=1722237345",
                featured_media: {
                    "alt": null,
                    "id": 30654040342686,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 1.0,
                        "height": 4031,
                        "width": 4031,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230505_1.jpg?v=1722237345"
                    },
                    "aspect_ratio": 1.0,
                    "height": 4031,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230505_1.jpg?v=1722237345",
                    "width": 4031
                },
                images: ["\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230505_1.jpg?v=1722237345",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230458_1.jpg?v=1722237345",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0092.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0101.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0107.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0110.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0134.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122606.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122622.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122634.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image_20240725122649.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230516.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240726230513.jpg?v=1733961482",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240815104325.jpg?v=1733961482"
                ],
                quantity: ["44166894092446:0"]
            };
            window.__pageflyProducts["8036187832478"] = {
                id: 8036187832478,
                handle: "monster-rock-n-roller-x",
                title: "Monster Rockin Roller X",
                type: "EZ-Play",
                url: "\/products\/monster-rock-n-roller-x",
                vendor: "My Monster Audio",
                variants: [{
                    "id": 44199947829406,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": false,
                    "name": "Monster Rockin Roller X",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 34999,
                    "weight": 0,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "",
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                }],
                options: ["Title"],
                media: [{
                    "alt": null,
                    "id": 30686206460062,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 0.588,
                        "height": 4762,
                        "width": 2800,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-4.jpg?v=1723015181"
                    },
                    "aspect_ratio": 0.588,
                    "height": 4762,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-4.jpg?v=1723015181",
                    "width": 2800
                }, {
                    "alt": null,
                    "id": 30686208655518,
                    "position": 2,
                    "preview_image": {
                        "aspect_ratio": 0.601,
                        "height": 4659,
                        "width": 2800,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-1.jpg?v=1723015227"
                    },
                    "aspect_ratio": 0.601,
                    "height": 4659,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-1.jpg?v=1723015227",
                    "width": 2800
                }, {
                    "alt": null,
                    "id": 31263449383070,
                    "position": 3,
                    "preview_image": {
                        "aspect_ratio": 0.667,
                        "height": 1536,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0038.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.667,
                    "height": 1536,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0038.jpg?v=1733961599",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263450005662,
                    "position": 4,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0057.jpg?v=1733961599"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0057.jpg?v=1733961599",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263451185310,
                    "position": 5,
                    "preview_image": {
                        "aspect_ratio": 0.667,
                        "height": 1536,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0085.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.667,
                    "height": 1536,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0085.jpg?v=1733961599",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263450824862,
                    "position": 6,
                    "preview_image": {
                        "aspect_ratio": 0.667,
                        "height": 1536,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0070.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.667,
                    "height": 1536,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0070.jpg?v=1733961599",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 31263451316382,
                    "position": 7,
                    "preview_image": {
                        "aspect_ratio": 1.499,
                        "height": 683,
                        "width": 1024,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A9991.jpg?v=1733961599"
                    },
                    "aspect_ratio": 1.499,
                    "height": 683,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A9991.jpg?v=1733961599",
                    "width": 1024
                }, {
                    "alt": null,
                    "id": 30686209802398,
                    "position": 8,
                    "preview_image": {
                        "aspect_ratio": 1.415,
                        "height": 1240,
                        "width": 1754,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MMRRX1.jpg?v=1733961599"
                    },
                    "aspect_ratio": 1.415,
                    "height": 1240,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MMRRX1.jpg?v=1733961599",
                    "width": 1754
                }, {
                    "alt": null,
                    "id": 30686209769630,
                    "position": 9,
                    "preview_image": {
                        "aspect_ratio": 1.415,
                        "height": 1240,
                        "width": 1754,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MMRRX3.jpg?v=1733961599"
                    },
                    "aspect_ratio": 1.415,
                    "height": 1240,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MMRRX3.jpg?v=1733961599",
                    "width": 1754
                }, {
                    "alt": null,
                    "id": 30686209835166,
                    "position": 10,
                    "preview_image": {
                        "aspect_ratio": 1.5,
                        "height": 1667,
                        "width": 2500,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MNRRX_Lifestyle_Pic_07-2.jpg?v=1733961599"
                    },
                    "aspect_ratio": 1.5,
                    "height": 1667,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MNRRX_Lifestyle_Pic_07-2.jpg?v=1733961599",
                    "width": 2500
                }, {
                    "alt": null,
                    "id": 30686212882590,
                    "position": 11,
                    "preview_image": {
                        "aspect_ratio": 1.5,
                        "height": 2000,
                        "width": 3000,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MNRRX_Lifestyle_Pic_05B.jpg?v=1733961599"
                    },
                    "aspect_ratio": 1.5,
                    "height": 2000,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MNRRX_Lifestyle_Pic_05B.jpg?v=1733961599",
                    "width": 3000
                }, {
                    "alt": null,
                    "id": 30686213013662,
                    "position": 12,
                    "preview_image": {
                        "aspect_ratio": 0.778,
                        "height": 2000,
                        "width": 1555,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_06_Monster_RRX_with_app_info.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.778,
                    "height": 2000,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_06_Monster_RRX_with_app_info.jpg?v=1733961599",
                    "width": 1555
                }, {
                    "alt": null,
                    "id": 30686212980894,
                    "position": 13,
                    "preview_image": {
                        "aspect_ratio": 0.778,
                        "height": 2000,
                        "width": 1555,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_04_Monster_RRX_MIC_info.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.778,
                    "height": 2000,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_04_Monster_RRX_MIC_info.jpg?v=1733961599",
                    "width": 1555
                }, {
                    "alt": null,
                    "id": 30686212948126,
                    "position": 14,
                    "preview_image": {
                        "aspect_ratio": 0.778,
                        "height": 2000,
                        "width": 1555,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_05_Monster_RRX_Wheels_info.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.778,
                    "height": 2000,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_05_Monster_RRX_Wheels_info.jpg?v=1733961599",
                    "width": 1555
                }, {
                    "alt": null,
                    "id": 30730158440606,
                    "position": 15,
                    "preview_image": {
                        "aspect_ratio": 0.834,
                        "height": 1625,
                        "width": 1355,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240815115042.jpg?v=1733961599"
                    },
                    "aspect_ratio": 0.834,
                    "height": 1625,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240815115042.jpg?v=1733961599",
                    "width": 1355
                }],
                has_only_default_variant: true,
                options_with_values: [{
                    "name": "Title",
                    "position": 1,
                    "values": ["Default Title"]
                }],
                selected_variant: null,
                selected_or_first_available_variant: {
                    "id": 44199947829406,
                    "title": "Default Title",
                    "option1": "Default Title",
                    "option2": null,
                    "option3": null,
                    "sku": "",
                    "requires_shipping": true,
                    "taxable": true,
                    "featured_image": null,
                    "available": false,
                    "name": "Monster Rockin Roller X",
                    "public_title": null,
                    "options": ["Default Title"],
                    "price": 34999,
                    "weight": 0,
                    "compare_at_price": null,
                    "inventory_management": "shopify",
                    "barcode": "",
                    "requires_selling_plan": false,
                    "selling_plan_allocations": []
                },
                tags: ["EZ-Play"],
                template_suffix: "pf-888c618e",
                featured_image: "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-4.jpg?v=1723015181",
                featured_media: {
                    "alt": null,
                    "id": 30686206460062,
                    "position": 1,
                    "preview_image": {
                        "aspect_ratio": 0.588,
                        "height": 4762,
                        "width": 2800,
                        "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-4.jpg?v=1723015181"
                    },
                    "aspect_ratio": 0.588,
                    "height": 4762,
                    "media_type": "image",
                    "src": "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-4.jpg?v=1723015181",
                    "width": 2800
                },
                images: ["\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-4.jpg?v=1723015181",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/RRX-1.jpg?v=1723015227",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0038.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0057.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0085.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A0070.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/1D1A9991.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MMRRX1.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MMRRX3.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MNRRX_Lifestyle_Pic_07-2.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/MNRRX_Lifestyle_Pic_05B.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_06_Monster_RRX_with_app_info.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_04_Monster_RRX_MIC_info.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Picture_05_Monster_RRX_Wheels_info.jpg?v=1733961599",
                    "\/\/mymonsteraudio.com\/cdn\/shop\/files\/Image20240815115042.jpg?v=1733961599"
                ],
                quantity: ["44199947829406:0"]
            };
        </script> --}}
        <div class="sc-esYjtY fLvWek __pf __pf_1zPX_ElT" id="__pf">
            <div data-pf-type="Body" class="sc-iXzffn fKDkmQ pf-4_">
                <div data-pf-type="Layout" class="sc-dPZUdm fHeoaT pf-5_">
                    <div data-section-id="pf-4dfe" data-pf-type="Section"
                        class="sc-dxcExB gjNMyZ pf-6_ pf-color-scheme-1">
                        <div class="sc-kqGpvY OSjcf"></div>
                    </div>
                    <div data-section-id="pf-4583" data-pf-type="Section"
                        class="sc-dxcExB gjNMyZ pf-7_ pf-color-scheme-1">
                        <div class="sc-kqGpvY OSjcf">
                            <div class="sc-jXbVAB kNtuek pf-8_ pf-r pf-c-cm pf-r-eh"
                                style="--s-xs:0px;--s-md:15px;--s-lg:0px" data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-9_">
                                        <div data-pf-type="Youtube" class="sc-eifsgl gnxOPk pf-10_">
                                            <div style="position:relative;padding-bottom:56.25%;border-radius:inherit">
                                                <iframe class="pf-ifr"
                                                    src="https://www.youtube.com/embed/9ciUHHt4jtc?start=0&autoplay=1&loop=1&playlist=9ciUHHt4jtc&mute=1&controls=1&enablejsapi=1"
                                                    allowfullscreen="" width="560" height="315" allow="autoplay"
                                                    title="yt-video" loading="lazy"
                                                    style="border-radius:inherit"></iframe></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-section-id="pf-d9b1" data-pf-type="Section"
                        class="sc-dxcExB gjNMyZ pf-11_ pf-color-scheme-1">
                        <div class="sc-kqGpvY OSjcf">
                            <div class="sc-jXbVAB kNtuek pf-12_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-13_">
                                        <div data-pf-type="Image" class="sc-hwdACo jLwrwq pf-14_ pf-image-1"><img
                                                src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-1171dd71-5373-4f44-aa97-0d56350f8cb8--wavehorizont1_1200x.jpg?v=1581451202"
                                                srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-1171dd71-5373-4f44-aa97-0d56350f8cb8--wavehorizont1.jpg?v=1581451202 1536w"
                                                width="2889" height="382"
                                                sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                loading="lazy" /></div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($categorySpecial as $key => $category)
                            @if ($key == 0)
                                <div class="sc-jXbVAB kNtuek pf-15_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
                                    <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                        <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-16_">
                                            <h3 data-pf-type="Heading" class="sc-eZjPq gpuBwB pf-17_ pf-heading-1-h3"><span
                                                    data-pf-type="Text" class="sc-dQEsWe LHlFs pf-19_">{{ $category->name }}</span></h3>
                                            <div class="sc-jXbVAB kNtuek pf-20_ pf-r pf-c-cm pf-r-eh" style="--s-xs:15px"
                                                data-pf-type="Row">
                                                @foreach ($category->products as $product)
                                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-21_">
                                                        <h3 data-product-type="title" data-product-id="{{ $product->id }}"
                                                            data-href="{{route('front.show-product-detail', $product->slug)}}" data-pf-type="ProductTitle"
                                                            class="sc-kpKSlO sc-cKXyOM gIkzjG hqyeK pf-22_ pf-heading-1-h3">
                                                            {{ $product->name }}</h3>
                                                        <div data-product-id="7480405754014" data-pf-type="ProductImage"
                                                            class="sc-djTQOc dDnnxE pf-23_">
                                                            <div style="--w-xs:0" class="sc-gFmZvT kVPWjp pf-r-dg">
                                                                <div data-href="/products/monster-x6"
                                                                    data-pf-type="MasterImage" style="order:0"
                                                                    class="sc-btwLGw gwYwub">
                                                                    <img src="{{ $product->image ? $product->image->path : '' }}"
                                                                        alt="{{ $product->name }}" loading="lazy" width="2500"
                                                                        height="2500" />
                                                                    <div data-pf-type="ProductImagePagination"
                                                                        class="sc-pKreJ MSBLf pf-hide pf-sm-hide pf-md-hide pf-lg-hide">
                                                                        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="sc-dBFCZX cJmrRg pf-hide pf-sm-hide pf-md-hide pf-lg-hide">
                                                                    <div data-pf-type="ProductImageList"
                                                                        class="sc-ggqHwD fxhwFP pf-r-dg">
                                                                        <div class="sc-djVWQC iLVJMp pf-24_    "
                                                                            data-img-id="35758627946654"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_    "
                                                                            data-img-id="35758627979422"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_    "
                                                                            data-img-id="35758627782814"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_    "
                                                                            data-img-id="35758627881118"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_    "
                                                                            data-img-id="35758628012190"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="35758627848350"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="35758627913886"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="35758627815582"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="38899289063582"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="38899289096350"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="38899289129118"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="38899289161886"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="38899289194654"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                        <div class="sc-djVWQC iLVJMp pf-24_ pf-lg-hide pf-md-hide pf-sm-hide pf-hide"
                                                                            data-img-id="38899289227422"
                                                                            data-pf-type="ImageItem"><img loading="lazy"
                                                                                src="{{ $product->image ? $product->image->path : '' }}"
                                                                                alt="{{ $product->name }}" draggable="false" /></div>
                                                                    </div>
                                                                    <div data-pf-nav="prev" class="sc-gvPcJq IEmHl"><i
                                                                            class="pfa pfa-angle-left"></i></div>
                                                                    <div data-pf-nav="next" class="sc-gvPcJq IEmHl"><i
                                                                            class="pfa pfa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <p class="sc-kMriOJ cVLihF pf-26_ pf-text-1" data-pf-type="Paragraph"
                                                            id="monster-vision-featured"><span data-pf-type="Text"
                                                                class="sc-dQEsWe LHlFs pf-28_">600 WATT</span></p> --}}
                                                        <a href="{{ route('front.show-product-detail', $product->slug) }}" target="_blank" data-pf-type="Button"
                                                            class="sc-fXSgRJ faABcD pf-29_ pf-button-1"><span
                                                                data-pf-type="Text" class="sc-dQEsWe LHlFs pf-31_">More
                                                                Info</span></a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($key == 1)
                            <div class="sc-jXbVAB kNtuek pf-54_ pf-r pf-c-cm" style="--s-xs:15px;--s-lg:0px"
                                data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-55_">
                                        <div data-slider="{'slidesToShow':{'all':1,'laptop':1,'tablet':1,'mobile':1},'slidesToScroll':{'all':1,'laptop':1,'tablet':1,'mobile':1},'loop':true,'autoPlay':true,'autoPlayDelay':5000,'pauseOnHover':false,'maxHeight':false,'id':'a8b6c674-91ca-4b6a-aecd-6202a7354fb2'}"
                                            class="sc-hTUXFl sc-lizKaK csSHAS jMCEl pf-56_ pf-bg-lazy glider-n-1 "
                                            style="visibility:hidden;height:627.296875px;opacity:0"
                                            data-pf-type="Slider2">
                                            <div class="glider" style="--g-xs:0px">
                                                @foreach ($category->products as $product)
                                                <div class="glide-wrapper">
                                                    <div style="height:100%"
                                                        class="sc-eoVZcn sc-dWZrec boRCl bepTSx pf-57_ pf-bg-lazy"
                                                        data-pf-type="Slide2" style="background-image: url({{ $product->image ? $product->image->path : '' }});">
                                                        <div class="glide-container">
                                                            <div class="sc-jXbVAB kNtuek pf-58_ pf-r pf-r-eh"
                                                                style="--s-xs:15px" data-pf-type="Row">
                                                                <div class="pf-c"
                                                                    style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                                                    <div data-pf-type="Column"
                                                                        class="sc-lnPyOc gUmbDa pf-59_">
                                                                        <h3 data-pf-type="Heading"
                                                                            class="sc-eZjPq gpuBwB pf-60_ pf-heading-1-h3">
                                                                            <span data-pf-type="Text"
                                                                                class="sc-dQEsWe LHlFs pf-62_">{{ $product->category->name }}</span>
                                                                        </h3>
                                                                        <h3 data-pf-type="Heading"
                                                                            class="sc-eZjPq gpuBwB pf-63_ pf-heading-1-h3">
                                                                            <span data-pf-type="Text"
                                                                                    class="sc-dQEsWe LHlFs pf-65_">{{ $product->name }}</span></h3>
                                                                        <p class="sc-kMriOJ cVLihF pf-66_ pf-text-1"
                                                                            data-pf-type="Paragraph"><span
                                                                                data-pf-type="Text"
                                                                                class="sc-dQEsWe LHlFs pf-68_">
                                                                               {!! $product->intro !!}
                                                                            </span></p>
                                                                        <a href="{{ route('front.show-product-detail', $product->slug) }}"
                                                                            target="_self" data-pf-type="Button"
                                                                            class="sc-fXSgRJ faABcD pf-69_ pf-button-1"><span
                                                                                data-pf-type="Text"
                                                                                class="sc-dQEsWe LHlFs pf-71_">View
                                                                                More</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <button type="button" aria-label="Previous"
                                                class="glider-prev glider-nav glider-nav-1"></button><button
                                                type="button" aria-label="Next"
                                                class="glider-next glider-nav glider-nav-1"></button>
                                            <div class="glider-dots glider-d-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($key == 2)
                            <div class="sc-jXbVAB kNtuek pf-87_ pf-r pf-c-cm" style="--s-xs:15px;--s-lg:0px"
                                data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-88_">
                                        @foreach ($category->products as $key => $product)
                                        @if ($key % 2 == 0)
                                            <div class="sc-jXbVAB kNtuek pf-89_ pf-r pf-c-cm pf-r-eh"
                                                style="--s-xs:15px;--s-lg:50px" data-pf-type="Row">
                                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-90_">
                                                        <div data-pf-type="Custom.HTML" class="sc-iMWBWc brhmIY pf-91_">
                                                            <section class="home-lifestyle-section">
                                                                <div class="home-lifestyle-container">
                                                                    <div class="home-lifestyle-inner-container">
                                                                        <img src="{{ $product->image ? $product->image->path : '' }}"
                                                                            class="home-lifestyle-image" loading="lazy">
                                                                    </div>
                                                                    <div class="home-lifestyle-inner-container">
                                                                        <div class="home-lifestyle-inner-right-container">
                                                                            <h3>
                                                                                {{ $product->name }}
                                                                            </h3>
                                                                            <h2>
                                                                                {{ $product->category->name }}
                                                                            </h2>
                                                                            <p>
                                                                                {{ $product->intro }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="sc-jXbVAB kNtuek pf-92_ pf-r pf-r-eh"
                                                style="--s-xs:15px;--s-lg:50px" data-pf-type="Row">
                                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-93_">
                                                        <div data-pf-type="Custom.HTML" class="sc-iMWBWc brhmIY pf-94_">
                                                            <section class="home-lifestyle-section">
                                                                <div class="home-lifestyle-container">
                                                                    <div class="home-lifestyle-inner-container">
                                                                        <div class="home-lifestyle-inner-left-container">
                                                                            <h3>
                                                                                {{ $product->name }}
                                                                            </h3>
                                                                            <h2>
                                                                                {{ $product->category->name }}
                                                                            </h2>
                                                                            <p>
                                                                                {{ $product->intro }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="home-lifestyle-inner-container">
                                                                        <img src="{{ $product->image ? $product->image->path : '' }}"
                                                                            class="home-lifestyle-image" loading="lazy">
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="sc-jXbVAB kNtuek pf-95_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:12;--c-md:12;--c-lg:12">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-96_">
                                        <h3 data-pf-type="Heading" class="sc-eZjPq gpuBwB pf-97_ pf-heading-1-h3"><span
                                                data-pf-type="Text" class="sc-dQEsWe LHlFs pf-99_">Follow Us</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-jXbVAB kNtuek pf-100_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-101_">
                                        <div class="sc-jXbVAB kNtuek pf-102_ pf-r pf-r-eh" style="--s-xs:15px"
                                            data-pf-type="Row">
                                            <div class="pf-c" style="--c-xs:12;--c-sm:6;--c-md:6;--c-lg:6">
                                                <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-103_"><a
                                                        data-action="url"
                                                        href="#" target="_blank"
                                                        data-pf-type="Image"
                                                        class="sc-hwdACo sc-jaXxZZ jLwrwq iGFmwC pf-104_ pf-image-1"><img
                                                            src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-093e3fce--2_1200x.jpg?v=1582049166"
                                                            srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-093e3fce--2.jpg?v=1582049166 1536w"
                                                            width="480" height="480"
                                                            sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                            loading="lazy" /></a></div>
                                            </div>
                                            <div class="pf-c" style="--c-xs:12;--c-sm:6;--c-md:6;--c-lg:6">
                                                <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-105_"><a
                                                        data-action="url"
                                                        href="#" target="_blank"
                                                        data-pf-type="Image"
                                                        class="sc-hwdACo sc-jaXxZZ jLwrwq iGFmwC pf-106_ pf-image-1"><img
                                                            src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-92b537b6--4_1200x.jpg?v=1582049210"
                                                            srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-92b537b6--4.jpg?v=1582049210 1536w"
                                                            width="480" height="480"
                                                            sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                            loading="lazy" /></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-107_">
                                        <div class="sc-jXbVAB kNtuek pf-108_ pf-r pf-r-eh" style="--s-xs:15px"
                                            data-pf-type="Row">
                                            <div class="pf-c" style="--c-xs:12;--c-sm:6;--c-md:6;--c-lg:6">
                                                <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-109_"><a
                                                        data-action="url"
                                                        href="#" target="_blank"
                                                        data-pf-type="Image"
                                                        class="sc-hwdACo sc-jaXxZZ jLwrwq iGFmwC pf-110_ pf-image-1"><img
                                                            src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-09393d4d--5_1200x.jpg?v=1582049220"
                                                            srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-09393d4d--5.jpg?v=1582049220 1536w"
                                                            width="480" height="480"
                                                            sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                            loading="lazy" /></a></div>
                                            </div>
                                            <div class="pf-c" style="--c-xs:12;--c-sm:6;--c-md:6;--c-lg:6">
                                                <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-111_"><a
                                                        data-action="url"
                                                        href="#" target="_blank"
                                                        data-pf-type="Image"
                                                        class="sc-hwdACo sc-jaXxZZ jLwrwq iGFmwC pf-112_ pf-image-1"><img
                                                            src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-c230e176--6_1200x.jpg?v=1582049354"
                                                            srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-c230e176--6.jpg?v=1582049354 1536w"
                                                            width="480" height="480"
                                                            sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                            loading="lazy" /></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-113_">
                                        <div class="sc-jXbVAB kNtuek pf-114_ pf-r pf-r-eh" style="--s-xs:15px"
                                            data-pf-type="Row">
                                            <div class="pf-c" style="--c-xs:12;--c-sm:6;--c-md:6;--c-lg:6">
                                                <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-115_"><a
                                                        data-action="url"
                                                        href="#" target="_blank"
                                                        data-pf-type="Image"
                                                        class="sc-hwdACo sc-jaXxZZ jLwrwq iGFmwC pf-116_ pf-image-1"><img
                                                            src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-3866a684--3_1200x.jpg?v=1582049200"
                                                            srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-3866a684--3.jpg?v=1582049200 1536w"
                                                            width="480" height="480"
                                                            sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                            loading="lazy" /></a></div>
                                            </div>
                                            <div class="pf-c" style="--c-xs:12;--c-sm:6;--c-md:6;--c-lg:6">
                                                <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-117_"><a
                                                        data-action="url"
                                                        href="#" target="_blank"
                                                        data-pf-type="Image"
                                                        class="sc-hwdACo sc-jaXxZZ jLwrwq iGFmwC pf-118_ pf-image-1"><img
                                                            src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-675f2600--1_1200x.jpg?v=1582049330"
                                                            srcSet="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-675f2600--1.jpg?v=1582049330 1536w"
                                                            width="480" height="480"
                                                            sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, calc(100vw/3)"
                                                            loading="lazy" /></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-jXbVAB kNtuek pf-119_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-120_"></div>
                                </div>
                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-121_"></div>
                                </div>
                                <div class="pf-c" style="--c-xs:12;--c-sm:4;--c-md:4;--c-lg:4">
                                    <div data-pf-type="Column" class="sc-lnPyOc gUmbDa pf-122_"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script>
            ! function() {
                window.__pagefly_page_setting__ = {
                    "pageTitle": "Monster Home",
                    "pageType": "home",
                    "pageId": "d325f5cf-503f-4b52-858c-ea3ba13e4a30",
                    "lazyLoad": false,
                    "forceByPassGoogleLightHouse": false,
                    "imageLazyLoad": true,
                    "nativeImageLazyLoad": false,
                    "useThemeJQ": false,
                    "sectionRootType": "Section",
                    "trackingIDs": []
                };
                window.__pagefly_setting__ && (window.__pagefly_setting2__ = window.__pagefly_setting__), window
                    .__pagefly_setting__ = {
                        "baseURL": "https://apps.pagefly.io",
                        "analyticsURL": "https://analytics.pagefly.io",
                        "isBackend": false,
                        "cdnURL": "https://cdn.pagefly.io",
                        "pageflyVersion": "4.18.16",
                        "shopDomain": "mymonsteraudio.myshopify.com",
                        "elementData": {
                            "pf-23_": {
                                "listPosition": 2,
                                "limit": {
                                    "all": 5,
                                    "laptop": 5,
                                    "tablet": 5,
                                    "mobile": 5
                                },
                                "spacing": {
                                    "all": "10px",
                                    "laptop": "10px",
                                    "tablet": "10px",
                                    "mobile": "10px"
                                },
                                "listLayout": 1,
                                "hoverAction": 2,
                                "onHover": 0,
                                "clickAction": 1,
                                "imageSource": "featured",
                                "id": "054badd3-24e4-4c0e-9e43-1e0f1f8cbd45",
                                "_type": "ProductImage"
                            },
                            "pf-25_": {
                                "applyCondition": false,
                                "collectionSource": "all",
                                "collectionIds": [],
                                "tags": "",
                                "id": "add324e4-6c0e-4e43-9e0f-1f8cbd45a540",
                                "_type": "ProductBadge"
                            },
                            "pf-34_": {
                                "listPosition": 2,
                                "limit": {
                                    "all": 5,
                                    "laptop": 5,
                                    "tablet": 5,
                                    "mobile": 5
                                },
                                "spacing": {
                                    "all": "10px",
                                    "laptop": "10px",
                                    "tablet": "10px",
                                    "mobile": "10px"
                                },
                                "listLayout": 1,
                                "hoverAction": 2,
                                "onHover": 0,
                                "clickAction": 1,
                                "imageSource": "featured",
                                "id": "f3eaa089-4e46-4619-b3cd-a6a52c1e89fe",
                                "_type": "ProductImage"
                            },
                            "pf-36_": {
                                "applyCondition": false,
                                "collectionSource": "all",
                                "collectionIds": [],
                                "tags": "",
                                "id": "4b260090-56fb-4651-b3df-f3eaa0894e46",
                                "_type": "ProductBadge"
                            },
                            "pf-45_": {
                                "listPosition": 2,
                                "limit": {
                                    "all": 5,
                                    "laptop": 5,
                                    "tablet": 5,
                                    "mobile": 5
                                },
                                "spacing": {
                                    "all": "10px",
                                    "laptop": "10px",
                                    "tablet": "10px",
                                    "mobile": "10px"
                                },
                                "listLayout": 1,
                                "hoverAction": 2,
                                "onHover": 0,
                                "clickAction": 1,
                                "imageSource": "featured",
                                "id": "0f1f8cbd-45a5-4078-9ca9-733b324ffee0",
                                "_type": "ProductImage"
                            },
                            "pf-47_": {
                                "applyCondition": false,
                                "collectionSource": "all",
                                "collectionIds": [],
                                "tags": "",
                                "id": "8cbd45a5-4078-4ca9-b33b-324ffee05d7b",
                                "_type": "ProductBadge"
                            }
                        },
                        "shopifyProxyPath": "/a/pf_preview"
                    }, window.__pagefly_setting2__ && (window.__pagefly_setting__ = function _(d, b) {
                        let c = {
                            ...d || {}
                        };
                        for (let a of Object.keys(b)) b[a] instanceof Object && (Array.isArray(b[a]) && c[a] ? Object
                            .assign(b[a], [...b[a], ...c[a]]) : Object.assign(b[a], _(c[a], b[a])));
                        return Object.assign(c || {}, b), c
                    }(__pagefly_setting2__, __pagefly_setting__), delete window.__pagefly_setting2__), window
                    .__pagefly_setting__.moneyFormat = "{{ formatCurrency($product->price) }}"
            }();
        </script> --}}
        <script src="https://cdn.pagefly.io/pagefly/4.18.16/core/helper.js" defer></script>
    </div>
@endsection
@push('script')
@endpush
