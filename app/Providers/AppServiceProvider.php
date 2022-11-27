<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        /**
         * Load the ide-helper service provider only in non production environments.
         */
        if (config('ide-helper.enabled')) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
