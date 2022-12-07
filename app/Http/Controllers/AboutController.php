<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $about = About::first();

        return view('about', [
                'about' => $about,
        ]);
    }
}
