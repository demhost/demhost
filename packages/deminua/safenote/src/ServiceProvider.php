<?php namespace Deminua\Safenote;

use Illuminate\Support\ServiceProvider as LServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ServiceProvider extends LServiceProvider {

    // protected $providers = [
    //     'Collective\Html\HtmlServiceProvider',
    // ];

    // protected $aliases = [
    //     'Form' => 'Collective\Html\FormFacade',
    //     'Html' => 'Collective\Html\HtmlFacade',
    // ];

    public function boot()
    {   

        $this->publishes([__DIR__ . '/config/' => config_path() . "/"], 'config');

        $this->publishes([__DIR__ . '/database/migrations/' => base_path("database/migrations")], 'database');

        // Routing
        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/routes/web.php';
        }

        //Указывам где искать вью и какой неймспейс им задать
        $this->loadViewsFrom(__DIR__.'/resources/views', 'safen');

    }

/*    public function register()
        {
            //register the service providers for local environment
            if ($this->app->isLocal() && !empty($this->providers)) {
                foreach ($this->providers as $provider) {
                    $this->app->register($provider);
                }
                //register the alias
                if (!empty($this->aliases)) {
                    foreach ($this->aliases as $alias => $facade) {
                        $this->app->alias($alias, $facade);
                    }
                }
            }
        

            #dd($this->app);

        }*/

    public function register()
    {
        #dd(config('safenote'));
        if(config('safenote')['providers']) {
                foreach (config('safenote')['providers'] as $provider) {
                    $this->app->register($provider);
                }
        }
        
        if(config('safenote')['aliases']) {
            $loader = AliasLoader::getInstance();

                foreach (config('safenote')['aliases'] as $alias => $facade) {
                    $loader->alias($alias, $facade);
                }
        }

            #$this->app->register('Collective\Html\HtmlServiceProvider');
            
            // $loader->alias('Form', 'Collective\Html\FormFacade');
            // $loader->alias('Html', 'Collective\Html\HtmlFacade');

    }

}