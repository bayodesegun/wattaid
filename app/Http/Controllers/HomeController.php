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
    public function index(Request $request)
    {
        // Handle setting of location...
        if ($loc = $request->input('location')) {
            session(['location' => $loc ]);
        }

        // Fetch the 'location' session variable to customize user experience
        $location = session('location', 'unknown');

        // Default message for users not logged in
        $message = 'Welcome Guest, you are not logged in. To post or comment, please <a href="/login">Login</a> or <a href="/register">Register</a>.';

        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user()->name;
            $message = "Welcome $user, your are logged in.";

            // TODO: 'remember' user location from profile
            // $location = Auth::user()->location;
        }
        return view('home', ['message' => $message, 'location' => $location]);
    }
}
