<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Flyweight\PlayItemFactory;

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
        $this->app->bind('App\Flyweight\PlayItemFactory', function($app)
        {
            return new PlayItemFactory();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
