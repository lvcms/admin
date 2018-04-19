<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '角色管理',
     //前端路由
     'path'   => config('admin.uri').'/roles',
     // graphql  查询字段
     'graphql' => config('admin.name').'Roles',

];
