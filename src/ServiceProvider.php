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
        //加载artisan commands
        $this->commands([
            \Laracore\Admin\App\Console\InstallCommand::class,
            \Laracore\Admin\App\Console\UninstallCommand::class,
        ]);
        //迁移文件配置
        $this->loadMigrationsFrom(__DIR__.'/Databases/migrations');
        // 发布配置文件
        $this->publishes([
              __DIR__.'/Config/admin.php' => config_path('admin.php'),
          ], 'admin:config');
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
