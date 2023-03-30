<?php

namespace App\Http\Controllers;

use App\Mail\LatestNews;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LatestNewsController extends Controller
{
    public function sendMail () {
       $subscribers = Subscription::all();

       foreach ($subscribers as $subscriber) {
            Mail::to($subscribers->email)->send(new LatestNews($subscribers));
       }

    }
}
