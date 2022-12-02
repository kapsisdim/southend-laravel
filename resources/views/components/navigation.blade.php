<nav {{ $attributes->only('class')->merge(['class' => 'container h-auto pb-0 mx-auto items-center w-full text-white justify-center']) }}>
    <ul class="flex -mx-15">
        <li><a href="/shop">SHOP</a>
            <ul class="dropdown">
                @foreach ($categories as $category)
                    <li><a href="/shop/{{ $category->slug }}">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </li>
        <li><div >COLLECTIONS</div>
            <ul class="dropdown">
                @foreach ($collections as $collection)
                    <li><a href="/collections/{{ $collection->slug }}">{{ $collection->title }}</a></li>
                @endforeach
            </ul></li>
        @foreach ($mainMenuItems as $item)
            <li><a href="{{ $item->link }}">{{ $item->title }}</a></li>
        @endforeach
    </ul>
</nav>
