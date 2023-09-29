<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }
    
    public function contact_us() {
        return view('contactUs');
    }

    public function send(Request $request) {

        $email = $request->input('email');
        $name = $request->input('name');
        $body = $request->input('body');

        $contactMail = new ContactMail($email, $name, $body);

        Mail::to('luca.ferrarini98@gmail.com')->send($contactMail);

        return redirect()
         ->route('contact')
         ->with('message', 'Email inviata con successo!');
    }


}
