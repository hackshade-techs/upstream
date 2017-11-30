<?php

namespace App\Http\Controllers;

use App\Mail\Contact as ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;
use App\Http\Requests\ContactRequest;
use Mail;

class ContactController extends Controller
{
    /**
     * Create a new ContactController instance.
     *
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }


    /**
     * Store a newly created contact in storage.
     *
     * @param  ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contact::create ($request->all());
        $this->sendMail($request->all());
        return back()->withSuccess('Your message has been submited successfully, we will respond as soon as possible.');
    }

    public function sendMail($feedback = null)
    {
        $user = ['matovuronald997@gmail.com'];
        Mail::to($user)->send(new ContactMail($feedback));

    }
}
