@extends('site.layouts.master')
@section('title')

@endsection
@section('css')
    <style>
        .invalid-feedback {
            font-size: 14.5px;
            color: #dc3545;
        }
    </style>
    <style>.__pf .pf-c-ct,.__pf .pf-c-lt,.__pf .pf-c-rt{align-content:flex-start}.__pf .oh,.pf-sr-only{overflow:hidden}.__pf .pf-ifr,.pf-no-border,.pf-sr-only{border:0}.__pf img,.__pf video{max-width:100%;border:0;vertical-align:middle}.__pf [tabIndex],.__pf button,.__pf input,.__pf select,.__pf textarea{touch-action:manipulation}.__pf :focus-visible{outline:0!important;box-shadow:none!important}.__pf :not(input):not(select):not(textarea):focus-visible{border:none!important}.__pf *,.__pf :after,.__pf :before{box-sizing:border-box}.__pf [disabled],.__pf [readonly]{cursor:default}.__pf [data-href],.__pf button:not([data-pf-id]):hover{cursor:pointer}.__pf [disabled]:not([disabled=false]){pointer-events:none}.__pf [hidden]{display:none!important}.__pf [data-link=inherit]{color:inherit;text-decoration:none}.__pf [data-pf-placeholder]{outline:0;height:auto;display:none;pointer-events:none!important}.__pf .pf-ifr,.__pf [style*="--ratio"] img{height:100%;left:0;top:0;width:100%;position:absolute}.__pf .pf-r,.__pf .pf-r-eh>.pf-c{display:flex}.__pf [style*="--cw"]{padding:0 15px;width:100%;margin:auto;max-width:var(--cw)}.__pf .pf-bg-lazy{background-image:none!important}.__pf .pf-r{flex-wrap:wrap}.__pf .pf-r-dg{display:grid}.__pf [style*="--c-xs"]{max-width:calc(100%/12*var(--c-xs));flex-basis:calc(100%/12*var(--c-xs))}.__pf [style*="--s-xs"]{margin:0 calc(-1 * var(--s-xs))}.__pf [style*="--s-xs"]>.pf-c{padding:var(--s-xs)}.__pf .pf-r-ew>.pf-c{flex-grow:1;flex-basis:0}.__pf [style*="--ew-xs"]>.pf-c{flex-basis:calc(100% / var(--ew-xs));max-width:calc(100% / var(--ew-xs))}.__pf [style*="--ratio"]{position:relative;padding-bottom:var(--ratio)}.main-content{padding:0}.footer-section,.site-footer,.site-footer-wrapper,main .accent-background+.shopify-section{margin:0}@media (max-width:767.4999px){.__pf .pf-hide{display:none!important}}@media (max-width:1024.4999px) and (min-width:767.5px){.__pf .pf-sm-hide{display:none!important}}@media (max-width:1199.4999px) and (min-width:1024.5px){.__pf .pf-md-hide{display:none!important}}@media (min-width:767.5px){.__pf [style*="--s-sm"]{margin:0 calc(-1 * var(--s-sm))}.__pf [style*="--c-sm"]{max-width:calc(100%/12*var(--c-sm));flex-basis:calc(100%/12*var(--c-sm))}.__pf [style*="--s-sm"]>.pf-c{padding:var(--s-sm)}.__pf [style*="--ew-sm"]>.pf-c{flex-basis:calc(100% / var(--ew-sm));max-width:calc(100% / var(--ew-sm))}}@media (min-width:1024.5px){.__pf [style*="--s-md"]{margin:0 calc(-1 * var(--s-md))}.__pf [style*="--c-md"]{max-width:calc(100%/12*var(--c-md));flex-basis:calc(100%/12*var(--c-md))}.__pf [style*="--s-md"]>.pf-c{padding:var(--s-md)}.__pf [style*="--ew-md"]>.pf-c{flex-basis:calc(100% / var(--ew-md));max-width:calc(100% / var(--ew-md))}}@media (min-width:1199.5px){.__pf [style*="--s-lg"]{margin:0 calc(-1 * var(--s-lg))}.__pf [style*="--c-lg"]{max-width:calc(100%/12*var(--c-lg));flex-basis:calc(100%/12*var(--c-lg))}.__pf [style*="--s-lg"]>.pf-c{padding:var(--s-lg)}.__pf [style*="--ew-lg"]>.pf-c{flex-basis:calc(100% / var(--ew-lg));max-width:calc(100% / var(--ew-lg))}.__pf .pf-lg-hide{display:none!important}}.__pf .pf-r-eh>.pf-c>div{width:100%}.__pf .pf-c-lt{justify-content:flex-start;align-items:flex-start}.__pf .pf-c-ct{justify-content:center;align-items:flex-start}.__pf .pf-c-rt{justify-content:flex-end;align-items:flex-start}.__pf .pf-c-lm{justify-content:flex-start;align-items:center;align-content:center}.__pf .pf-c-cm{justify-content:center;align-items:center;align-content:center}.__pf .pf-c-rm{justify-content:flex-end;align-items:center;align-content:center}.__pf .pf-c-cb,.__pf .pf-c-lb,.__pf .pf-c-rb{align-content:flex-end}.__pf .pf-c-lb{justify-content:flex-start;align-items:flex-end}.__pf .pf-c-cb{justify-content:center;align-items:flex-end}.__pf .pf-c-rb{justify-content:flex-end;align-items:flex-end}.pf-sr-only{position:absolute;width:1px;height:1px;padding:0;clip:rect(0,0,0,0);white-space:nowrap;clip-path:inset(50%)}.pf-visibility-hidden{visibility:hidden}</style>
    <style>@media all{.__pf .pf-gs-button-1,.__pf .pf-gs-button-2,.__pf .pf-gs-button-3{padding:12px 20px;font-size:16px;line-height:16px;letter-spacing:0;margin:0}.__pf{--pf-primary-color:rgb(250, 84, 28);--pf-secondary-color:rgb(121, 103, 192);--pf-foreground-color:rgb(28, 29, 31);--pf-background-color:rgb(244, 245, 250);--pf-primary-font:"Playfair Display";--pf-secondary-font:"Lato";--pf-tertiary-font:"Source Sans Pro"}.__pf .pf-gs-button-1{background-color:#919da9;color:#fff}.__pf .pf-gs-button-2{color:#919da9;border:1px solid #919da9}.__pf .pf-gs-button-3{background-color:#919da9;color:#fff;border-radius:40px}.__pf .pf-gs-button-4{color:#919da9;border-radius:40px;border:1px solid #919da9;padding:12px 20px;margin:0;font-size:16px;line-height:16px;letter-spacing:0}.__pf .pf-gs-button-5,.__pf .pf-gs-button-6{color:#919da9;border-style:solid;border-color:#919da9;padding:12px 20px;font-size:16px;line-height:16px;letter-spacing:0}.__pf .pf-gs-button-5{border-width:0 0 3px;margin:0}.__pf .pf-gs-button-6{border-width:0 3px 3px 0;margin:0}.__pf .pf-gs-icon-1,.__pf .pf-gs-icon-2{background-color:#919da9;color:#fff;padding:8px;margin:0;border-style:none}.__pf .pf-gs-icon-1{border-radius:0}.__pf .pf-gs-icon-2{border-radius:50%}.__pf .pf-gs-icon-3,.__pf .pf-gs-icon-4{background-color:#fff;color:#919da9;padding:8px;margin:0;border:1px solid #919da9}.__pf .pf-gs-icon-4{border-radius:50%}.__pf .pf-gs-icon-5,.__pf .pf-gs-icon-6{background-color:#f5f5f5;color:#919da9;padding:8px;margin:0;border:1px solid #919da9}.__pf .pf-gs-icon-6{border-radius:50%}.__pf .pf-gs-image-1{width:100%}.__pf .pf-gs-image-2{border:3px solid #919da9;width:100%}.__pf .pf-gs-image-3{border:3px solid #919da9;padding:10px;width:100%}.__pf .pf-gs-image-4,.__pf .pf-gs-image-5{border-radius:50%;width:100%}.__pf .pf-gs-image-5{border:3px solid #919da9}.__pf .pf-gs-image-6{border-radius:50%;border:3px solid #919da9;padding:10px;width:100%}.__pf .pf-gs-heading-1,.__pf .pf-gs-heading-2,.__pf .pf-gs-heading-3,.__pf .pf-gs-heading-4,.__pf .pf-gs-heading-5{color:#000;padding:0;margin:18px 0}.__pf .pf-gs-heading-1{font-size:32px}.__pf .pf-gs-heading-2{font-size:24px}.__pf .pf-gs-heading-3{font-size:20px}.__pf .pf-gs-heading-4{font-size:18px}.__pf .pf-gs-heading-5{font-size:16px}.__pf .pf-gs-heading-6{margin:18px 0;font-size:14px;color:#000;padding:0}.__pf .pf-gs-paragraph-1,.__pf .pf-gs-paragraph-2,.__pf .pf-gs-paragraph-3,.__pf .pf-gs-paragraph-4{color:#000;padding:0;margin:16px 0;font-size:16px}.__pf .pf-gs-paragraph-1{text-align:left}.__pf .pf-gs-paragraph-2{text-align:right}.__pf .pf-gs-paragraph-3{text-align:center}.__pf .pf-gs-divider-1,.__pf .pf-gs-divider-2,.__pf .pf-gs-divider-3{padding:16px 0;margin:0;font-size:2px}.__pf .pf-gs-divider-1{color:#919da9}.__pf .pf-gs-divider-2{color:#444749}.__pf .pf-gs-divider-3{color:#b9bfca}}</style>
    <style>.pf-color-scheme-1,.pf-color-scheme-2{--pf-scheme-shadow-color:rgb(0, 0, 0, 0.25)}.pf-color-scheme-1{--pf-scheme-bg-color: ;--pf-scheme-text-color: ;--pf-scheme-btn-bg-color: ;--pf-scheme-btn-text-color: ;--pf-scheme-border-color: ;background-color:var(--pf-scheme-bg-color);background-image:var(--pf-scheme-bg-gradient-color);border-color:var(--pf-scheme-border-color);color:var(--pf-scheme-text-color)}.pf-color-scheme-2,.pf-color-scheme-3{--pf-scheme-btn-text-color:rgb(255, 255, 255);background-color:var(--pf-scheme-bg-color);background-image:var(--pf-scheme-bg-gradient-color);border-color:var(--pf-scheme-border-color);color:var(--pf-scheme-text-color)}.pf-color-scheme-2{--pf-scheme-bg-color:rgba(255, 255, 255, 0);--pf-scheme-text-color:rgb(0, 0, 0);--pf-scheme-btn-bg-color:rgb(145, 157, 169);--pf-scheme-border-color:rgba(0, 0, 0)}.pf-color-scheme-3,.pf-color-scheme-4{--pf-scheme-text-color:rgb(18, 18, 18);--pf-scheme-btn-bg-color:rgb(18, 18, 18);--pf-scheme-border-color:rgb(18, 18, 18)}.pf-color-scheme-3{--pf-scheme-bg-color:rgb(255, 255, 255);--pf-scheme-shadow-color:rgb(18, 18, 18)}.pf-color-scheme-4{--pf-scheme-bg-color:rgb(243, 243, 243);--pf-scheme-btn-text-color:rgb(243, 243, 243);--pf-scheme-shadow-color:rgb(18, 18, 18);background-color:var(--pf-scheme-bg-color);background-image:var(--pf-scheme-bg-gradient-color);border-color:var(--pf-scheme-border-color);color:var(--pf-scheme-text-color)}.pf-color-scheme-5,.pf-color-scheme-6,.pf-color-scheme-7{--pf-scheme-text-color:rgb(255, 255, 255);--pf-scheme-btn-bg-color:rgb(255, 255, 255);--pf-scheme-border-color:rgb(255, 255, 255);--pf-scheme-shadow-color:rgb(18, 18, 18);background-color:var(--pf-scheme-bg-color);background-image:var(--pf-scheme-bg-gradient-color);border-color:var(--pf-scheme-border-color);color:var(--pf-scheme-text-color)}.pf-color-scheme-5{--pf-scheme-bg-color:rgb(36, 40, 51);--pf-scheme-btn-text-color:rgb(0, 0, 0)}.pf-color-scheme-6{--pf-scheme-bg-color:rgb(18, 18, 18);--pf-scheme-btn-text-color:rgb(18, 18, 18)}.pf-color-scheme-7{--pf-scheme-bg-color:rgb(51, 79, 180);--pf-scheme-btn-text-color:rgb(51, 79, 180)}[data-pf-type^=Button]{background-color:var(--pf-scheme-btn-bg-color);background-image:var(--pf-scheme-btn-bg-gradient-color);color:var(--pf-scheme-btn-text-color)}@media all{.__pf .pf-button-1,.__pf .pf-button-2{color:#fff;background-color:#919da9}.__pf .pf-button-2,.__pf .pf-button-3,.__pf .pf-button-4{padding:12px 20px;margin:0;font-size:16px;line-height:16px;letter-spacing:0}.__pf .pf-button-1{padding:12px 20px}.__pf .pf-button-3{color:#919da9;border:1px solid #919da9}.__pf .pf-button-4{background-color:#919da9;color:#fff;border-radius:40px}.__pf .pf-button-5{color:#919da9;border-radius:40px;border:1px solid #919da9;padding:12px 20px;margin:0;font-size:16px;line-height:16px;letter-spacing:0}.__pf .pf-button-6,.__pf .pf-button-7{color:#919da9;border-style:solid;border-color:#919da9;padding:12px 20px;margin:0;font-size:16px;line-height:16px;letter-spacing:0}.__pf .pf-button-6{border-width:0 0 3px}.__pf .pf-button-7{border-width:0 3px 3px 0}.__pf .pf-icon-1,.__pf .pf-text-1,.__pf .pf-text-6,.__pf .pf-text-7,.pf-icon2-1,.pf-icon2-2,.pf-icon2-3,.pf-icon2-4,.pf-icon2-5,.pf-icon2-6,.pf-icon2-7{background-color:var(--pf-scheme-bg-color);color:var(--pf-scheme-text-color)}.__pf .pf-icon-2,.__pf .pf-icon-3{background-color:#919da9;color:#fff;padding:8px;margin:0;border-style:none}.__pf .pf-icon-2{border-radius:0}.__pf .pf-icon-3{border-radius:50%}.__pf .pf-icon-4,.__pf .pf-icon-5{background-color:#fff;color:#919da9;padding:8px;margin:0;border:1px solid #919da9}.__pf .pf-icon-5{border-radius:50%}.__pf .pf-icon-6,.__pf .pf-icon-7{background-color:#f5f5f5;color:#919da9;padding:8px;margin:0;border:1px solid #919da9}.__pf .pf-icon-7{border-radius:50%}.__pf .pf-image-2{width:100%}.__pf .pf-image-3{border:3px solid #919da9;width:100%}.__pf .pf-image-4{border:3px solid #919da9;padding:10px;width:100%}.__pf .pf-image-5,.__pf .pf-image-6{border-radius:50%;width:100%}.__pf .pf-image-6{border:3px solid #919da9}.__pf .pf-image-7{border-radius:50%;border:3px solid #919da9;padding:10px;width:100%}.__pf .pf-text-2,.__pf .pf-text-3,.__pf .pf-text-4,.__pf .pf-text-5{color:#000;padding:0;margin:16px 0;font-size:16px}.__pf .pf-text-2{text-align:left}.__pf .pf-text-3{text-align:right}.__pf .pf-text-4{text-align:center}.__pf .pf-divider-2,.__pf .pf-divider-3,.__pf .pf-divider-4{padding:16px 0;margin:0;font-size:2px}.__pf .pf-divider-1{color:var(--pf-scheme-text-color)}.__pf .pf-divider-2{color:#919da9}.__pf .pf-divider-3{color:#444749}.__pf .pf-divider-4{color:#b9bfca}.__pf .pf-heading-1-h1,.__pf .pf-heading-1-h2,.__pf .pf-heading-1-h3,.__pf .pf-heading-1-h4,.__pf .pf-heading-1-h5,.__pf .pf-heading-1-h6{color:var(--pf-scheme-text-color);background-color:var(--pf-scheme-bg-color)}.__pf .pf-heading-2-h1,.__pf .pf-heading-2-h2,.__pf .pf-heading-2-h3,.__pf .pf-heading-2-h4,.__pf .pf-heading-2-h5,.__pf .pf-heading-2-h6{margin:18px 0;font-size:32px;color:#000;padding:0}.__pf .pf-heading-3-h1,.__pf .pf-heading-3-h2,.__pf .pf-heading-3-h3,.__pf .pf-heading-3-h4,.__pf .pf-heading-3-h5,.__pf .pf-heading-3-h6{margin:18px 0;font-size:24px;color:#000;padding:0}.__pf .pf-heading-4-h1,.__pf .pf-heading-4-h2,.__pf .pf-heading-4-h3,.__pf .pf-heading-4-h4,.__pf .pf-heading-4-h5,.__pf .pf-heading-4-h6{margin:18px 0;font-size:20px;color:#000;padding:0}.__pf .pf-heading-5-h1,.__pf .pf-heading-5-h2,.__pf .pf-heading-5-h3,.__pf .pf-heading-5-h4,.__pf .pf-heading-5-h5,.__pf .pf-heading-5-h6{margin:18px 0;font-size:18px;color:#000;padding:0}.__pf .pf-heading-6-h1,.__pf .pf-heading-6-h2,.__pf .pf-heading-6-h3,.__pf .pf-heading-6-h4,.__pf .pf-heading-6-h5,.__pf .pf-heading-6-h6{margin:18px 0;font-size:16px;color:#000;padding:0}.__pf .pf-heading-7-h1,.__pf .pf-heading-7-h2,.__pf .pf-heading-7-h3,.__pf .pf-heading-7-h4,.__pf .pf-heading-7-h5,.__pf .pf-heading-7-h6{margin:18px 0;font-size:14px;color:#000;padding:0}.__pf .pf-field-1,.__pf .pf-field-2,.__pf .pf-field-3,.__pf .pf-field-4,.__pf .pf-field-5,.__pf .pf-field-6{background-color:#fdfdfd;border:.66px solid #8a8a8a;border-radius:8px;padding:6px 12px}}</style>
    <style>.bWwHur label,.iRidsy{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;position:relative}.bWwHur label,.bWwHur sup,.gnBPmJ,.iRidsy,.llyViG{position:relative}.bfEpsg,.pfa{font-size:14px}.hQhHpX{height:auto}.llyViG{padding:15px 0}.bWwHur{padding:8px}.bWwHur label{display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:16px;width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}.bWwHur label:not(:last-child){margin-bottom:4px}.bWwHur sup{top:-8px;color:red}.bWwHur input,.bWwHur textarea{border:1px solid var(--pf-border-color);font-size:16px;background:#fff;border-radius:4px;width:100%;outline:0}.bWwHur input::-webkit-input-placeholder,.bWwHur textarea::-webkit-input-placeholder{color:var(--pf-border-color)}.bWwHur input::-moz-placeholder,.bWwHur textarea::-moz-placeholder{color:var(--pf-border-color)}.bWwHur input:-ms-input-placeholder,.bWwHur textarea:-ms-input-placeholder{color:var(--pf-border-color)}.bWwHur input::placeholder,.bWwHur textarea::placeholder{color:var(--pf-border-color)}.bWwHur input{padding:10px 8px}.bWwHur textarea{padding-left:8px;resize:none}.bWwHur button{padding:10px 20px;background:var(--pf-sample-color);border-radius:4px;color:#fff;font-size:16px;border:0}.bfEpsg{border-radius:4px;margin-top:16px;padding:16px;text-align:center;border:1px solid}.UNids{-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-appearance:none;outline:0;font-family:inherit}.UNids>i{margin-right:.3em}.iRidsy{display:flex;width:100%;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.hTFgFD{--pf-sample-color:#5d6b82;--pf-border-color:#d1d5db;opacity:1!important}@media all{.__pf .pf-3_{margin-top:200px;margin-bottom:200px}.__pf .pf-6_{background-color:#242424}.__pf .pf-8_{margin:auto;display:flex;padding-top:15px;padding-bottom:15px}.__pf .pf-9_ [data-pf-type=FormInput]{color:#000}.__pf .pf-35_{text-align:center}.__pf .pf-37_{font-size:inherit}}@font-face{font-family:FontAwesome;src:url('https://cdn.shopify.com/s/files/1/0090/9236/6436/files/fa.eot?v=4.7.0');src:url('https://cdn.shopify.com/s/files/1/0090/9236/6436/files/fa.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('https://cdn.shopify.com/s/files/1/0090/9236/6436/files/fa.woff2?v=4.7.0') format('woff2'),url('https://cdn.shopify.com/s/files/1/0090/9236/6436/files/fa.woff?v=4.7.0') format('woff'),url('https://cdn.shopify.com/s/files/1/0090/9236/6436/files/fa.ttf?v=4.7.0') format('truetype'),url('https://cdn.shopify.com/s/files/1/0090/9236/6436/files/fa.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:400;font-style:normal;font-display:swap}.pfa{display:inline-block;line-height:1;font-family:FontAwesome!important;font-style:normal;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.pfa-envelope:before{content:"\f0e0"}</style>
@endsection
@section('content')
    <div ng-controller="contact">
        <div id="shopify-section-template--17549462700190__pf-8df476c4" class="shopify-section">
            <style>#main {
                    background-color: #000;
                    color: #fff
                }

                .sc-cugefK .iKePrP {
                    background-color: #292929
                }</style>
            <div style="opacity:0" class="sc-bKoJNE hTFgFD __pf" id="__pf">
                <div data-pf-type="Body" class="sc-dvXYtj iduHXF pf-1_">
                    <div data-pf-type="Layout" class="sc-ckTSus kVjkXt pf-2_">
                        <div data-pf-type="Section" class="sc-eKYRIR llyViG pf-3_">
                            <div style="--cw:1170px" class="sc-hmbstg iriXCP">
                                <div class="sc-hiKfDv dRsyqq pf-4_ pf-r pf-r-eh" style="--s-xs:15px" data-pf-type="Row">
                                    <div class="pf-c" style="--c-xs:12;--c-lg:12">
                                        <div data-pf-type="Column" class="sc-TtZnY gnBPmJ pf-5_"></div>
                                    </div>
                                </div>
                                <div class="sc-hiKfDv dRsyqq pf-6_ pf-r pf-c-cm" style="--s-xs:15px" data-pf-type="Row">
                                    <div class="pf-c" style="--c-xs:12;--c-lg:12">
                                        <div data-pf-type="Column" class="sc-TtZnY gnBPmJ pf-7_"><img
                                                src="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-250c23db--monsterlogo169fc6b03f464b66a852a4be27c3314c205x_204x.png?v=1590602824"
                                                srcset="https://cdn.shopify.com/s/files/1/0319/8789/2355/t/4/assets/pf-250c23db--monsterlogo169fc6b03f464b66a852a4be27c3314c205x.png?v=1590602824 1536w"
                                                width="204" height="33"
                                                sizes="(min-width: 1536px) 1536px, (min-width: 1024px) 1280px, (min-width: 640px) 768px, 320px"
                                                loading="lazy" data-pf-type="Image" class="sc-khIgEk hQhHpX pf-8_">
                                            <div data-pf-type="Form2" class="sc-dwxYdI bWwHur pf-9_">
                                                <form id="form-contact"
                                                      accept-charset="UTF-8" class="contact-form" data-cptcha="true"
                                                      data-hcaptcha-bound="true"><input type="hidden" name="form_type"
                                                                                        value="contact"><input
                                                        type="hidden" name="utf8" value="✓">

                                                    <div class="sc-hiKfDv dRsyqq pf-19_ pf-r pf-r-eh"
                                                         style="--s-xs:15px;--s-lg:10px" data-pf-type="Row">
                                                        <div class="pf-c" style="--c-xs:12;--c-lg:12">
                                                            <div data-pf-type="Column" class="sc-TtZnY gnBPmJ pf-20_">
                                                                <div data-pf-type="Form2.Field"
                                                                     class="sc-biHcxt iRidsy pf-21_"><label
                                                                        data-pf-type="FormLabel"
                                                                        class="sc-ByBTK dXFovK pf-22_">Họ tên<sup>*</sup></label><input
                                                                        type="text" name="contact[name]"
                                                                        placeholder="Enter your name" required=""
                                                                        value="" data-pf-type="FormInput"
                                                                        class="sc-liAPKD iwClXr pf-23_"></div>
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback d-block error" role="alert">
                                                            <span ng-if="errors && errors['contact.email']">
                                                                <% errors['contact.name'][0] %>
                                                            </span>
                                                        </div>
                                                    </div>


                                                    <div class="sc-hiKfDv dRsyqq pf-19_ pf-r pf-r-eh"
                                                         style="--s-xs:15px;--s-lg:10px" data-pf-type="Row">
                                                        <div class="pf-c" style="--c-xs:12;--c-lg:12">
                                                            <div data-pf-type="Column" class="sc-TtZnY gnBPmJ pf-20_">
                                                                <div data-pf-type="Form2.Field"
                                                                     class="sc-biHcxt iRidsy pf-21_"><label
                                                                        data-pf-type="FormLabel"
                                                                        class="sc-ByBTK dXFovK pf-22_">Email<sup>*</sup></label><input
                                                                        type="email" name="contact[email]"
                                                                        placeholder="Enter your email" required=""
                                                                        value="" data-pf-type="FormInput"
                                                                        class="sc-liAPKD iwClXr pf-23_"></div>
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback d-block error" role="alert">
                                                    <span ng-if="errors && errors['contact.email']">
                                                        <% errors['contact.email'][0] %>
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="sc-hiKfDv dRsyqq pf-29_ pf-r pf-r-eh"
                                                         style="--s-xs:15px;--s-lg:10px" data-pf-type="Row">
                                                        <div class="pf-c" style="--c-xs:12;--c-lg:12">
                                                            <div data-pf-type="Column" class="sc-TtZnY gnBPmJ pf-30_">
                                                                <div data-pf-type="Form2.Field"
                                                                     class="sc-biHcxt iRidsy pf-31_"><label
                                                                        data-pf-type="FormLabel"
                                                                        class="sc-ByBTK dXFovK pf-32_">Tin nhắn<sup>*</sup></label><textarea
                                                                        name="contact[body]" required=""
                                                                        placeholder="Enter your message" rows="6"
                                                                        data-pf-type="FormInput"
                                                                        class="sc-fTFMiz PIJDq pf-33_"></textarea></div>
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback d-block error" role="alert">
                                                    <span ng-if="errors && errors['contact.body']">
                                                        <% errors['contact.body'][0] %>
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="sc-hiKfDv dRsyqq pf-34_ pf-r pf-r-eh"
                                                         style="--s-xs:15px;--s-lg:10px" data-pf-type="Row">
                                                        <div class="pf-c" style="--c-xs:12;--c-lg:12">
                                                            <div data-pf-type="Column" class="sc-TtZnY gnBPmJ pf-35_">
                                                                <button type="submit"
                                                                        ng-click="submit()"
                                                                        data-pf-type="Form2.Button"
                                                                        class="sc-hJFzke UNids pf-36_"
                                                                ><i
                                                                        class="sc-Arkif eJDRKz pf-37_ pfa pfa-envelope"
                                                                        data-pf-type="Icon"></i>Gửi đi
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="h-captcha"
                                                         data-sitekey="f06e6c50-85a8-45c8-87d0-21a2b65856fe"
                                                         data-size="invisible">
                                                        <iframe aria-hidden="true"
                                                                data-hcaptcha-widget-id="0efaempjkv0n"
                                                                data-hcaptcha-response=""
                                                                src="https://newassets.hcaptcha.com/captcha/v1/686f2a4aa9ab43028e539b4d59475a87e9bd0d11/static/hcaptcha.html#frame=checkbox-invisible"
                                                                style="display: none;"></iframe>
                                                        <textarea id="h-captcha-response-0efaempjkv0n"
                                                                  name="h-captcha-response"
                                                                  style="display: none;"></textarea></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>window.__pagefly_setting__ = {
                    "baseURL": "https://apps.pagefly.io",
                    "analyticsURL": "https://analytics.pagefly.io",
                    "isBackend": false,
                    "cdnURL": "https://cdn.pagefly.io",
                    "pageflyVersion": "3.11.3",
                    "shopDomain": "mymonsteraudio.myshopify.com",
                    "elementData": {},
                    "pageTitle": "Contact",
                    "pageType": "page",
                    "pageId": "8df476c4-60a3-45ec-83db-bcbbd7bce3b4",
                    "lazyLoad": false,
                    "forceByPassGoogleLightHouse": false,
                    "imageLazyLoad": true,
                    "nativeImageLazyLoad": true,
                    "useThemeJQ": false,
                    "selectedFonts": {},
                    "trackingIDs": [],
                    "shopifyProxyPath": "/a/pf_preview"
                };
                window.__pagefly_setting__.moneyFormat = "$";</script>
            <script src="https://cdn.pagefly.io/pagefly/3.11.3/core/helper.js" async=""></script>
            <script><!-- Start of esiaudio Zendesk Widget script -->
                <script id="ze-snippet"
                        src="https://static.zdassets.com/ekr/snippet.js?key=b55ae7fb-6466-4925-86f5-dccf949533a5"> </script>
            <!-- End of esiaudio Zendesk Widget script -->

        </div>
    </div>

@endsection

@push('scripts')
    <script>
        app.controller('contact', function ($rootScope, $scope, $sce, $interval, cartItemSync) {
            $scope.errors = [];
            $scope.submit = function () {
                var url = "{{route('front.submitContact')}}";
                var data = jQuery('#form-contact').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#form-contact')[0].reset();
                            $scope.errors = [];
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.error(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$apply();
                    }
                });
            }
        })

    </script>
@endpush
