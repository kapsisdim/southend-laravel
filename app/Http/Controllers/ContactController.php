<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\ContactFormEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contact = ContactPage::first();

        $meta['title'] = 'Contact Us | Southend Apparel';
        $meta['description'] = $contact->subtitle;
        $meta['image'] = $contact->image;
        $meta['url'] = url()->current();
        $meta['isForntPage'] = 0;
        view()->share('meta', $meta);

        return view('contact', [
            'contact' => $contact,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'firstname' => 'required|min:2',
                'lastname' => 'required|min:2',
                'email' => 'required|email',
                'message' => 'required|min:2',
            ],
            [
                '*.required'    => 'Απαραίτητο πεδίο',
                '*.min'    => 'Μη έγκυρος αριθμός χαρακτήρων',
            ]
        );

        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }

        $messages = [
            'successes' => [],
            'errors' => [],
        ];

        if ($this->addFormEntry($request->firstname, $request->lastname, $request->email, $request->message)) {
            $messages['successes'][] = 'Your message has been sent. <br> Thank for contacting us!';
        }

        if ($messages['errors']) {
            return redirect()->to('/contact')
                ->withErrors($messages['errors'], 'customErrors')
                ->withErrors($messages['successes'], 'customSuccesses')
                ->withInput($request->input());
        } else {
            return redirect::back()->withErrors($messages['successes'], 'customSuccesses');
        }

    }

    /**
     * Add form entry to database.
     */
    public function addFormEntry($firstName, $lastName, $email, $message)
    {
        $form_entry = new ContactFormEntry();
        $form_entry->first_name = $firstName;
        $form_entry->last_name = $lastName;
        $form_entry->email = $email;
        $form_entry->message = $message;

        if ($form_entry->save()) {
            return true;
        } else {
            return false;
        }
    }
}
