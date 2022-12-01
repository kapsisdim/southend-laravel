<footer class="font-anek text-white pt-40 px-20">
    <div class="container mx-auto">
        <div class="md:flex justify-between block font-bold items-center">
            <h3 class="text-center text-xl">{{$frontPage->title}}</h3>
            <div class="flex justify-center text-[40px]">
                @foreach ($socials as $social)
                    <a href="{{$social->link}}" target="_blank"><i class="{{$social->icon}} p-6"></i></a>
                @endforeach
            </div>
        </div>
        <div class="text-center md:text-start">{{$info->address}}</div>
        <div class="text-center md:text-start">{{$info->city}}</div>
        <div class="flex justify-between flex-col-reverse md:flex-row items-center mt-40">
            <h6 class="font-anek text-xs font-bold">@ SOUTHEND APPAREL {{ date('Y') }}</h6>
            <ul class="flex text-base md:text-xs mb-40 md:mb-0">
                @foreach ($menuItems as $menuItem)
                    <li><a class="px-10" href="{{$menuItem->link}}">{{$menuItem->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
