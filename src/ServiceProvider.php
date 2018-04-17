<?php

namespace Laracore\Admin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
              __DIR__.'/Config/admin.php',
              'admin'
          );
        $this->mergeConfigFrom(
              __DIR__.'/Config/admin/vueRouter.php',
              'admin.vueRouter'
          );
        $this->publishes([
              __DIR__.'/Config/admin.php' => config_path('admin.php'),
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
