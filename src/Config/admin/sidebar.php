<?php
/**
 * 后台侧边栏菜单
 * onlyModel 一级路由直接绑定配置文件
 */
return [
    [
        'model' => 'system'
    ],
    [
        'title' => '媒体中心',
        'icon'   => 'fa fa-cloud-upload',
        'model' => ['upload']
    ],
    [
        'title' => '用户权限',
        'icon'   => 'fa fa-cloud-upload',
        'model' => [
            'users',
            'roles',
            'permission',
        ]
    ],
];
