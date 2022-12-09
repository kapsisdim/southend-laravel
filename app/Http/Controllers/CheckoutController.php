<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\BillingAddress;
use App\Models\ProductSize;
use App\Models\ShippingAddress;
use Illuminate\Validation\Rule;

class CheckoutController extends Controller
{
    public function show(Request $request)
    {
        [$items, $subtotal] = getProductData();

        return view('checkout.checkout', compact('items', 'subtotal'));
    }

    public function store(Request $request)
    {
        [$items, $subtotal] = getProductData();

        $data = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:40',
            'email' => 'required|email',
            'same_billing' => 'boolean',
            'billing_address' => 'required|max:60',
            'billing_postal_code' => ['required'],
            'billing_city' => 'required|max:60',
            'billing_region' => 'required|max:60',
            'mobile_number' => ['required'],
            'shipping_address' => 'exclude_if:same_billing,true|required|max:60',
            'shipping_postal_code' => ['exclude_if:same_billing,true', 'required'],
            'shipping_city' => 'exclude_if:same_billing,true|required|max:60',
            'shipping_region' => 'exclude_if:same_billing,true|required|max:60',
            'shipping_method' => [
                'required',
                Rule::in(['courier']),
            ],
            'payment_method' => [
                'sometimes',
                'required',
                Rule::in(['cash']),
            ],
        ]);

        $user = User::where('email', $data['email'])->get()->first();
        if ($user == null) {
            $user = User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'mobile' => $data['mobile_number'],
            ]);
        }

        $billing_address = BillingAddress::create([
            'address' => $data['billing_address'],
            'city' => $data['billing_city'],
            'region' => $data['billing_region'],
            'post_code' => $data['billing_postal_code'],
        ]);

        if ($data['same_billing']) {
            $shipping_address = ShippingAddress::create(
                $billing_address->toArray()
            );
        }
        else {
            $shipping_address = ShippingAddress::create([
                'address' => $data['shipping_address'],
                'city' => $data['shipping_city'],
                'region' => $data['shipping_region'],
                'post_code' => $data['shipping_postal_code'],
            ]);
        }

        [$items, $subtotal] = getProductData();

        $order = Order::create([
            'payment_method' => $data['payment_method'],
            'payment_status' => 0,
            'order_status' => 'pending',
            'total' => $subtotal,
            'user_id' => $user->id,
            'shipping_id' => 1,
            'billing_address_id' => $billing_address->id,
            'shipping_address_id' => $shipping_address->id,
        ]);

        $order->update(['order_number' => $order->id + 1000]);

        $items->map(function ($item) use (&$order) {
            $size_id = ProductSize::select('id')->where('size', $item['size'])->get()->first()->id;
            $order->getProducts()->attach($item['product'], [
                'product_size_id' => $size_id,
                'quantity' => $item['quantity'],
            ]);
        });

        session()->flush();

        return redirect()->route('thank-you', $order->id);
    }
}
