<?php

namespace crocodicstudio\crudbooster\ApiGeneratorModule;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class CbApiGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->addNamespace('CbApiGen', __DIR__.'/views');
        require __DIR__.'/api_generator_routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
