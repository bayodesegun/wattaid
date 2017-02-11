<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;

class FooterController extends Controller
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
        // Variable to determine is user is logged in or not
        $user = null;

        // The posts to show, if any
        $recent_posts = Post::where('type', 'p')->orderBy('created_at', 'desc')->limit(4);

        // Handle setting of location...
        if ($loc = $request->input('location')) {
            session(['location' => $loc ]);
        }

        // Fetch the 'location' session variable to customize user experience
        $location = session('location', 'unknown');

        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user()->name;
        }        

        return view('welcome.footer', ['location' => $location, 'user' => $user, 'recent_posts' => $recent_posts]);
    }
}