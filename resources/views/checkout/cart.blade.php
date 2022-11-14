@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">SHOPPING CART</div>
    <div class="m-auto container bg-black">
        <div class="justify-between font-anek spacing-2 hidden lg:flex text-white border-b border-[#222] flex-grow p-20 tracking-[0.2em]">
            <div class="xl:w-3/5 w-2/5">PRODUCT</div>
            <div class="xl:w-1/10 w-1/5 flex-1 text-center">PRICE</div>
            <div class="lg:w-1/10 flex-1 text-center">QUANTITY</div>
            <div class="xl:w-1/10 flex-1 text-center">REMOVE</div>
            <div class="lg:w-1/10 w-1/5 flex-1 text-end">TOTAL</div>
        </div>

        {{-- @foreach () --}}
        <div class="justify-between font-anek spacing-2 flex-col flex lg:flex-row text-white border-b border-[#222] flex-grow p-20 items-center tracking-[0.2em]">
            <div class="justify-self-start flex flex-col lg:flex-row items-center xl:w-3/5 w-2/5 mb-20 lg:mb-0">
                <a class="mb-15 lg:mb-0 inline-block" href="product.html"><img src="../images/products_dummy/1.jpeg" alt="Image 1" width="100"></a>
                <div class="mx-20">
                    <a href="product.html" class=" text-lg mb-0 lg:mb-8 inline-block"><h4>Title 1</h4></a>
                    <div class="text-sm">Size: M</div>
                </div>
            </div>
            <div class="xl:w-1/10 w-1/5 flex-1 text-center mb-20 lg:mb-0">$20.00</div>
            <div class="lg:w-1/10 flex-1 text-center mb-20 lg:mb-0 lg:flex justify-center">
                <span class="text-xs font-medium font-anek lg:hidden">QUANTITY</span>
                <div class="wrapper mb-0 justify-self-center">
                    <h3 class="input-button remove">-</h3>
                    <input type="number" value="1" name="quantity" id="quantity">
                    <h3 class="input-button add">+</h3>
                </div>
            </div>
            <div class="xl:w-1/10 w-1/5 flex-1 text-center mb-20 lg:mb-0">
                <div class="text-xs font-medium font-anek lg:hidden block text-red-500 hover:text-red-900 cursor-pointer">REMOVE</div>
                <div class="hidden lg:block">
                    <i class="far fa-trash-alt text-lg w-1/10 flex-1 text-center hover:text-red-500 hover:cursor-pointer"></i>
                </div>
            </div>
            <div class="lg:w-1/10 flex-1 text-end">$20.00</div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>
@endsection