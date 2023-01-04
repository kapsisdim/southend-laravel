<?php

namespace App\Http\Controllers;

use App\Models\Order;

class ThankYouPageController extends Controller
{
    public function show(Order $order)
    {
        $meta['title'] = 'Thank you for your order | Southend Apparel';
        $meta['description'] = 'Southend Apparel is the best street clothing brand based in Athens';
        $meta['image'] = '/storage/images/home.png';
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 0;
        view()->share('meta', $meta);

        return view('thank-you', ['order_number' => $order->order_number]);
    }
}
