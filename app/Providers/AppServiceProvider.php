<?php

namespace TechZadeh\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TechZadeh\Category;
use TechZadeh\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Popular posts
        $popular_posts = Post::where('created_at', '>=', Carbon::now()  ->addHours(4)
                                                                        ->subDay())
                                                                        ->orderBy('view_count', 'desc')
                                                                        ->take(5)
                                                                        ->get();

        // Categories list
        $categories = Category::orderBy('name', 'asc')->get();

        View::share('categories', $categories);
        View::share('popular_posts', $popular_posts);
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
