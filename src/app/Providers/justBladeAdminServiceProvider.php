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

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/justbladeadmin.php', 'justbladeadmin');
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

    private function getPath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
