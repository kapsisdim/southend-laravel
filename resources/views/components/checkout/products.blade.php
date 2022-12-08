<div class="bg-[#222] py-35 px-20" x-data="cart" id="cart-products">
    <div class="font-anek tracking-[0.2em] font-bold text-[25px] pb-25 m-auto container text-white">SHOPPING CART</div>
    <div class="m-auto container bg-black">
        @if (count($items))
        <div class="justify-between font-anek spacing-2 hidden lg:flex text-white border-b border-[#222] flex-grow p-20 tracking-[0.2em]">
            <div class="xl:w-3/5 w-2/5">PRODUCT</div>
            <div class="xl:w-1/10 w-1/5 flex-1 text-center">PRICE</div>
            <div class="lg:w-1/10 flex-1 text-center">QUANTITY</div>
            <div class="xl:w-1/10 flex-1 text-center">REMOVE</div>
            <div class="lg:w-1/10 w-1/5 flex-1 text-end">TOTAL</div>
        </div>
        @endif


        @forelse ($items as $index => $item)
        <div class="justify-between font-anek spacing-2 flex-col flex lg:flex-row text-white border-b border-[#222] flex-grow p-20 items-center tracking-[0.2em]">
            <div class="justify-self-start flex flex-col lg:flex-row items-center xl:w-3/5 w-2/5 mb-20 lg:mb-0">
                <a class="mb-15 lg:mb-0 inline-block" href="product.html"><img src="{{ $item['product']->list_image->image }}" alt="{{ $item['product']->title }}" width="100"></a>
                <div class="mx-20">
                    <a href="product.html" class=" text-lg mb-0 lg:mb-8 inline-block"><h4>{{ $item['product']->title }}</h4></a>
                    <div class="text-sm">Size: {{ $item['size'] }}</div>
                </div>
            </div>
            <div class="xl:w-1/10 w-1/5 flex-1 text-center mb-20 lg:mb-0">{{ $item['product']->price }} &#8364;</div>
            <div class="lg:w-1/10 flex-1 text-center mb-20 lg:mb-0 lg:flex justify-center">
                <span class="text-xs font-medium font-anek lg:hidden">QUANTITY</span>
                <div class="wrapper mb-0 justify-self-center">
                    <div x-on:click="update({{ $index }}, {{ $item['quantity'] - 1}})" class="input-button remove">-</div>
                    <input type="number" value="{{ $item['quantity'] }}" name="quantity" id="quantity">
                    <div x-on:click="update({{ $index }}, {{ $item['quantity'] + 1}})" class="input-button add">+</div>
                </div>
            </div>
            <div class="xl:w-1/10 w-1/5 flex-1 text-center mb-20 lg:mb-0">
                <div class="text-xs font-medium font-anek lg:hidden block text-red-500 hover:text-red-900 cursor-pointer">REMOVE</div>

                <div class="hidden lg:block" x-on:click="destroy({{ $index }})">
                    <i class="far fa-trash-alt text-lg w-1/10 flex-1 text-center hover:text-red-500 hover:cursor-pointer"></i>
                </div>
            </div>
            <div class="lg:w-1/10 flex-1 text-end">{{ $item['product']->price * $item['quantity']}} &#8364;</div>
        </div>

        @empty
        <div class="text-white p-40 text-center text-lg font-anek tracking-[0.2em]">Your cart is empty! Go grab some cool clothing and come back!</div>
        @endforelse
    </div>

    @if (count($items))
    <div class="flex justify-end container mx-auto font-anek tracking-[0.2em]">
        <div class="bg-black text-white mt-20 w-fit p-20 pt-[24px]">SUBTOTAL :</div>
        <div class="bg-black text-white mt-20 w-fit p-20 pt-[24px]">{{ $subtotal }} &#8364;</div>
    </div>
    @endif

    <div class="flex justify-between container mx-auto font-anek tracking-[0.2em]">
        <a href="/shop" class="bg-black text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline">
            <i class="fas fa-arrow-left mr-10"></i>
            BACK
        </a>
        <a href="{{ route('checkout') }}" class="bg-black text-white mt-20 w-fit p-20 pt-[24px] flex justify-center items-baseline {{ count($items) == 0 ? 'opacity-30  pointer-events-none' : ''}}">
            NEXT
            <i class="fas fa-arrow-right ml-10"></i>
        </a>
    </div>
</div>