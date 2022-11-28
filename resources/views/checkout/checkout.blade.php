@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">CHECKOUT</div>
    <div class="flex gap-20 flex-col lg:flex-row container mx-auto">
        <form class="mx-auto container text-white font-anek tracking-[0.2em] order-last lg:order-1" id="checkout-form">
            <div class="flex flex-col gap-20">
                <div class="bg-black p-20 w-full">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Personal Details</h3>
                    <div class="flex flex-col md:flex-row py-20 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="first_name">First Name</label>
                            <input class="w-full py-4 text-black" type="text" id="first_name" name="first_name" required>
                        </div>

                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="last_name">Last Name</label>
                            <input class="w-full py-4 text-black" type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:py-10 pb-10 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="email">E-mail</label>
                            <input class="w-full py-4 text-black" type="email" id="email" name="email" required>
                        </div>
                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="mobile_number">Mobile Number</label>
                            <input class="w-full py-4 text-black" type="tel" id="mobile_number" name="mobile_number" required>
                        </div>
                    </div>
                </div>
                <div class="bg-black p-20 w-full">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Billing Address</h3>
                    <div class="flex flex-col md:flex-row py-20 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="billing_address">Address</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_address" name="billing_address" required>
                        </div>

                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="billing_city">City</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_city" name="billing_city" required>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:py-10 pb-10 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="billing_postal_code">Postal Code</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_postal_code" name="billing_postal_code" required>
                        </div>
                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="billing_region">Region</label>
                            <input class="w-full py-4 text-black" type="text" id="billing_region" name="billing_region" required>
                        </div>
                    </div>
                    <div class="flex w-full justify-baseline items-baseline py-10 mt-10 gap-10 tracking-wider">
                        <input type="checkbox" id="same_billing" name="same_billing" checked required>
                        <label class="inline-block" for="same_billing">My shipping and billing addresses are the same.</label>
                    </div>
                </div>

                <div class="bg-black p-20 w-full hidden">
                    <h3 class="py-10 text-2xl border-b border-[#222]">Shipping Address</h3>
                    <div class="flex flex-col md:flex-row py-20 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="shipping_address">Address</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_address" name="shipping_address" required>
                        </div>

                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="shipping_city">City</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_city" name="shipping_city" required>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:py-10 pb-10 justify-between">
                        <div class="w-full md:w-1/2 flex-1 md:mr-15 mb-20 md:mb-0">
                            <label class="mb-8 inline-block" for="shipping_postal_code">Postal Code</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_postal_code" name="shipping_postal_code" required>
                        </div>
                        <div class="w-full md:w-1/2 flex-1 md:ml-15">
                            <label class="mb-8 inline-block" for="shipping_region">Region</label>
                            <input class="w-full py-4 text-black" type="text" id="shipping_region" name="shipping_region" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="bg-black w-full mx-auto container lg:max-w-[540px] lg:order-last">
            <div class="justify-between font-anek spacing-2 hidden sm:flex text-white border-b border-[#222] flex-grow p-20 tracking-[0.2em]">
                <div class="xl:w-3/5 w-2/5">PRODUCT</div>
                <div class="sm:w-1/10 w-1/5 flex-1 text-end">TOTAL</div>
            </div>

            {{-- @foreach --}}
            <div class="justify-between font-anek spacing-2 flex-col flex sm:flex-row text-white border-b border-[#222] flex-grow p-20 items-center tracking-[0.2em]">
                <div class="justify-self-start flex flex-col sm:flex-row items-center xl:w-3/5 w-2/5 mb-20 sm:mb-0 flex-grow">
                    <a class="relative mb-15 sm:mb-0 inline-block" href="product.html">
                        <img src="../images/products_dummy/1.jpeg" alt="Image 1" width="100">
                        <div class="flex absolute top-0 right-0 bg-white rounded-[50%] translate-x-5 -translate-y-5 text-black w-20 h-20 justify-center">
                            <div class="w-fit pl-2 pt-1">5</div>
                        </div>
                    </a>
                    <div class="mx-20">
                        <a href="product.html" class=" text-lg mb-0 sm:mb-8 inline-block"><h4>Title 1</h4></a>
                        <div class="text-sm">Size: M</div>
                    </div>
                </div>
                <div class="sm:w-1/10 flex-1 text-end">$20.00</div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
    <div class="flex justify-between container mx-auto font-anek tracking-[0.2em]">
        <a href="/cart" class="bg-black text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline">
            <i class="fas fa-arrow-left mr-10"></i>
            BACK
        </a>
        <button type="submit" form="checkout-form" class="bg-black text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline tracking-[0.2em]">COMPLETION</button>
    </div>
</div>
@endsection

