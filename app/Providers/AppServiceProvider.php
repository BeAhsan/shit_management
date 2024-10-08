<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Foundation\AliasLoader;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
           // Get the AliasLoader instance
         //  $loader = AliasLoader::getInstance();
           // Add your aliases
          // $loader->alias('Master', \App\MasterClass::class);

         // helpers
         require_once base_path().'/app/Helpers/GlobalFunctions.php';
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
