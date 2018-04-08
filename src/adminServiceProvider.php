<?php

namespace Laracore\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
          $this->mergeConfigFrom(
              __DIR__.'/../../config/administrator.php', 'administrator'
          );

          $this->loadTranslationsFrom(__DIR__.'/../../lang', 'administrator');

          $this->publishes([
              __DIR__.'/../../config/admin.php' => config_path('admin.php'),
          ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
