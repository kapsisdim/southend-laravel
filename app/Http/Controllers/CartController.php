<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Request $request)
    {
        [$items, $subtotal] = getProductData();

        return view('checkout.cart', compact('items', 'subtotal'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|integer',
            'size' => 'required|min:1',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($request->session()->has('cart.items')) {
            $index = count($request->session()->get('cart.items')) + 1;
            $request->session()->put("cart.items.$index", $data);
        }
        else {
            $request->session()->put("cart.items.1", $data);
        }

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'index' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $index = $data['index'];

        if ($data['quantity'] <= 0) {
            session()->forget("cart.items.$index");
        }
        else {
            session()->put("cart.items.$index.quantity", $data['quantity']);
        }

        [$items, $subtotal] = getProductData();

        if ($request->wantsJson()) {
            $html = view('components.checkout.products', compact('items', 'subtotal'))->render();
            return response()->json(compact('html'));
        }
    }

    public function destroy(Request $request)
    {
        $data = $request->validate([
            'index' => 'required|integer',
        ]);

        $index = $data['index'];

        session()->forget("cart.items.$index");

        [$items, $subtotal] = getProductData();

        if ($request->wantsJson()) {
            $html = view('components.checkout.products', compact('items', 'subtotal'))->render();
            return response()->json(compact('html'));
        }
    }
}
