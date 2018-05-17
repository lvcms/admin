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
     // 数据模型，用作数据的 CRUD
     'model'   => Laracore\Admin\App\Models\Config::class,
     // 数据存放方式
     'arrangement' => [
         'column' => false,
         'key' => 'key',
         'value' => 'value',
     ],
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
                       'config' => [
                           'card' => [
                               'title' => '系统设置',
                               'icon' => 'fa fa-cog',
                           ],
                           'item' => 'form1'
                       ],
                   ]
               ],
            ],
        ]
     ],
     // 索引项目
     'item' => [
         'form1' => [
              'style' => 'form',
              'config' => [
                  //全局唯一识别 不能有重复
                  'ref' => 'admin:system:form1',
                  'labelWidth' => 80,
              ],
              'item' => [
                  'TOGGLE_WEB_SITE' => [
                      'component' => 'input',
                      'label' => '站点开关',
                      'placeholder' => '站点关闭后将不能访问',
                      // 最大输入长度
                      'maxlength' => 50,
                  ],
                  'TOGGLE_WEB_SITE' => [
                      'component' => 'input',
                      'label' => '网站标题',
                      // 最大输入长度
                      'maxlength' => 50,
                      'placeholder' => '网站标题前台显示标题',
                  ],
                  'WEB_SITE_SLOGAN' => [
                      'component' => 'input',
                      'label' => '网站口号',
                      // 最大输入长度
                      'maxlength' => 50,
                      'placeholder'        => '网站口号、宣传标语、一句话介绍',
                  ],
                  'WEB_SITE_LOGO' => [
                      'component' => 'input',
                      'label' => '网站LOGO',
                      'type' => 'textarea',
                      'placeholder'        => '设置网站LOGO',
                  ]
              ]
         ]
     ]

];
