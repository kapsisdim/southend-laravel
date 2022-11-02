<?php

namespace App\Http\Controllers;

use App\Models\Social;

class HomePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $socials = Social::orderBy('lft', 'asc')->get();
        return view('index', [
        ]);
    }
}
