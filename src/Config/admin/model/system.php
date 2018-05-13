<?php
/**
 * 后台设置
 */

return [
     // 菜单名称
     'title'   => '系统设置',
     'icon'   => 'fa fa-cog fa-spin',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => config('admin.name').':system',
     //前端路由
     'path'   => config('admin.uri').'/system',
     // 默认布局
     'layout' =>[
        [
            'style' => 'row',
            'config' => config('admin.layout.row'),
            'content' => [
                [
                   'style' => 'col',
                   'config' => config('admin.layout.col'),
                   'content' => [
                       'style' => 'item',
                       'config' => 'form1'
                   ]
               ],
               [
                  'style' => 'col',
                  'config' => config('admin.layout.col'),
                  'content' => [
                      'style' => 'item',
                      'config' => 'form2'
                  ]
               ]
            ],
        ]
     ],
     // 索引项目
     'item' => [
         'form1' => [
            'form' => [
                'mobile' => [
                    'type' => 'text',
                    'title' => '手机',
                    // 字数限制
                    'limit' => 50,
                    'default' => '13954386521',
                ],
                'integral' => [
                    'type' => 'text',
                    'title' => '用户积分',
                    'type' => 'textarea',
                ]
            ]
         ]
     ]

];
