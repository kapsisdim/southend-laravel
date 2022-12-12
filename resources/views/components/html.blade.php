<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    @stack('styles')

    <title>{{ $meta['title'] }}</title>
    <meta name="description" content="{{ $meta['description'] }}" />
    <meta property="og:site_name" content="Southend Apparel" />
    @if ($meta['isForntPage'])
        <meta property="og:type" content="front page" />
    @endif
    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:title" content="{{ $meta['title'] }}" />
    <meta property="og:description" content="{{ $meta['description'] }}" />
    <meta property="og:image" content="{{ $meta['image'] }}" />
    <meta name="twitter:description" content="{{ $meta['description'] }}" />
    <meta name="twitter:title" content="{{ $meta['title'] }}" />
    <meta name="twitter:url" content="{{ $meta['url'] }}" />
    <meta name="twitter:image" content="{{ $meta['image'] }}" />
</head>
<body>
    <x-navigation-mobile class="block md:hidden"/>
    <div id="overlay">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')

</body>
</html>
