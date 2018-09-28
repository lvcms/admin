<?php

namespace Lvcmf\Admin\App\Console;

use Illuminate\Console\Command;
use Lvcmf\Core\Framework\Commands\Uninstall;

class UninstallCommand extends Command
{
    protected $uninstall;
    /**
     * The name and signature of the console command.
     *
     * @var string
     * @translator laravelacademy.org
     */
    protected $signature = 'lvcmf:admin:uninstall';

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
        //删除对应数据库数据
        $this->info($this->uninstall->dropTable('admin_configs'));
    }
}
