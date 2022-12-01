@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">ALL</div>
    <div class="m-auto container flex justify-between">
        <div class="hidden lg:block font-anek tracking-[0.2em] pt-30 bg-black w-[20%] mr-10 flex-wrap text-white">
            <div class="text-lg ml-20 mb-30">Categories</div>
            @foreach ($categories as $category)
                <a href="/shop/{{ $category->slug }}"><div class="text-base my-10 px-40">{{ $category->title }}</div></a>
            @endforeach
        </div>
        <div class="bg-black w-full lg:w-[80%] container flex justify-center flex-wrap">
            @foreach ($products as $product)
                <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="/shop/{{ $product->category->slug }}/{{ $product->slug }}">
                    <img src="{{ $product->list_image->image }}" alt="{{ $product->title }}">
                    <div class="des">
                        <h5>{{ $product->title }}</h5>
                        <h4 class="text-white">{{ $product->price }}</h4>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
