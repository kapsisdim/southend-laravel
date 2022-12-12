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

        $meta['title'] = 'About us | Southend Apparel';
        $meta['description'] = $about->subtitle;
        $meta['image'] = $about->image;
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 0;
        view()->share('meta', $meta);

        return view('about', [
                'about' => $about,
        ]);
    }
}
