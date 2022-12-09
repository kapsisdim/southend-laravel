<nav class="relative" x-data="">
    <div class="container flex text-white" id="navbar-mobile">
        <div class="w-[60%] pr-10">
            <li class="flex justify-between items-baseline mb-20 text-white">
                <h3 class="text-xl">MENU</h3>
                <i id="close" class="fas fa-times text-xl p-20"
                    x-on:click="document.getElementById('overlay').classList.remove('sidebar');
                        document.getElementById('navbar-mobile').setAttribute('class', 'slide-out');
                        document.body.classList.remove('no-scroll');">
                </i>
            </li>
            <li class="py-10 text-white"><a href="/shop">SHOP</a></li>
            <li class="py-10 text-white"><a href="/collections">COLLECTIONS</a></li>
            @foreach ($mainMenuItems as $item)
                <li class="py-10 text-white"><a href="{{ $item->link }}">{{ $item->title }}</a></li>
            @endforeach
        </div>
    </div>
</nav>
