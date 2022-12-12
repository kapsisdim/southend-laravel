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

        $meta['title'] = 'Products | Southend Apparel';
        $meta['description'] = 'Southend Apparel is the best street clothing brand based in Athens';
        $meta['image'] = '/storage/images/home.png';
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 0;
        view()->share('meta', $meta);

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

        $meta['title'] = 'Products | ' . $category->title . ' | Southend Apparel';
        $meta['description'] = 'Southend Apparel is the best street clothing brand based in Athens';
        $meta['image'] = '/storage/images/home.png';
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 0;
        view()->share('meta', $meta);

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

        $meta['title'] = 'Products | ' . $product->title . ' | Southend Apparel';
        $meta['description'] = $product->description;
        $meta['image'] = $product->list_image->image;
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 0;
        view()->share('meta', $meta);

        return view('product.product-inner', [
            'product' => $product,
            'stock' => $stock,
        ]);
    }
}
