<div class="col-12 col-md-9">
    <div class="row product-grid grid-view">
        @foreach($products as $product)
        <livewire:product-item :product="$product" :keys="$loop->index">

            @endforeach
    </div>
</div>