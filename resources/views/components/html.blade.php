<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/app.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    @stack('styles')

    <title>Southend</title>
</head>
<body>
    <div id="overlay">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>

    <x-navigation-mobile class="block md:hidden"/>

    <script src="../../js/app.js"></script>

    @stack('scripts')

</body>
</html>