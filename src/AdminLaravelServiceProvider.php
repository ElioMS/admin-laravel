<?php

namespace Ems\AdminEms;

use Illuminate\Support\ServiceProvider;

class AdminLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/ems'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Controllers
        $this->app->make('Ems\AdminEms\controllers\AdminController');
        $this->loadViewsFrom(__DIR__.'/views', 'adminems');
    }
}
