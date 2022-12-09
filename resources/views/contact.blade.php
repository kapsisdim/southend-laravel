@extends('layouts.app')

@section('content')

<div class="bg-[#222] py-35 px-20 md:h-[70vh]">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">{{ $contact->title }}</div>
    <div class="flex gap-20 flex-col lg:flex-row container mx-auto">
        <div class="bg-black lg:w-1/2 w-full text-white flex items-center justify-center container">
            <h3 class="p-20 font-anek tracking-wider leading-snug">{!! $contact->body !!}</h3>
        </div>
        <form class="container text-white font-anek tracking-[0.2em] order-last lg:order-1 lg:w-1/2 w-full" method="post" action="{{url('/contact')}}">
            @csrf
            @honeypot
            <div class="bg-black px-20 py-30 w-full text-black">
                @if($errors->customErrors->all() || $errors->customSuccesses->all() || $errors->all())
                    <div class="alert" id="errors-list">
                        <ul>
                            @foreach ($errors->customErrors->all() as $customError)
                                <li class="alert-danger"><span class="alert-icon alert-icon--danger"></span><span>{!! $customError !!}</span></li>
                            @endforeach
                            @foreach ($errors->customSuccesses->all() as $customSuccess)
                                <li class="alert-success"><span class="alert-icon"></span><span>{!! $customSuccess !!}</span></li>
                            @endforeach
                            @foreach ($errors->all() as $error)
                                <li class="alert-danger"><span class="alert-icon alert-icon--danger"></span><span>{{ $error }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-20">
                    <label for="first-name" class="sr-only">{{ __('First name') }}</label>
                    <input type="text" name="firstname" id="first_name" autocomplete="given-name" required
                        class="block text-black w-full shadow-sm py-4 px-12 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md placeholder:font-anek placeholder:tracking-[0.2em]" placeholder="{{ __('First name') }}">
                </div>
                <div class="mb-20">
                    <label for="last-name" class="sr-only">{{ __('Last name') }}</label>
                    <input type="text" name="lastname" id="last_name" autocomplete="family-name" required
                        class="block text-black w-full shadow-sm py-4 px-12 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md placeholder:font-anek placeholder:tracking-[0.2em]" placeholder="{{ __('Last name') }}">
                </div>
                <div class="mb-20">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="block text-black w-full shadow-sm py-4 px-12 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md placeholder:font-anek placeholder:tracking-[0.2em]" placeholder="Email">
                </div>
                <div>
                    <label for="message" class="sr-only">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="block w-full shadow-sm py-4 px-12 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border border-gray-300 rounded-md placeholder:font-anek placeholder:tracking-[0.2em]"
                        placeholder="Message"></textarea>
                </div>
                <input type="submit" value="SUBMIT" class="submit-btn">
            </div>
        </form>
    </div>
</div>
@endsection