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
     'model'   => Lvcms\Admin\App\Models\Config::class,
     // 默认布局
     'layout' =>[
        [
            'style' => 'row',
            // 'config' => config('admin.layout.row'),
            'content' => [
                [
                   'style' => 'col',
                //    'config' => config('admin.layout.col'),
                   'content' => [
                       'style' => 'item',
                       'config' => [
                           'card' => [
                               'title' => '网站设置',
                               'icon' => 'fa fa-cog',
                           ],
                           'item' => 'formWeb'
                       ],
                   ]
               ],
               [
                  'style' => 'col',
                //   'config' => config('admin.layout.col'),
                  'content' => [
                      'style' => 'item',
                      'config' => [
                          'card' => [
                              'title' => '系统参数',
                              'icon' => 'fa fa-cog',
                          ],
                          'item' => 'formSystem'
                      ],
                  ]
              ],
            ],
        ]
     ],
     // 索引项目
     'item' => [
         'formWeb' => [
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
                  ],
                  'WEB_SITE_DESCRIPTION' => [
                      'component' => 'input',
                      'label' => '网站描述',
                      'type' => 'textarea',
                      'placeholder' => '网站搜索引擎描述',
                      'autosize' => [
                          'minRows' => 2,
                          'maxRows' => 5
                      ],
                  ],
                  'WEB_SITE_KEYWORD' => [
                      'component' => 'input',
                      'label' => '网站关键字',
                      'type' => 'textarea',
                      'placeholder'        => '网站搜索引擎关键字',
                  ],
                  'WEB_SITE_COPYRIGHT' => [
                      'component' => 'input',
                      'label' => '版权信息',
                      'type' => 'text',
                      'placeholder'        => '设置在网站底部显示的版权信息，如“版权所有 © 2007-2017 某某科技”',
                  ],
                  'WEB_SITE_ICP' => [
                      'component' => 'input',
                      'label' => '网站备案号',
                      'type' => 'text',
                      'placeholder'        => '设置在网站底部显示的备案号，如“鲁ICP备1272117-1号”',
                  ],
                  'WEB_SITE_STATISTICS' => [
                      'component' => 'input',
                      'label' => '站点统计',
                      'type' => 'textarea',
                      'placeholder'        => '支持百度、Google、cnzz等所有Javascript的统计代码',
                  ]
              ]
         ],
         'formSystem' => [
              'style' => 'form',
              'config' => [
                  //全局唯一识别 不能有重复
                  'ref' => 'admin:system:form2',
                  'labelWidth' => 90,
              ],
              'item' => [
                  'UPLOAD_FILE_SIZE' => [
                      'component' => 'checkbox',
                      'label' => '文件上传大小',
                      'placeholder' => '文件上传大小单位：MB',
                      'allSelect' => true,
                      'allSelectName' => '全国',
                      'options' => [
                          [
                              'label' => 'demo',
                              'title' => '测试',
                              'icon' => 'fa fa-cog fa-spin',
                          ],
                          [
                              'label' => 'demo1',
                              'title' => '测试1',
                              'disabled' => true,
                              'size' => 'small',
                              'icon' => 'fa fa-unlock-alt',
                          ],
                          [
                              'label' => 'demo2',
                              'title' => '测试2',
                              'icon' => 'fa fa-medium',
                          ],
                      ]
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
