@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <h1 class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">{{ $about->title }}</h1>
    <div class="bg-black p-20 w-full container mx-auto text-white">
        <div class="mb-30 w-full">
            <img src="{{ $about->image }}" alt="{{ $about->title }}" width="1480">
        </div>
        <p class="tracking-wider md:text-lg text-justify leading-snug">{{ $about->body }}</p>
    </div>
</div>
@endsection
