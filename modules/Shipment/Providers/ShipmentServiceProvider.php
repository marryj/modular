<?php

namespace Modules\Shipment\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Shipment\Providers\RouteServiceProvider;

class ShipmentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__.'/../config.php', 'shipment');

        $this->app->register(RouteServiceProvider::class);

    }
}
