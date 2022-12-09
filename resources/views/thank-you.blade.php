@extends('layouts.app')

@section('content')
<div class="bg-[#222] py-35 px-20">
    <div class="container mx-auto font-anek tracking-[0.2em] text-white py-80 px-20 flex flex-col items-center justify-center bg-black">
        <div class="p-20 md:text-[40px] text-3xl font-bold">THANK YOU!</div>
        <div class="p-20 md:text-xl text-lg">The order No {{ $order_number }} has been placed!</div>
        <a href="{{ route('home') }}" class="border border-white text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline hover:border-[#e94c34]">
            RETURN TO HOMEPAGE
        </a>
    </div>
</div>
@endsection