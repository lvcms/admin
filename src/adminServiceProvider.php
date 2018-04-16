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
              __DIR__.'/Config/admin.php',
              'admin'
          );
        $this->mergeConfigFrom(
              __DIR__.'/Config/admin/vue-router.php',
              'admin.vue-router'
          );
        $this->publishes([
              __DIR__.'/Config/admin.php' => config_path('admin.php'),
          ]);
dd(config('admin'));
        //视图路由
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');
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
