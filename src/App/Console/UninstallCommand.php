<?php

namespace Lvcms\Admin\App\Console;

use Illuminate\Console\Command;
use Lvcms\Core\Framework\Commands\Uninstall;

class UninstallCommand extends Command
{
    protected $uninstall;
    /**
     * The name and signature of the console command.
     *
     * @var string
     * @translator laravelacademy.org
     */
    protected $signature = 'lvcms:admin:uninstall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'admin packages uninstall';

    public function __construct(Uninstall $uninstall)
    {
        parent::__construct();
        $this->uninstall = $uninstall;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info($this->uninstall->dropConfig('admin')); // 清初 admin 扩展包配置数据
    }
}
