<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '权限管理',
     //前端路由
     'path'   => config('admin.uri').'/permission',
     // graphql  查询字段
     'graphql' => config('admin.name').'Permission',

];
