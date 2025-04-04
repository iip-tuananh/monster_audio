<!DOCTYPE html>
<html class="no-js" lang="en">

@include('site.partials.head')


<body ng-app="App" ng-cloak class="page-transition zoom-image--enabled">
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

@stack('scripts')
</html>
