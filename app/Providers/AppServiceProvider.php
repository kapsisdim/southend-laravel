<?php

namespace App\Providers;
use App\Models\Social;
use App\Models\MenuItem;
use App\Models\Info;
use App\Models\Category;
use App\Models\Collection;
use App\Models\FrontPage;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $socials = Social::orderBy('lft', 'asc')->get();
        $menuItems = MenuItem::orderBy('lft', 'asc')->get();
        $mainMenuItems = MenuItem::orderBy('lft', 'asc')->where('main_menu', 1)->get();
        $info = Info::first();
        $categories = Category::orderBy('lft', 'asc')->get();
        $collections = Collection::orderBy('lft', 'asc')->get();
        $frontPage = FrontPage::first();

        view()->share('socials', $socials);
        view()->share('menuItems', $menuItems);
        view()->share('mainMenuItems', $mainMenuItems);
        view()->share('info', $info);
        view()->share('categories', $categories);
        view()->share('collections', $collections);
        view()->share('frontPage', $frontPage);
    }
}
