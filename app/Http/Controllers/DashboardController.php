<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index () {
        return view('dashboard.index');
    }

    public function dashboard () {
        return view('dashboard');
    }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }

 }
