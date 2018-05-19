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
               [
                  'style' => 'col',
                  'config' => config('admin.layout.col'),
                  'content' => [
                      'style' => 'item',
                      'config' => [
                          'card' => [
                              'title' => '系统设置2',
                              'icon' => 'fa fa-cog',
                          ],
                          'item' => 'form2'
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
                      'component' => 'switch',
                      'label' => '站点开关',
                      'placeholder' => '站点关闭后将不能访问',
                  ],
                  'WEB_SITE_TITLE' => [
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
                      'default' => '没有logo',
                  ]
              ]
         ],
         'form2' => [
              'style' => 'form',
              'config' => [
                  //全局唯一识别 不能有重复
                  'ref' => 'admin:system:form2',
                  'labelWidth' => 90,
              ],
              'item' => [
                  'UPLOAD_FILE_SIZE' => [
                      'component' => 'input',
                      'label' => '文件上传大小',
                      'placeholder' => '文件上传大小单位：MB',
                  ],
                  'UPLOAD_IMAGE_SIZE' => [
                      'component' => 'input',
                      'label' => '图片上传大小',
                      'placeholder' => '图片上传大小单位：MB',
                  ],
                  'ADMIN_PAGE_SIZE' => [
                      'component' => 'input',
                      'label' => '分页数量',
                      'placeholder' => '分页时每页的记录数',
                  ]
              ]
         ]
     ]

];
