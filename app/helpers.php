<?php

use App\Models\User;
use App\Models\Product;

function getProductData()
{
    $items = [];
    $subtotal = 0.00;

    if (session()->has('cart.items')) {
        $items = collect(session()->get('cart.items'))->map(function ($item) use (&$items, &$subtotal) {
            $item['product'] = Product::find($item['product_id']);
            $subtotal = $subtotal + $item['quantity'] * $item['product']->price;
            return $item;
        });
    }

    return [$items, $subtotal];
}
