<?php

namespace ReneRoscher\MenuBuilder;

use Illuminate\Support\ServiceProvider;

class MenuBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'menu-builder');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('menu-builder', function () {
            return new MenuBuilder;
        });
    }
}
