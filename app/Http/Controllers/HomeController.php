<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Post;
use App\Powerplan;

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
        // Variable to determine is user is logged in or not
        $user = null;

        // The posts to show, if any
        $posts = null;

        // The power plan for the location in question
        $powerPlan = null;

        // Handle setting of location...
        if ($loc = $request->input('location')) {
            session(['location' => $loc ]);
        }

        // Fetch the 'location' session variable to customize user experience
        $location = session('location', 'unknown');

        // Default message for users not logged in
        $message = 'Welcome Guest, you are not logged in.';

        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user()->name;
            $message = "Welcome $user, your are logged in.";
            // TODO: 'remember' user location from profile
            // $location = Auth::user()->location;
        }

        if ($location != 'unknown') {
            $posts = Post::where('location', $location)->where('type', 'p')->orderBy('created_at', 'desc')->paginate(10);
            
            $locationName = explode(" ", strtoupper($location))[0];
            $day = substr(date('l'), 0, 3); // Sun, Mon, ..., Sat
            $month = date('Y-m-01');        // (currentYYYY-currentMM-01)

            $powerPlan = Powerplan::where([
                'month' => $month,
                'day' => $day,
                'location' => $locationName
                ])->first();
            
        }

        return view('home',
            [
                'message' => $message,
                'location' => $location,
                'user' => $user,
                'posts' => $posts,
                'powerPlan' => $powerPlan,
            ]);
    }
}
