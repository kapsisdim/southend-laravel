<header class="bg-black pt-15 px-20" x-data="">
    <div class="container flex h-auto py-10 mx-auto items-center w-full justify-between mb-16">
        <div class="block md:hidden self-center" id="mobile">
            <i id="bars" class="fa fa-bars text-white py-12 px-[13px] text-xl"
                x-on:click="document.getElementById('overlay').classList.add('sidebar');
                document.getElementById('navbar-mobile').setAttribute('class', 'slide-in');
                document.body.classList.add('no-scroll');">
            </i>
        </div>
        <a href="/">
            <img src="{{$frontPage->logo_image}}" alt="{{$frontPage->title}}" width="280" class="text-white lg:w-[280px] md:w-200 w-150">
        </a>
        <div class="text-white justify-self-end flex justify-center">
            <a ><i href="search.html" class="fas fa-search p-12 text-[20px]"></i></a>
            <a href="{{ route('cart') }}"><i class="fas fa-shopping-bag py-12 px-[14px] text-[20px]"></i></a>
        </div>
    </div>

    <x-navigation class="hidden md:block"/>
</header>
