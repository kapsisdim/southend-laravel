<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\MenuItem;
use App\Models\FrontPage;
use App\Models\Info;
use App\Models\Category;

class HomePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $socials = Social::orderBy('lft', 'asc')->get();
        $menuItems = MenuItem::orderBy('lft', 'asc')->get();
        $mainMenuItems = MenuItem::orderBy('lft', 'asc')->where('main_menu', 1)->get();
        $frontPage = FrontPage::first();
        $info = Info::first();
        $categories = Category::get();

        return view('index', [
            'socials' => $socials,
            'frontPage' => $frontPage,
            'menuItems' => $menuItems,
            'mainMenuItems' => $mainMenuItems,
            'info' => $info,
            'categories' => $categories,

        ]);
    }
}
