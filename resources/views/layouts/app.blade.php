<x-html>

    @section('header')
    <x-header :front-page="$frontPage" :socials="$socials" :menu-items="$menuItems" :main-menu-items="$mainMenuItems" :info="$info" :categories="$categories" />
    @endsection
    @yield('content')

    @section('footer')
    <x-footer :front-page="$frontPage" :socials="$socials" :menu-items="$menuItems" :main-menu-items="$mainMenuItems" :info="$info" :categories="$categories" />
    @endsection

</x-html>
