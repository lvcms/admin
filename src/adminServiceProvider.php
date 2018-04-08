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
              __DIR__.'/Config/admin.php', 'admin'
          );
          $this->publishes([
              __DIR__.'/Config/admin.php' => config_path('admin.php'),
          ]);
          $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
          $this->loadRoutesFrom(__DIR__.'/Routes/api.php');
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
