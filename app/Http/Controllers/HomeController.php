<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
           
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Default message for users not logged in
        $message = 'Welcome Guest, you are not logged in. To post or comment, please <a href="/login">Login</a> or <a href="/register">Register</a>.';

        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user()->name;
            $message = "Welcome $user, your are logged in.";
        }
        return view('home', ['message' => $message]);
    }
}
