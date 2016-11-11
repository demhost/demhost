<?php

return [


    'providers' => [
        /*
         * SafeNote Service Providers...
         */
        Collective\Html\HtmlServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    */

    'aliases' => [

      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,

    ],

];
