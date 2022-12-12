<?php

namespace App\Http\Controllers;

class HomePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $meta['title'] = 'Southend Apparel';
        $meta['description'] = 'Southend Apparel is the best street clothing brand based in Athens';
        $meta['image'] = '/storage/images/home.png';
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 1;
        view()->share('meta', $meta);

        return view('index', [
        ]);
    }
}
