<product-list class="product-list" role="region" aria-live="polite">
    @foreach($products as $product)
        @include('site.partials.product_card', ['product' => $product])
    @endforeach
</product-list>
