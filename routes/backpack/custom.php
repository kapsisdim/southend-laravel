<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('socials', 'SocialCrudController');
    Route::crud('menu-items', 'MenuItemCrudController');
    Route::crud('categories', 'CategoryCrudController');
    Route::crud('collections', 'CollectionCrudController');
    Route::crud('info', 'InfoCrudController');
    Route::crud('front-page', 'FrontPageCrudController');
    Route::crud('product-sizes', 'ProductSizeCrudController');
    Route::crud('products', 'ProductCrudController');
    Route::crud('terms', 'TermCrudController');
    Route::crud('about', 'AboutCrudController');
    Route::crud('coupons', 'CouponCrudController');
    Route::crud('shipping', 'ShippingCrudController');
    Route::crud('product-images', 'ProductImageCrudController');
    Route::crud('orders', 'OrderCrudController');
    Route::get('charts/categories', 'Charts\CategoriesChartController@response')->name('charts.categories.index');
    Route::get('charts/orders-pie', 'Charts\OrdersPieChartController@response')->name('charts.orders-pie.index');
    Route::get('charts/income', 'Charts\IncomeChartController@response')->name('charts.income.index');
    Route::crud('contact-page', 'ContactPageCrudController');
}); // this should be the absolute last line of this file