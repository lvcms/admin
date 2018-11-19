<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '上传管理',
     'icon'   => 'fa fa-cloud-upload',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => 'upload',
     //前端路由路径
     'path'   => 'upload',
     // 数据模型，用作数据的 CRUD
     'model'   => Lvcms\Core\App\Models\Upload::class,
     // 默认布局
     'layout' =>[
        [
            'style' => 'row',
            'content' => [
                [
                   'style' => 'col',
                   'config' => [
                        //栅格的占位格数，可选值为0~24的整数，为 0 时，相当于display:none
                        'span' => 24,
                    ],
                    'content' => [
                        [
                            'style' => 'card',
                            'config' => [
                                'title' => '上传管理',
                                'icon' => 'fa fa-cog',
                            ],
                            'content' => [
                                'item' => 'list',
                            ]
                        ],
                    ]
               ],
            ],
        ]
    ],
    // 静态弹出框
    'modal' => [
        'editModal' => [
            'config' => [
                'title' => '文件编辑',
            ],
            'layout' => [
                [
                    'style' => 'row',
                    'content' => [
                        [
                        'style' => 'col',
                        'config' => [
                                //栅格的占位格数，可选值为0~24的整数，为 0 时，相当于display:none
                                'span' => 24,
                            ],
                        'content' => [
                            [
                                'style' => 'item',
                                'content' => [
                                    'item' => 'addEdit',
                                ]
                            ]
                        ]
                    ],
                    ],
                ]
            ]
        ]
    ],
    // 索引项目
    'item' => [
        'addEdit' => [
            'style' => 'form',
            'config' => [
                //全局唯一识别 不能有重复
                // 'ref' => 'admin:system:form1',
                'labelWidth' => 80,
                // 不需要获取 value
                'isValue' => false,
            ],
            'item' => [
                'id' => [
                    'component' => 'input',
                    'label' => 'Id',
                    'placeholder' => '文件 Id',
                    'disabled' => true,
                ],
                'name' => [
                    'component' => 'input',
                    'label' => '文件名',
                    'placeholder' => '上传文件名称',
                ],
                'extension' => [
                    'component' => 'input',
                    'label' => '文件类型',
                    'placeholder' => '上传文件类型',
                ],
                'disk' => [
                    'component' => 'input',
                    'label' => '存储器',
                    'placeholder' => '上传文件存储器',
                ],
                'submit' => [
                    'component' => 'button',
                    'title' => '提交',
                    'type' => 'primary',
                    'long' => true,
                    'event' => ['formSubmit','closeModal'], // 触发前端事件 form 提交表单
                    'isValue' => false, //是否允许前端获取这个的 value 值 默认 true
                ],
                'reset' => [
                    'component' => 'button',
                    'title' => '重置',
                    'type' => 'default',
                    'long' => true,
                    'event' => ['formReset'], // 触发前端事件 form 重置表单
                    'isValue' => false, //是否允许前端获取这个的 value 值 默认 true
                ],
            ]
        ],
        'list' => [
            'style' => 'form',
            'config' => [
                'labelWidth' => 80,
            ],
            'item' => [
                'agGrid' => [
                    'component' => 'agGrid',
                    'columns' => [
                        [
                            'headerName'=> 'ID',
                            'field'=> 'id',
                            "width"=> 120,
                        ],
                        [
                            'headerName'=> '图片',
                            'field'=> 'url',
                            "width"=> 110,
                            "autoHeight"=> true,
                            "params" =>[
                                "style"=>[
                                    "width"=>'55px',
                                    "height"=>'55px',
                                ]
                            ],
                            "cellRendererFramework"=>'cellRendererImg'
                        ],
                        [
                            'headerName'=> '文件名',
                            'field'=> 'name',
                            "editable"=>true,
                            "cellRendererFramework"=> 'cellRendererFileName'
                        ],
                        [
                            'headerName'=> '文件大小',
                            'field'=> 'size',
                            "width"=> 150,
                            'hide'=> true,
                            "cellRendererFramework"=> 'cellRendererFileSize'
                        ],
                        [
                            'headerName'=> '文件类型',
                            'field'=> 'extension'
                        ],
                        [
                            'headerName'=> '存储器',
                            'field'=> 'disk'
                        ],
                        [
                            'headerName'=> '下载次数',
                            'field'=> 'download',
                            'hide'=> true
                        ],
                        [
                            'headerName'=> '时间',
                            "width"=>250,
                            'field'=> 'created_at',
                            'hide'=> true
                        ],
                        [
                            'headerName'=> '状态',
                            'field'=> 'status',
                            "width"=>150,
                            "params"=> [
                                'open'=> [
                                    "color"=>'success',
                                    "icon"=>'fa fa-check',
                                    "title"=> '正常'
                                ],
                                'close'=> [
                                    "color"=>'error',
                                    "icon"=>'fa fa-power-off',
                                    "title"=> '禁用'
                                ],
                            ],
                            "cellRendererFramework"=>'cellRendererStatus'
                        ],
                        [
                            "headerName"=>"操作",
                            "autoHeight"=>true,
                            "field"=>"id",
                            "width"=>250,
                            "params"=>[
                                "buttons" =>[
                                    [
                                        "type"=>'primary',
                                        "icon"=>'fa fa-edit',
                                        "title"=> '编辑',
                                        "modal" =>'editModal'
                                    ],
                                    [
                                        "type"=>'success',
                                        "icon"=>'fa fa-check',
                                        "title"=> '启用',
                                        "event"=> ['agGrid'],
                                        "show"=> ['close'],
                                        "postParams" => [
                                            'status' => 'open'
                                        ]
                                    ],
                                    [
                                        "type"=>'warning',
                                        "icon"=>'fa fa-power-off',
                                        "title"=> '关闭',
                                        "event"=> ['agGrid'],
                                        "show"=> ['open'],
                                        "postParams" => [
                                            'status' => 'close'
                                        ]
                                    ],
                                    [
                                        "type"=>'info',
                                        "icon"=>'fa fa-trash',
                                        "title"=> '创建副本',
                                        "event"=> ['agGrid'],
                                        "postParams" => [
                                            // 发送 id 时自动处理对应请求 一般用户 replicate 创建副本
                                            'handler' => 'replicate'
                                        ],
                                    ],
                                    [
                                        "type"=>'error',
                                        "icon"=>'fa fa-trash',
                                        "title"=> '删除',
                                        "event"=> ['agGrid'],
                                        "postParams" => [
                                            // 发送 id 时自动处理对应请求 一般用户 deleter 删除
                                            'handler' => 'delete'
                                        ],
                                        "confirm" => [
                                            'title' => '删除文件',
                                            'content' => '此操作将永久删除文件, 是否继续?',
                                            'cancel' => '取消删除操作',
                                            'okText' => '删除',
                                        ]
                                    ],
                                ]
                            ],
                            "cellRendererFramework"=>'cellRendererButton'
                        ]
                    ],
                ]
            ]
        ],
    ]
];
