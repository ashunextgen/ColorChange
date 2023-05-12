<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Theme;

use View;

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
        $themes = Theme::first();



        view()->share('themes',$themes);
    }
}
