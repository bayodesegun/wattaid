<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Post;

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

        $day = strtoupper(date("l"));

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
            $location_in_ucase = strtoupper($location);
            $precise_location = explode(" ", $location_in_ucase)[0];
            $hr0 = DB::select("SELECT hour0 FROM powerplans WHERE location = '$precise_location $day'");
            $hr1 = DB::select("SELECT hour1 FROM powerplans WHERE location = '$precise_location $day'");
            $hr2 = DB::select("SELECT hour2 FROM powerplans WHERE location = '$precise_location $day'");
            $hr3 = DB::select("SELECT hour3 FROM powerplans WHERE location = '$precise_location $day'");
            $hr4 = DB::select("SELECT hour4 FROM powerplans WHERE location = '$precise_location $day'");
            $hr5 = DB::select("SELECT hour5 FROM powerplans WHERE location = '$precise_location $day'");
            $hr6 = DB::select("SELECT hour6 FROM powerplans WHERE location = '$precise_location $day'");
            $hr7 = DB::select("SELECT hour7 FROM powerplans WHERE location = '$precise_location $day'");
            $hr8 = DB::select("SELECT hour8 FROM powerplans WHERE location = '$precise_location $day'");
            $hr9 = DB::select("SELECT hour9 FROM powerplans WHERE location = '$precise_location $day'");
            $hr10 = DB::select("SELECT hour10 FROM powerplans WHERE location = '$precise_location $day'");
            $hr11 = DB::select("SELECT hour11 FROM powerplans WHERE location = '$precise_location $day'");
            $hr12 = DB::select("SELECT hour12 FROM powerplans WHERE location = '$precise_location $day'");
            $hr13 = DB::select("SELECT hour13 FROM powerplans WHERE location = '$precise_location $day'");
            $hr14 = DB::select("SELECT hour14 FROM powerplans WHERE location = '$precise_location $day'");
            $hr15 = DB::select("SELECT hour15 FROM powerplans WHERE location = '$precise_location $day'");
            $hr16 = DB::select("SELECT hour16 FROM powerplans WHERE location = '$precise_location $day'");
            $hr17 = DB::select("SELECT hour17 FROM powerplans WHERE location = '$precise_location $day'");
            $hr18 = DB::select("SELECT hour18 FROM powerplans WHERE location = '$precise_location $day'");
            $hr19 = DB::select("SELECT hour19 FROM powerplans WHERE location = '$precise_location $day'");
            $hr20 = DB::select("SELECT hour20 FROM powerplans WHERE location = '$precise_location $day'");
            $hr21 = DB::select("SELECT hour21 FROM powerplans WHERE location = '$precise_location $day'");
            $hr22 = DB::select("SELECT hour22 FROM powerplans WHERE location = '$precise_location $day'");
            $hr23 = DB::select("SELECT hour23 FROM powerplans WHERE location = '$precise_location $day'");
        }

        return view('home',
            [
                'message' => $message,
                'location' => $location,
                'user' => $user,
                'posts' => $posts,
                'hr0' => $hr0,
                'hr1' => $hr1,
                'hr2' => $hr2,
                'hr3' => $hr3,
                'hr4' => $hr4,
                'hr5' => $hr5,
                'hr6' => $hr6,
                'hr7' => $hr7,
                'hr8' => $hr8,
                'hr9' => $hr9,
                'hr10' => $hr10,
                'hr11' => $hr11,
                'hr12' => $hr12,
                'hr13' => $hr13,
                'hr14' => $hr14,
                'hr15' => $hr15,
                'hr16' => $hr16,
                'hr17' => $hr17,
                'hr18' => $hr18,
                'hr19' => $hr19,
                'hr20' => $hr20,
                'hr21' => $hr21,
                'hr22' => $hr22,
                'hr23' => $hr23
                
            ]);
    }
}
