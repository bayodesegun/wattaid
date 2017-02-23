<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Post;
use App\Powerplan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $recent_posts = Post::where('type', 'p')->orderBy('created_at', 'desc')->limit(5)->get();
        $featured_posts = Post::where('type', 'p')->orderBy('updated_at', 'desc')->limit(7)->get();

        $location = session('location', 'unknown');

        $locationName = explode(" ", strtoupper($location))[0];
            $day = substr(date('l'), 0, 3); // Sun, Mon, ..., Sat
            $month = date('Y-m-01');        // (currentYYYY-currentMM-01)

            $powerPlan = Powerplan::where([
                'month' => $month,
                'day' => $day,
                'location' => $locationName
                ])->first();

        View::share('recent_posts', $recent_posts);
        View::share('featured_posts', $featured_posts);
        View::share('powerPlan', $powerPlan);
        View::share('location', $location);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
