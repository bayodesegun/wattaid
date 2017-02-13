<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Post;

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
        View::share('recent_posts', $recent_posts);
        View::share('featured_posts', $featured_posts);
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
