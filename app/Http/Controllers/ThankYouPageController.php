<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ThankYouPageController extends Controller
{
    public function show(Order $order)
    {
        return view('thank-you', ['order_number' => $order->order_number]);
    }
}
