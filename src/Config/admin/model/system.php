<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '系统设置',
     //前端路由
     'path'   => config('admin.uri').'/login',
     // graphql  查询字段
     'graphql' => config('admin.name').'System',

];
