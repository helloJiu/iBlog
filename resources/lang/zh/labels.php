<?php
return [
	'action' => '操作',
	'user' => [
		'id' => '序号',
		'name' => '用户名',
		'email' => '邮箱',
		'password' => '密码',
		'status' => '状态',
		'created_at' => '创建时间',
		'updated_at' => '修改时间',
		'remember_token' => 'token',
		'list' => '用户列表'
	],
	'permission' => [
		'id' => '序号',
		'name' => '权限名称',
		'slug' => '权限',
		'description' => '描述',
		'model' => '模型',
		'status' => '状态',
		'created_at' => '创建时间',
		'updated_at' => '修改时间',
		'list' => '权限列表'
	],
	'role' => [
		'id' => '序号',
		'name' => '名称',
		'slug' => '角色',
		'description' => '描述',
		'level' => '等级',
		'status' => '状态',
		'created_at' => '创建时间',
		'updated_at' => '修改时间',
	],
	'breadcrumb' => [
		'home' => '<i class="fa fa-home"></i> 主页',
		'permissionList' => '<i class="fa fa-bars"></i> 权限列表',
		'permissionCreate' => '<i class="fa fa-paper-plane-o"></i> 创建权限',
		'permissionEdit' => '<i class="fa fa-pencil"></i> 修改权限',
	]
];