<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Enable HTTPS only in production and not local development
        if ($this->app->environment("production") && !app()->isLocal()) {
            $this->app["request"]->server->set("HTTPS", true);
        }
    }
}
