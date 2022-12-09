<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::where(['status' => 1])->with('sizes')->whereHas('sizes', function ($query){
            $query->havingRaw('sizes.amount' > 0);
        })->get();

        return view('product.shop', [
            'products' => $products,
        ]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function category($category)
    {
        $category = Category::where('slug', $category)->first();
        $products = Product::where(['status' => 1, 'collection_id' => $category->id])->with('sizes')->whereHas('sizes', function ($query){
            $query->havingRaw('sizes.amount' > 0);
        })->get();

        return view('product.shop', [
            'products' => $products,
        ]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function product($category, $product)
    {
        $product = Product::where('slug', $product)->first();
        $stock = 0;
        foreach ($product->sizes as $size) {
            $stock = $stock + $size->pivot->amount;
        }

        return view('product.product-inner', [
            'product' => $product,
            'stock' => $stock,
        ]);
    }
}
