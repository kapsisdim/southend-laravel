<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Product;

class CollectionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $collections = Collection::get();
        $products = Product::where('status', 1)->get();

        return view('product.shop', [
                'collections' => $collections,
                'products' => $products,
        ]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function collection($category)
    {
        $products = Product::where('status', 1)->get();
        $collection = Collection::where('slug', $category)->first();

        return view('product.shop', [
            'products' => $products,
            'collection' => $collection,
        ]);
    }
}
