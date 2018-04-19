<?php
/**
 * vue_router 参考 vue 官网配置
 * https://router.vuejs.org/zh-cn/
 */
return [
    [
        'path'  =>  config('admin.uri').'/login',
        'name'  =>  config('admin.name').'Login',
        'component' =>  '<cve-login/>'
    ],[
          'path'  =>  config('admin.uri'),
          'name'  =>  config('admin.name'),
          'component' =>  '<cve-layout/>',
          "children" => [
          ],
          'originalChildren' => [
              'model'  =>  [
                  'system',
                  'upload',
                  'users',
                  'roles',
                  'permission',
              ],
              'component' =>  '<bve-index/>',
          ]
    ]
];
