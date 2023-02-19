<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\contactMail;


class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot () {
        parent::boot();

        static::created(function ($item) {
            $adminEmail = "adebesinnewton09@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }

}
