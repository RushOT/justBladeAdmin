<?php

namespace RushOT\justBladeAdmin\Providers;

use Illuminate\Support\ServiceProvider;

class justBladeAdminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing the views.
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views'),
        ]);

        // Publishing assets.
        $this->publishes([
            __DIR__ . '/../resources/images' => public_path('images'),
        ]);

        // Publishing assets.
        $this->publishes([
            __DIR__ . '/../resources/js' => public_path('js'),
        ]);


        // Controller.
        $this->publishes([
            __DIR__ . '/../Http/Controllers/Dashboard' => app_path('Http/Controllers/Dashboard'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['justbladeadmin'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {

        // Publishing the views.
        $this->publishes([
            $this->getPath('resources/views') => resource_path('views'),
        ], 'views');

        // Publishing assets.
        $this->publishes([
            $this->getPath('resources/images') => public_path('images'),
        ], 'justbladeadmin.views');

        // Publishing assets.
        $this->publishes([
            $this->getPath('resources/js') => public_path('js'),
        ], 'justbladeadmin.views');


        // Controller.
        $this->publishes([
            __DIR__ . '/../Http/Controllers/Dashboard' => app_path('Http/Controllers/Dashboard'),
        ], 'justbladeadmin.views');

    }

}
