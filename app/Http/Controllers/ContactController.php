<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function sendContactForm (Request $request) {
          $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'number' => 'required|digits:11|numeric',
          'subject' => 'required',
          'message' => 'required',
        ]);

        $contact = new Contact([
           'name' => $validatedData['name'],
           'email' => $validatedData['email'],
           'number' => $validatedData['number'],
           'subject' => $validatedData['subject'],
           'message' => $validatedData['message'],
        ]);

        $contact->save();

        Mail::to('adebesinnewton99@mailtrap.io')->send(new ContactMail($validatedData));

        return redirect('/contact')->with('success', 'Your message has been sent!');
    }
}
