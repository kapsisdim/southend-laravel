@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">CHECKOUT</div>
    <form class="mx-auto container text-white font-anek tracking-[0.2em]">
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
</div>
@endsection

