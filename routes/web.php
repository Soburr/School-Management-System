<?php


use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/', 'App\Http\Controllers\PostController@post');

Route::get('/dashboard', 'App\Http\Controllers\PortalController@dashboard')->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', 'App\Http\Controllers\PortalController@index')->middleware(['auth'])->name('portal');

Route::get('/logout', 'App\Http\Controllers\PortalController@logout');

Route::get('/contact', 'App\Http\Controllers\ContactController@sendContactForm')->name('contact.form');







require __DIR__.'/auth.php';
