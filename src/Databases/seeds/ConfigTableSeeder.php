<?php
namespace Lvcms\Admin\Databases\seeds;

use DB;
use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    private $package = 'admin';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->insert([
            [
                'key'        => 'TOGGLE_WEB_SITE',
                'value'    => 1,
            ],[
                'key'        => 'WEB_SITE_TITLE',
                'value'    => 'CoreCmf',
            ],[
                'key'        => 'WEB_SITE_SLOGAN',
                'value'    => '免费开源的互联网WEB产品最佳选择',
            ],[
                'key'        => 'WEB_SITE_LOGO',
                'value'    => '',
            ],[
                'key'        => 'WEB_SITE_DESCRIPTION',
                'value'    => 'BigRocs是一套基于统一核心的通用互联网+信息化服务解决方案，追求简单、高效、卓越。可轻松实现支持多终端的WEB产品快速搭建、部署、上线。系统功能采用模块化、组件化、插件化等开放化低耦合设计，应用商城拥有丰富的功能模块、插件、主题，便于用户灵活扩展和二次开发。',
            ],[
                'key'      => 'WEB_SITE_KEYWORD',
                'value'     => 'BigRcos,laravel',
            ],[
                'key'      => 'WEB_SITE_COPYRIGHT',
                'value'     => 'Copyright © 博兴县鹏皓网络科技有限公司 All rights reserved.',
            ],[
                'key'      => 'WEB_SITE_ICP',
                'value'     => '鲁ICP备1272117-1号',
            ],[
                'key'      => 'WEB_SITE_STATISTICS',
                'value'     => '',
            ],[
                'key'      => 'UPLOAD_FILE_SIZE',
                'value'     => '10',
            ],[
                'key'      => 'UPLOAD_IMAGE_SIZE',
                'value'     => '2',
            ],[
                'key'      => 'ADMIN_PAGE_SIZE',
                'value'     => '1',
            ],[
                'key'      => 'ADMIN_PAGE_SIZES',
                'value'     => '5,10,20,40,80,100,200',
            ],[
                'key'      => 'CONFIG_GROUP_LIST',
                'value'     => '基本,系统',
            ],[
                'key'      => 'MENU_GROUP_LIST',
                'value'     => 'admin:后台导航,main:主导航,top:顶部导航,bottom:底部导航',
            ],[
                'key'      => 'ENTRUST_GROUP_LIST',
                'value'     => 'global:全局,admin:后台,cms:CMS,shop:商城',
            ],[
                'key'      => 'DEMO_CHECKBOX',
            ],[
                'key'      => 'DEMO_SELECT',
            ]
        ]);
    }
    private function insert($seeds) {
        foreach ($seeds as $key => $value) {
            DB::table('core_configs')->insert(array_merge($value,[
                'package' => $this->package
            ]));
        }
    }
}
