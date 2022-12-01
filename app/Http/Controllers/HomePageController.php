<?php

namespace App\Http\Controllers;

use App\Models\FrontPage;
use App\Models\Category;

class HomePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $frontPage = FrontPage::first();
        $categories = Category::get();

        return view('index', [
            'frontPage' => $frontPage,
            'categories' => $categories,
        ]);
    }
}
