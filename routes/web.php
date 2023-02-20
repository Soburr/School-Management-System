<?php


use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/', 'App\Http\Controllers\PostController@post');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->middleware(['auth'])->name('dashboard');

Route::get('/logout', 'App\Http\Controllers\DashboardController@logout');

Route::get('/contact', 'App\Http\Controllers\ContactController@create');

Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact.store');







require __DIR__.'/auth.php';