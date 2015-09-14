<?php

namespace Noylecorp\Url;

use Illuminate\Support\ServiceProvider;

class ManagerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/urlmgr.php' => config_path('urlmgr.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('urlmgr', function($app) {
            return new Manager($app['config']['urlmgr.urls']);
        });
    }
}