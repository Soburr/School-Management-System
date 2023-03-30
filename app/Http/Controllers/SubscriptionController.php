<?php

namespace App\Http\Controllers;

use App\Mail\NewContactAvailable;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe (Request $request) {

        $email = $request->input('email');

        $validatedData = $request->validate([
            'email' => 'required|email|unique:subscriptions,email'
        ]);

        $email = $validatedData['email'];

        $subscriber = new Subscription();
        $subscriber->email = $email;
        $subscriber->save();

        Mail::to($email)->send(new NewContactAvailable());

        return redirect()->back()->with('success', 'You have successfully subscribed to our latest newsletter');
    }

}
