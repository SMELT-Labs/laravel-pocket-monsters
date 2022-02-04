<?php

namespace SmeltLabs\PocketMonsters;

use Illuminate\Routing\RouteCollection;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use SmeltLabs\PocketMonsters\Facades\PokeAPI;

class PocketMonsterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PokeAPI::class, function ($app) {
            return new DataFetcher();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
