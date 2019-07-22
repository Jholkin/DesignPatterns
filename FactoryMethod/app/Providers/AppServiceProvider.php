<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FactoryMethod\Implement\MysqlDBAdapter;
use App\FactoryMethod\Implement\PostgresqlDBAdapter;

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
        $this->app->bind('App\FactoryMethod\Implement\AdapterDB', function($app) {
            return new PostgresqlDBAdapter();
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
