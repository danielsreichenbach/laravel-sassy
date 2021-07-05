<?php

namespace Kogito\Sassy;

use Illuminate\Support\ServiceProvider;
use Recurly\Client;
use Recurly\Logger;

class SassyServiceProvider extends ServiceProvider
{
    /**
     * Bootstraps any package services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->configure();
    }

    /**
     * Setup the configuration for Sassy.
     *
     * @return void
     */
    protected function configure()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sassy.php',
            'sassy'
        );
    }

    /**
     * Register the package resources.
     *
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sassy');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sassy.php' => $this->app->configPath('sassy.php'),
            ], 'sassy-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => $this->app->resourcePath('views/vendor/sassy'),
            ], 'sassy-views');
        }
    }
}
