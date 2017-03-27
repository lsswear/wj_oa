@extends('layouts.admin')
@section('leftmenu1')
    <a class="header item" onclick="left_menu_click('{{ url('admin_login/userInfo') }}','index',this)">首页</a>
    <!--<div class="header item" id="header">
        <i class="angle down icon"></i> 基本
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('base/grid.html','test1',this)">网格</a>
        <a class="item" onclick="left_menu_click('base/form.html','test2',this)">表单</a>
        <a class="item" onclick="left_menu_click('base/table.html','test3',this)">表格</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>模块
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('model/accordion.html','test4',this)">折叠控件</a>
        <a class="item" onclick="left_menu_click('model/bar.html','test5',this)">进度条</a>
        <a class="item" onclick="left_menu_click('model/temporarily.html','test6',this)">弹出层</a>
        <a class="item" onclick="left_menu_click('model/popup.html','test7',this)">提示框</a>
    </div>-->
    <div class="header item" id="header">
        <i class="angle down icon"></i>设置
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">用户管理</a>
        <a class="item" onclick="left_menu_click('set/role.blade.php','usergroup',this)">用户组管理</a>
        <a class="item" onclick="left_menu_click('set/permission.blade.php','right',this)">权限管理</a>
        <a class="item" onclick="left_menu_click('set/rightgroup.blade.php','rightgroup',this)">权限组管理</a>
        <a class="item" onclick="left_menu_click('set/setpermission.blade.php','setright',this)">权限设定</a>
    </div>
@endsection
@section('leftmenu2')
    <a class="header item" onclick="left_menu_click('{{ url('admin_login/userInfo') }}','index',this)">首页</a>
    <!--<div class="header item" id="header">
        <i class="angle down icon"></i> 基本
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('base/grid.html','test1',this)">网格</a>
        <a class="item" onclick="left_menu_click('base/form.html','test2',this)">表单</a>
        <a class="item" onclick="left_menu_click('base/table.html','test3',this)">表格</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>模块
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('model/accordion.html','test4',this)">折叠控件</a>
        <a class="item" onclick="left_menu_click('model/bar.html','test5',this)">进度条</a>
        <a class="item" onclick="left_menu_click('model/temporarily.html','test6',this)">弹出层</a>
        <a class="item" onclick="left_menu_click('model/popup.html','test7',this)">提示框</a>
    </div>-->
    <div class="header item" id="header">
        <i class="angle down icon"></i>设置
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">用户管理</a>
        <a class="item" onclick="left_menu_click('set/role.blade.php','usergroup',this)">用户组管理</a>
        <a class="item" onclick="left_menu_click('set/permission.blade.php','right',this)">权限管理</a>
        <a class="item" onclick="left_menu_click('set/rightgroup.blade.php','rightgroup',this)">权限组管理</a>
        <a class="item" onclick="left_menu_click('set/setpermission.blade.php','setright',this)">权限设定</a>
    </div>
@endsection