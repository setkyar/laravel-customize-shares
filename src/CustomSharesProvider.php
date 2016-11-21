<?php

namespace SetKyar\CustomShares;

use Illuminate\Support\ServiceProvider;

class CustomSharesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'share');

        $this->publishes([
            __DIR__.'/config/shares-config.php' => config_path('shares-config.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/customize-share')
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
