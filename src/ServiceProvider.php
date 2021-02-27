<?php

namespace Kict\FpxMultimediaComponentsLaravel;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

use Illuminate\Support\Facades\Blade;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        # Views.
        $this->loadViewsFrom(__DIR__ .'/resources/views', 'kict/fpx_multimedia_components_laravel/views');

        Blade::componentNamespace('Kict\\FpxMultimediaComponentsLaravel\\App\\View\\Components', 'kict-fpx_multimedia_components_laravel');
    }
}
