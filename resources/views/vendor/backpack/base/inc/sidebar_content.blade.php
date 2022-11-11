{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('menu-items') }}"><i class="la la-bars"></i></i> Menu</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('front-page') }}"><i class="la la-home"></i></i> Fornt Page</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('categories') }}"><i class="la la-sitemap nav-icon"></i> Categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('collections') }}"><i class="la la-sitemap nav-icon"></i> Collections</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cubes"></i> Products</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href="{{ backpack_url('products') }}"><i class='nav-icon la la-cube'></i> Product List</a></li>
        <li class='nav-item'><a class='nav-link' href="{{ backpack_url('product-sizes') }}"><i class='nav-icon la la-cube'></i> Product Sizes</a></li>
    </ul>
</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('shipping') }}"><i class="la la-truck"></i></i> Shipping</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('coupons') }}"><i class="la la-table"></i></i> Coupons</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('info') }}"><i class="la la-info"></i></i> Info</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('socials') }}"><i class="la la-share"></i></i> Social</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('about') }}"><i class="la la-info-circle"></i></i> About Page</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('terms') }}"><i class="la la-file-text"></i></i> Legal Terms</a></li>
