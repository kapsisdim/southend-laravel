<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::where('status', 1)->get();

        return view('collections', [
            'collections' => $collections,
        ]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function collection($collection)
    {
        $collection = Collection::where(['slug' => $collection, 'status' => 1])->first();
        $products = Product::where(['status' => 1, 'collection_id' => $collection->id])->with('sizes')->whereHas('sizes', function ($query){
            $query->havingRaw('sizes.amount' > 0);
        })->get();

        return view('product.shop', [
            'products' => $products,
            'collection' => $collection,
        ]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function category($collection, $category)
    {
        $collection = Collection::where(['slug' => $collection, 'status' => 1])->first();
        $category = Category::where('slug', $category)->first();
        $products = Product::where(['status' => 1, 'collection_id' => $collection->id, 'category_id' => $category->id])
        ->with('sizes')->whereHas('sizes', function ($query){
            $query->havingRaw('sizes.amount' > 0);
        })->get();

        return view('product.shop', [
            'products' => $products,
            'collection' => $collection,
            'category' => $category,
        ]);
    }
}
