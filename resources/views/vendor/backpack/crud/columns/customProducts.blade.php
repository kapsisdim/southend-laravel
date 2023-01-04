<?php
    use App\Models\ProductSize;
?>

<span>
    @foreach ($entry->getProducts()->get() as $product)
    <?php $size =  ProductSize::find($product->pivot->product_size_id)?>
        <span class="d-inline-flex">
            {{ $product->title . ' (' . $size->size . ') ' . 'x' . $product->pivot->quantity . ' ,'}}
        </span>
    @endforeach
</span>