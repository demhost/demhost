<?php namespace Deminua\SafeNote;

use Illuminate\Support\ServiceProvider as LServiceProvider;

class ServiceProvider extends LServiceProvider {

    public function boot()
    {
        // Routing
        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/routes/web.php';
        }

        //Указывам где искать вью и какой неймспейс им задать
        $this->loadViewsFrom(__DIR__.'/resources/views', 'safenote');

    }

    public function register()
    {

    }

}