<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/', 'App\Http\Controllers\PostController@post');

Route::get('/dashboard', 'App\Http\Controllers\PortalController@dashboard')->middleware(['auth:web'])->name('dashboard');

Route::get('/dashboard', 'App\Http\Controllers\PortalController@index')->middleware(['auth:web'])->name('portal');

Route::get('/logout', 'App\Http\Controllers\PortalController@logout');

Route::get('/contact', 'App\Http\Controllers\ContactController@sendContactForm')->name('contact.form');

Route::get('/subscribe', 'App\Http\Controllers\SubscriptionController@subscribe')->name('subscribe');

Route::get('/sign-up', 'App\Http\Controllers\RegistrationController@showRegistrationForm')->name('sign-up');

Route::post('/sign-up', 'App\Http\Controllers\RegistrationController@register');

Route::get('/login', 'App\Http\Controllers\RegistrationController@showLoginForm')->name('login');

Route::post('/login', 'App\Http\Controllers\RegistrationController@login');

// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

// Route::post('/login', 'Auth\LoginController@login')->name('login');







// require __DIR__.'/auth.php';
