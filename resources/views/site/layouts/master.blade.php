<!DOCTYPE html>
<html class="no-js" lang="en" >

@include('site.partials.head')
@yield('css')

<body ng-app="App" ng-cloak class="page-transition zoom-image--enabled">

{{--<template id="popover-default-template">--}}
{{--    <button part="outside-close-button" is="close-button" aria-label="Close"><svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">--}}
{{--            <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>--}}
{{--        </svg></button>--}}

{{--    <div part="overlay"></div>--}}

{{--    <div part="content">--}}
{{--        <header part="title">--}}
{{--            <slot name="title"></slot>--}}
{{--        </header>--}}

{{--        <div part="body">--}}
{{--            <slot></slot>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</template>--}}

<template id="drawer-default-template">
        <style>
            [hidden] {
                display: none !important;
            }
        </style>

        <button part="outside-close-button" is="close-button" aria-label="Close"><svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
            </svg></button>

        <div part="overlay"></div>

        <div part="content">
            <header part="header">
                <slot name="header"></slot>

                <button part="close-button" is="close-button" aria-label="Close"><svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close" viewBox="0 0 24 24">
                        <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>
                    </svg></button>
            </header>

            <div part="body">
                <slot></slot>
            </div>

            <footer part="footer">
                <slot name="footer"></slot>
            </footer>
        </div>
    </template>


{{--    <template id="popover-default-template">--}}
{{--        <button part="outside-close-button" is="close-button" aria-label="Close">--}}
{{--            <svg role="presentation" stroke-width="2" focusable="false" width="24" height="24" class="icon icon-close"--}}
{{--                 viewBox="0 0 24 24">--}}
{{--                <path d="M17.658 6.343 6.344 17.657M17.658 17.657 6.344 6.343" stroke="currentColor"></path>--}}
{{--            </svg>--}}
{{--        </button>--}}

{{--        <div part="overlay"></div>--}}

{{--        <div part="content">--}}
{{--            <header part="title">--}}
{{--                <slot name="title"></slot>--}}
{{--            </header>--}}

{{--            <div part="body">--}}
{{--                <slot></slot>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </template>--}}
    @include('site.partials.header')
    <main role="main" id="main" class="anchor">
        @yield('content')
        @include('site.partials.footer')
    </main>


</body>

@include('site.partials.angular_mix')

<script>
    app.controller('headerPartial', function ($rootScope, $scope, cartItemSync, $interval) {
        $scope.hasItemInCart = true;
        $scope.cart = cartItemSync;

        // xóa item trong giỏ
        $scope.removeItem = function (product_id) {
            jQuery.ajax({
                type: 'GET',
                url: "{{route('cart.remove.item')}}",
                data: {
                    product_id: product_id
                },
                success: function (response) {
                    if (response.success) {
                        $scope.cart.items = response.items;
                        $scope.cart.count = Object.keys($scope.cart.items).length;
                        $scope.cart.totalCost = response.total;

                        $interval.cancel($rootScope.promise);

                        $rootScope.promise = $interval(function(){
                            cartItemSync.items = response.items;
                            cartItemSync.total = response.total;
                            cartItemSync.count = response.count;
                        }, 1000);

                        if ($scope.cart.count == 0) {
                            $scope.hasItemInCart = false;
                        }
                        $scope.$applyAsync();
                    }
                },
                error: function (e) {
                    jQuery.toast.error('Đã có lỗi xảy ra');
                },
                complete: function () {
                    $scope.$applyAsync();
                }
            });
        }

        $scope.mobileMenuOpen = false;

        $scope.toggleMobileMenu = function() {
            $scope.mobileMenuOpen = !$scope.mobileMenuOpen;
            console.log($scope.mobileMenuOpen)
        };
    });

    // đồng bộ hiển thị số lượng item giỏ hàng
    app.factory('cartItemSync', function ($interval) {
        var cart = {items: null, total: null};

        cart.items = @json($cartItems);
        cart.count = {{$cartItems->sum('quantity')}};
        cart.total = {{$totalPriceCart}};

        return cart;
    });
</script>
@stack('script')
@stack('scripts')
</html>
