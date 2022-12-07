@extends('layouts.app')

@push('styles')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/carousel.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/css/splide.min.css">
@endpush

@section('content')
<section class="bg-[#222] py-35 px-20">
    <div class="container bg-black text-white mx-auto px-20 pb-50 md:pb-30">
        <div class="text-center lg:mb-40 mb-30 pt-40 font-anek tracking-[0.2em]">
            <h1 class="text-2xl mb-10 font-semibold">{{ $product->title }}</h1>
            <div class="price">{{ $product->price }} €</div>
        </div>
        <div class="flex md:flex-row flex-col w-full">
            <div class="md:w-1/2 w-full">
                <section id="main-carousel" class="splide mb-20" aria-label="Beautiful Images">
                    <div class="splide__track">
                        <div class="splide__list">
                            @foreach ($product->getImages as $image)
                                <li class="splide__slide">
                                    <img src="{{ $image->image }}" alt="{{ $image->title }}" >
                                </li>
                            @endforeach
                        </div>
                    </div>
                </section>
                <section id="thumbnail-carousel" class="splide" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($product->getImages as $image)
                                <li class="splide__slide">
                                    <img src="{{ $image->image }}" alt="{{ $image->title }}" >
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
            <div class="md:ml-30 mt-30 md:mt-0">
                <div class="font-anek">
                    <p class="text-justify font-anek mt-0 mb-30">{{ $product->descriptio }}</p>
                    <form action="" id="cart-form">
                        @csrf
                        @honeypot
                        <h3 class="mt-0 text-lg font-anek mb-8">Select Size</h3>
                        <div class="selector w-full">
                            @foreach ($product->sizes as $size)
                                <div class="selecotr-item w-40">
                                    <input type="radio" name="size" id="{{ $size->id }}" value="{{ $size->size }}" class="selector-item-radio">
                                    <label class="selector-item-label" for="{{ $size->size }}">{{ $size->size }}</label>
                                </div>
                            @endforeach
                        </div>
                        <h3 class="text-lg mb-8">Quantity</h3>
                        <div class="wrapper">
                            <h3 class="input-button remove">-</h3>
                            <input type="number" value="1" name="quantity" max="{{ $stock }}" id="quantity">
                            <h3 class="input-button add">+</h3>
                        </div>
                        <button type="submit" class="btn-add-to-cart"><span>Add to cart</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/carousel.js') }}"></script>
<script src="{{ asset('js/cart-form.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/js/splide.min.js"></script>
@endpush
