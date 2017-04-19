@extends('layouts.admin')
@section('leftmenu1')
    <a class="header item" onclick="left_menu_click('{{ url('admin_login/userInfo') }}','index',this)">首页</a>
    @if(empty($menu))
    <div class="header item" id="header">
        <i class="angle down icon"></i>站内公告
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('{{ url('admin_login/bulletinlist') }}','bulletinlist',this)">公告列表</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>产品管理
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">产品列表</a>
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">线路列表</a>
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">价格管理</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>用户管理
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">用户列表</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>网站设置
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">网站设置</a>
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">支付设置</a>
    </div>
    @else
        @foreach($menu as $item)
            <div class="header item" id="header">
                <i class="angle down icon"></i>{{ $item->display_name }}
            </div>
            @if(!empty($item->child))
                @foreach($item->child as $i)
                    <div class="menu">
                        <a class="item" onclick="left_menu_click('{{ url($i->url) }}','{{ $i->name }}',this)">{{ $i->display_name }}</a>
                    </div>
                @endforeach
            @endif
        @endforeach
    @endif
@endsection
@section('leftmenu2')
    <a class="header item" onclick="left_menu_click('{{ url('admin_login/userInfo') }}','index',this)">首页</a>
    @if(empty($menu))
    <div class="header item" id="header">
        <i class="angle down icon"></i>站内公告
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">公告列表</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>产品管理
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">产品列表</a>
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">线路列表</a>
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">价格管理</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>用户管理
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">用户列表</a>
    </div>
    <div class="header item" id="header">
        <i class="angle down icon"></i>网站设置
    </div>
    <div class="menu">
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">网站设置</a>
        <a class="item" onclick="left_menu_click('set/users.blade.php','user',this)">支付设置</a>
    </div>
    @else
        @if(!empty($item->child))
            @foreach($item->child as $i)
                <div class="menu">
                    <a class="item" onclick="left_menu_click('{{ url($i->url) }}','{{ $i->name }}',this)">{{ $i->display_name }}</a>
                </div>
            @endforeach
        @endif
    @endif
@endsection