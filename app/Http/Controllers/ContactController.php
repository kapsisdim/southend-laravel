<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contact = ContactPage::first();

        return view('contact', [
            'contact' => $contact,
        ]);
    }
}
