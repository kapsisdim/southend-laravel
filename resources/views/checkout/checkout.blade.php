@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20" x-data="{ open: false }">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">CHECKOUT</div>
    <div class="flex gap-20 flex-col lg:flex-row container mx-auto max-h-[950px]">
        <form class="mx-auto container text-white font-anek tracking-[0.2em] order-last lg:order-1" id="checkout-form" method="POST" action=" {{ route('checkout.store') }}">
            @csrf
            @honeypot
            <div class="flex flex-col gap-20">
                <div class="bg-black p-20 w-full">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Personal Details</h3>
                    <div class="flex flex-col md:flex-row py-20 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="first_name">First Name</label>
                            <input class="w-full py-4 text-black" type="text" id="first_name" name="first_name" autocomplete="given-name" required>
                        </div>

                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="last_name">Last Name</label>
                            <input class="w-full py-4 text-black" type="text" id="last_name" name="last_name" autocomplete="family-name surname" required>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:py-10 pb-10 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="email">E-mail</label>
                            <input class="w-full py-4 text-black" type="email" id="email" name="email" autocomplete="email" required>
                        </div>
                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="mobile_number">Mobile Number</label>
                            <input class="w-full py-4 text-black" type="tel" id="mobile_number" name="mobile_number" pattern="^[+]?[0-9]*$" required
                            autocomplete="tel">
                        </div>
                    </div>
                </div>
                <div class="bg-black p-20 w-full">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Billing Address</h3>
                    <div class="flex flex-col md:flex-row py-20 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="billing_address">Address</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_address" name="billing_address" required
                            autocomplete="street-address">
                        </div>

                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="billing_city">City</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_city" name="billing_city" required
                            autocomplete="city">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:py-10 pb-10 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="billing_postal_code">Postal Code</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_postal_code" pattern="^[+]?[0-9]*$" name="billing_postal_code" required
                            autocomplete="postal-code">
                        </div>
                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="billing_region">Region</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_region" name="billing_region" required>
                        </div>
                    </div>
                    <div class="flex w-full justify-baseline items-center py-10 mt-10 gap-10 tracking-wider">
                        <input type="checkbox" id="same_billing" name="same_billing" checked required x-init="$el.value = 1" x-on:click="open = !$el.checked; $el.checked ? $el.value = 1 : $el.value = 0" >
                        <label class="inline-block pt-[7px]" for="same_billing">My shipping and billing addresses are the same.</label>
                    </div>
                </div>

                <div class="bg-black p-20 w-full" x-bind:class="{ hidden: !open }">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Shipping Address</h3>
                    <div class="flex flex-col md:flex-row py-20 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="shipping_address">Address</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_address" name="shipping_address"
                            autocomplete="street-address">
                        </div>

                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="shipping_city">City</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_city" name="shipping_city"  autocomplete="city">
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:py-10 pb-10 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="shipping_postal_code">Postal Code</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_postal_code" pattern="^[0-9]*$" name="shipping_postal_code" autocomplete="postal-code">
                        </div>
                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="shipping_region">Region</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_region" name="shipping_region">
                        </div>
                    </div>
                </div>

                <div class="bg-black p-20 w-full">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Shipping Method</h3>
                    <div class="pt-20">
                        <input type="radio" id="courier" name="shipping_method" value="courier"
                               checked>
                        <label for="courier">Courier Service - $3.00</label>
                    </div>
                </div>

                <div class="bg-black p-20 w-full">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Payment Method</h3>
                    <div class="pt-20">
                        <input type="radio" id="cash" name="payment_method" value="cash"
                               checked>
                        <label for="cash">Cash on delivery</label>
                    </div>
                </div>
            </div>
        </form>
        <div class="bg-black w-full mx-auto container lg:max-w-[540px] lg:order-last overflow-y-scroll">
            @if (count($items))
            <div class="justify-between font-anek spacing-2 hidden sm:flex text-white border-b border-[#222] flex-grow p-20 tracking-[0.2em]">
                <div class="xl:w-3/5 w-2/5">PRODUCT</div>
                <div class="sm:w-1/10 w-1/5 flex-1 text-end">TOTAL</div>
            </div>
            @endif

            @forelse ($items as $index => $item)
            <div class="justify-between font-anek spacing-2 flex-col flex sm:flex-row text-white border-b border-[#222] flex-grow p-20 items-center tracking-[0.2em]">
                <div class="justify-self-start flex flex-col sm:flex-row items-center xl:w-3/5 w-2/5 mb-20 sm:mb-0 flex-grow">
                    <a class="relative mb-15 sm:mb-0 inline-block" href="product.html">
                        <img src="{{ $item['product']->list_image->image }}" alt="{{ $item['product']->title }}" width="100">
                        <div class="flex absolute top-0 right-0 bg-white rounded-[50%] translate-x-5 -translate-y-5 text-black w-20 h-20 justify-center">
                            <div class="w-fit pl-2 pt-1">{{ $item['quantity'] }}</div>
                        </div>
                    </a>
                    <div class="mx-20">
                        <a href="product.html" class=" text-lg mb-0 sm:mb-8 inline-block"><h4>{{ $item['product']->title }}</h4></a>
                        <div class="text-sm">Size: {{ $item['size'] }}</div>
                    </div>
                </div>
                <div class="sm:w-1/10 flex-1 text-end">{{ $item['product']->price * $item['quantity']}} &#8364;</div>
            </div>
            @empty
            <div class="text-white p-40 text-center text-lg font-anek tracking-[0.2em]">Your cart is empty! Go grab some cool clothing and come back!</div>
            @endforelse

            @if (count($items))
            <div class="flex justify-end container mx-auto font-anek tracking-[0.2em]">
                <div class="bg-black text-white mt-20 w-fit p-20 pt-[24px]">SUBTOTAL :</div>
                <div class="bg-black text-white mt-20 w-fit p-20 pt-[24px]">{{ $subtotal }} &#8364;</div>
            </div>
            <div class="flex justify-end container mx-auto font-anek tracking-[0.2em]">
                <div class="bg-black text-white w-fit p-20 pt-[24px]">SHIPPING FEE :</div>
                <div class="bg-black text-white w-fit p-20 pt-[24px]">3.00 &#8364;</div>
            </div>
            <div class="flex justify-end container mx-auto font-anek tracking-[0.2em]">
                <div class="bg-black text-white w-fit p-20 pt-[24px]">TOTAL :</div>
                <div class="bg-black text-white w-fit p-20 pt-[24px]">{{ $subtotal + 3.00 }} &#8364;</div>
            </div>
            @endif
        </div>
    </div>
    <div class="flex justify-between container mx-auto font-anek tracking-[0.2em]">
        <a href="{{ route('cart') }}" class="bg-black text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline">
            <i class="fas fa-arrow-left mr-10"></i>
            BACK
        </a>
        <button type="submit" form="checkout-form" class="bg-black hover:text-[#e94c34] text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline tracking-[0.2em] {{ count($items) == 0 ? 'opacity-30  pointer-events-none' : ''}}">SUBMIT</button>
    </div>
</div>
@endsection
