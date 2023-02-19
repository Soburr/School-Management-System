<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisteredUserController as BaseRegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpController extends BaseRegisteredUserController
{

    // public function signup (Request $request) {

    //      $validatedData = $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //      ]);

    //      $user = new User;
    //      $user->name = $validatedData['name'];
    //      $user->email = $validatedData['email'];
    //      $user->password = bcrypt($validatedData['password']);
    //      $user->save();

    //      return redirect('/dashboard');

    // }
}


