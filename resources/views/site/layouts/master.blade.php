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

@stack('scripts')

</html>
