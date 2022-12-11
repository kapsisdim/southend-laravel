@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">Collections</div>
    <div class="m-auto container flex justify-between">
        <div class="bg-black w-full lg:w-[80%] container flex justify-center flex-wrap">
            @foreach ($collections as $collection)
                <a class="w-full sm:w-1/2 md:w-1/3 lg:1/4 min-w-[175px] cursor-pointer product-listing text-white" href="/collections/{{ $collection->slug }}">
                    <img src="{{ $collection->getImage->image }}" alt="{{ $collection->title }}">
                    <div class="des">
                        <h5>{{ $collection->title }}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
