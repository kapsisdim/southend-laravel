@extends('layouts.app')

@push('styles')
<link href="../css/app.css" rel="stylesheet" />
<link href="../css/carousel.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/css/splide.min.css">
@endpush

@section('content')
<section class="bg-[#222] py-35 px-20">
    <div class="container bg-black text-white mx-auto px-20 pb-50 md:pb-30">
        <div class="text-center lg:mb-40 mb-30 pt-40 font-anek tracking-[0.2em]">
            <h1 class="text-2xl mb-10 font-semibold">TITLE 1</h1>
            <div class="price">$20.00</div>
        </div>
        <div class="flex md:flex-row flex-col w-full">
            <div class="md:w-1/2 w-full">
                <section id="main-carousel" class="splide mb-20" aria-label="Beautiful Images">
                    <div class="splide__track">
                        <div class="splide__list">
                            <li class="splide__slide">
                                <img src="../images/products_dummy/1.jpeg" alt="image1" >
                            </li>
                            <li class="splide__slide">
                                <img src="../images/products_dummy/2.jpeg" alt="image2" >
                            </li>
                            <li class="splide__slide">
                                <img src="../images/products_dummy/3.jpeg" alt="image3" >
                            </li>
                            <li class="splide__slide">
                                <img src="../images/products_dummy/2.jpeg" alt="image2" >
                            </li>
                        </div>
                    </div>
                </section>
                <section id="thumbnail-carousel" class="splide" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                    <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="../images/products_dummy/1.jpeg" alt="image1" >
                                </li>
                                <li class="splide__slide">
                                    <img src="../images/products_dummy/2.jpeg" alt="image2" >
                                </li>
                                <li class="splide__slide">
                                    <img src="../images/products_dummy/3.jpeg" alt="image3" >
                                </li>
                                <li class="splide__slide">
                                    <img src="../images/products_dummy/2.jpeg" alt="image2" >
                                </li>
                            </ul>
                    </div>
                </section>
            </div>

            <div class="md:ml-30 mt-30 md:mt-0">
                <div class="font-anek">
                    <p class="text-justify font-anek mt-0 mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quaerat doloribus nesciunt amet, laboriosam vero deleniti cum dolorem similique cupiditate ipsa totam pariatur voluptatum fuga harum asperiores qui. Facilis, quam.</p>
                    <form action="" id="cart-form">
                        <h3 class="mt-0 text-lg font-anek mb-8">Select Size</h3>
                        <div class="selector w-full">
                            <div class="selecotr-item w-40">
                                <input type="radio" name="size" id="S" value="S" class="selector-item-radio">
                                <label class="selector-item-label" for="S">S</label>
                            </div>
                            <div class="selecotr-item w-40">
                                <input type="radio" name="size" id="M" class="selector-item-radio" value="M">
                                <label class="selector-item-label" for="M">M</label>
                            </div>
                            <div class="selecotr-item w-40">
                                <input type="radio" name="size" id="L" class="selector-item-radio"value="L">
                                <label class="selector-item-label" for="L">L</label>
                            </div>
                            <div class="selecotr-item w-40">
                                <input type="radio" name="size" id="XL" class="selector-item-radio"value="XL">
                                <label class="selector-item-label" for="XL">XL</label>
                            </div>
                        </div>
                        <h3 class="text-lg mb-8">Quantity</h3>
                        <div class="wrapper">
                            <h3 class="input-button remove">-</h3>
                            <input type="number" value="1" name="quantity" id="quantity">
                            <h3 class="input-button add">+</h3>
                        </div>
                        <button class="btn-add-to-cart"><span>Add to cart</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="../js/carousel.js"></script>
<script src="../js/cart-form.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/js/splide.min.js"></script>
@endpush
