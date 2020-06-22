<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use \App\Post;
use \App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $header = DB::table('page')->where('alias', 'header')->first();
        $about = DB::table('page')->where('alias', 'about_me')->first();

        $last_posts = Post::orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::all();

        View::share('header', $header);
        View::share('about', $about);
        View::share('last_posts', $last_posts);
        View::share('categories', $categories);

    }
}
