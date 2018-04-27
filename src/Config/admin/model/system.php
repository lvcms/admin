<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '系统设置',
     'icon'   => 'fa fa-cog fa-spin',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => config('admin.name').':system',
     //前端路由
     'path'   => config('admin.uri').'/system',

];
