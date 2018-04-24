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
        'icon' => '',
        'model' => ['upload']
    ],
    [
        'title' => '用户权限',
        'icon' => '',
        'model' => [
            'users',
            'roles',
            'permission',
        ]
    ],
];
