<nav {{ $attributes->only('class')->merge(['class' => 'container h-auto p-10 pb-0 mx-auto items-center w-full text-white']) }}>
    <ul class="flex">
        {{-- @foreach ($categories as $category)
        <li><a href="">{{ $category->title }}</a></li>
        @endforeach --}}

        <li><a href="shop.html">SHOP</a>
            <ul class="dropdown">
                <li><a href="#">Sub-1</a></li>
                <li><a href="#">Sub-2</a></li>
                <li><a href="#">Sub-3</a></li>
            </ul>
        </li>
        <li><a href="collections.html">COLLECTIONS</a>
            <ul class="dropdown">
                <li><a href="#">Col-1</a></li>
                <li><a href="#">Col-2</a></li>
                <li><a href="#">Col-3</a></li>
            </ul></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </ul>
</nav>