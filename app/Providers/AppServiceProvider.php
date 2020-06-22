<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

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
        View::share('header', $header);
        View::share('about', $about);
    }
}
