<?php namespace Deminua\SafeNote;

use Illuminate\Support\ServiceProvider as LServiceProvider;

class ServiceProvider extends LServiceProvider {

    public function boot()
    {
        // Routing
        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/routes/web.php';
        }

    }

    public function register()
    {

    }

}