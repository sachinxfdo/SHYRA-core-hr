<?php

namespace CoreHR;

use Illuminate\Support\ServiceProvider;

class CoreHRServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'core-hr');
    }

    public function register()
    {
        //
    }
}
