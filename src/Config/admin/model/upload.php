<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '上传管理',
     //前端路由
     'path'   => config('admin.uri').'/upload',
     // graphql  查询字段
     'graphql' => config('admin.name').'Upload',

];
