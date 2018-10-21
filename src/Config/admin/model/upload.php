<?php
/**
 * 后台侧边栏菜单
 */
return [
    // 菜单名称
    'title' => '上传管理',
    'icon' => 'fa fa-cloud-upload',
    //前端路由名称  graphql 查询字段根据这个名称
    'name' => 'upload',
    //前端路由路径
    'path' => 'upload',
    // 数据模型，用作数据的 CRUD
    'model' => Lvcms\Core\App\Models\Upload::class,
    // 默认布局
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
                            'config' => [
                                'card' => [
                                    'title' => '上传管理',
                                    'icon' => 'fa fa-cog',
                                ],
                                'item' => 'formUpload',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    // 索引项目
    'item' => [
        'formUpload' => [
            'style' => 'form',
            'config' => [
                //全局唯一识别 不能有重复
                // 'ref' => 'admin:system:form1',
                'labelWidth' => 80,
            ],
            'item' => [
                // 'table' => [
                //     'component' => 'table',
                //     'columns' => [
                //         [
                //             'title'=> 'ID',
                //             'key'=> 'id'
                //         ],
                //         [
                //             'title'=> '图片',
                //             'key'=> 'url'
                //         ],
                //         [
                //             'title'=> '文件名',
                //             'key'=> 'name'
                //         ],
                //         [
                //             'title'=> '文件大小',
                //             'key'=> 'size'
                //         ],
                //         [
                //             'title'=> '文件类型',
                //             'key'=> 'extension'
                //         ],
                //         [
                //             'title'=> '存储器',
                //             'key'=> 'disk'
                //         ],
                //         [
                //             'title'=> '下载次数',
                //             'key'=> 'download'
                //         ],
                //         [
                //             'title'=> '状态',
                //             'key'=> 'status'
                //         ],
                //         [
                //             'title'=> '时间',
                //             'key'=> 'created_at'
                //         ],
                //     ]
                // ],
                'agGrid' => [
                    'component' => 'agGrid',
                    'columns' => [
                        [
                            'headerName' => 'ID',
                            'field' => 'id',
                            "width" => 120,
                        ],
                        [
                            'headerName' => '图片',
                            'field' => 'url',
                            "width" => 110,
                            "autoHeight" => true,
                            "params" => [
                                "style" => [
                                    "width" => '55px',
                                    "height" => '55px',
                                ],
                            ],
                            "cellRendererFramework" => 'cellRendererImg',
                        ],
                        [
                            'headerName' => '文件名',
                            'field' => 'name',
                            "cellRendererFramework" => 'cellRendererFileName',
                        ],
                        [
                            'headerName' => '文件大小',
                            'field' => 'size',
                            "width" => 150,
                            "cellRendererFramework" => 'cellRendererFileSize',
                        ],
                        [
                            'headerName' => '文件类型',
                            'field' => 'extension',
                        ],
                        [
                            'headerName' => '存储器',
                            'field' => 'disk',
                        ],
                        [
                            'headerName' => '下载次数',
                            'field' => 'download',
                        ],
                        [
                            'headerName' => '时间',
                            "width" => 250,
                            'field' => 'created_at',
                        ],
                        [
                            'headerName' => '状态',
                            'field' => 'status',
                            "width" => 150,
                            "params" => [
                                'open' => [
                                    "color" => 'success',
                                    "icon" => 'fa fa-check',
                                    "title" => '正常',
                                ],
                                'close' => [
                                    "color" => 'error',
                                    "icon" => 'fa fa-power-off',
                                    "title" => '禁用',
                                ],
                            ],
                            "cellRendererFramework" => 'cellRendererStatus',
                        ],
                        [
                            "headerName" => "操作",
                            "autoHeight" => true,
                            "field" => "id",
                            "width" => 250,
                            "params" => [
                                "buttons" => [
                                    [
                                        "type" => 'success',
                                        "icon" => 'fa fa-check',
                                        "title" => '启用',
                                        "event" => 'agGrid',
                                        "show" => ['close'],
                                        "post" => [
                                            'status' => 'open',
                                        ],
                                    ],
                                    [
                                        "type" => 'warning',
                                        "icon" => 'fa fa-power-off',
                                        "title" => '关闭',
                                        "event" => 'agGrid',
                                        "show" => ['open'],
                                        "post" => [
                                            'status' => 'close',
                                        ],
                                    ],
                                    [
                                        "type" => 'error',
                                        "icon" => 'fa fa-trash',
                                        "title" => '删除',
                                        "event" => 'agGrid',
                                        "post" => [
                                            // 发送 id 时自动处理对应请求 一般用户 deleter 删除
                                            'id' => 'delete',
                                        ],
                                    ],
                                ],
                            ],
                            "cellRendererFramework" => 'cellRendererButton',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
