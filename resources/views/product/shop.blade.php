@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">ALL</div>
    <div class="m-auto container flex justify-between">
        <div class="hidden lg:block font-anek tracking-[0.2em] pt-30 bg-black w-[20%] mr-10 flex-wrap text-white">
            <div class="text-lg ml-20 mb-30">Categories</div>

            {{-- @foreach --}}
            <a href=""><div class="text-base my-10 px-40">Category 1</div></a>
            {{-- @endforeach --}}

            {{-- <a href=""><div class="text-base my-10 px-40">Category 2</div></a>
            <a href=""><div class="text-base my-10 px-40">Category 3</div></a>
            <a href=""><div class="text-base my-10 px-40">Category 4</div></a> --}}
        </div>

        <div class="bg-black w-full lg:w-[80%] container flex justify-center flex-wrap">

            {{-- @foreach --}}

            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/1.jpg" alt="">
                <div class="des">
                    <h5>Name 1</h5>
                    <h4 class="text-white">$20.00</h4>
                </div>
            </a>

            {{-- @endforeach --}}


            {{-- <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/2.jpeg" alt="">
                <div class="des">
                    <h5>Name 2</h5>
                    <h4 class="text-white">$23.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/3.jpeg" alt="">
                <div class="des">
                    <h5>Name 3</h5>
                    <h4 class="text-white">$12.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/4.jpeg" alt="">
                <div class="des">
                    <h5>Name 4</h5>
                    <h4 class="text-white">$25.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/5.jpeg" alt="">
                <div class="des">
                    <h5>Name 5</h5>
                    <h4 class="text-white">$25.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/6.jpeg" alt="">
                <div class="des">
                    <h5>Name 6</h5>
                    <h4 class="text-white">$18.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/3.jpeg" alt="">
                <div class="des">
                    <h5>Name 7</h5>
                    <h4 class="text-white">$42.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/5.jpeg" alt="">
                <div class="des">
                    <h5>Name 8</h5>
                    <h4 class="text-white">$20.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/2.jpeg" alt="">
                <div class="des">
                    <h5>Name 9</h5>
                    <h4 class="text-white">$50.00</h4>
                </div>
            </a>
            <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="product.html">
                <img src="../images/products_dummy/1.jpeg" alt="">
                <div class="des">
                    <h5>Name 10</h5>
                    <h4 class="text-white">$24.00</h4>
                </div>
            </a> --}}
        </div>
    </div>
</div>
@endsection
