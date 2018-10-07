<?php

namespace Lvcms\Admin\App\Console;

use Illuminate\Console\Command;
use Lvcms\Core\App\Models\User;
use Lvcms\Core\Framework\Commands\Install;

class InstallCommand extends Command
{
    /**
     *  install class.
     * @var object
     */
    protected $install;
    /**
     * The name and signature of the console command.
     *
     * @var string
     * @translator laravelacademy.org
     */
    protected $signature = 'lvcms:admin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'admin packages install';

    public function __construct(Install $install)
    {
        parent::__construct();
        $this->install = $install;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('是否注册后管理员用户? [y|n]')) {
            $this->register();
        }
        $this->vueAdminLink();
        $this->info($this->install->publish('admin:config'));
        $this->info($this->install->seed(\Lvcms\Admin\Databases\seeds\ConfigTableSeeder::class));
    }
    public function register()
    {
        $user = new User();
        $user->name = $this->ask('请输入用户名');
        $user->email = $this->ask('请输入邮箱地址');
        $user->mobile = $this->ask('请输入手机号码');
        $user->password = $this->password();
        $user->save()? $this->info('注册后台管理员账号成功'): $this->info('注册后台管理员账号失败');
    }
    /**
     * 密码确认
     */
    public function password()
    {
        $pass = $this->secret('请输入密码');
        $password = $this->secret('请再次输入密码');
        if ($password == $pass) {
            return $password;
        } else {
            $this->error('两次密码不一样!请重新输入.');
            return $this->password();
        }
    }
    /**
     * 创建软连接
     */
    public function vueAdminLink()
    {
        if (file_exists(public_path('vendor/admin'))) {
            $this->error('The "public/vendor/admin" directory already exists.');
        }else{
            $this->laravel->make('files')->link(
                base_path('vendor/lvcms/vue-admin/dist'), public_path('vendor/admin')
            );
            $this->info('The [public/vendor/admin] directory has been linked.');
        }
    }
}
