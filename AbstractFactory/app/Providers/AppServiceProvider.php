<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\AbstractFactory\WebService\WebService;
use App\AbstractFactory\RestService\RestService;

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
        $this->app->bind('App\AbstractFactory\AbstractFactory', function($app) {
            return new RestService();
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
