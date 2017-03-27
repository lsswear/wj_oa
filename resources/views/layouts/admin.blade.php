<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN_index</title>
    <link rel="stylesheet" href="dist/semantic.min.css">
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<!--横菜单开始-->
<div class="ui inverted menu">
    <a class="active item">LOGO</a>
    <div class="right menu">
        <div class="ui dropdown item">
            {{ Auth::guard('admin')->user()->name }}
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item">修改密码</a>
                <a class="item" href="{{ url('admin/logout') }}">退出</a>
            </div>
        </div>
        <div class="item" id='menu_button'>菜单</div>
    </div>
</div>
<!--横菜单结束-->
<!--main开始-->
<div class="ui grid main" id="main">
    <!--左导航开始-->
    <div class="two wide column inverted black menu_left" id="menu_left">
        <div class="ui vertical menu inverted">
            @yield('leftmenu1')
        </div>
    </div>
    <div class="fourteen wide column"  id="content" >
        <div class="ui top attached tabular menu">
            <div class="active item" data-tab="index" id="index"><span>首页</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="remove icon"></i></div>
        </div>
        <div class="ui bottom attached active tab content_div" data-tab="index" id="index_div">
            test
        </div>
    </div>
</div>
<!--边栏开始-->
<div class="ui left vertical inverted thin sidebar menu menu_left">
    @yield('leftmenu2')
</div>
<!--边栏结束-->
<!--main结束-->
<script src="dist/jquery.min.js"></script>
<script src="dist/semantic.min.js"></script>
<script src="js/common.js"></script>
<script>
    $(function(){
        $('#index_div').load('{{ url('admin_login/userInfo') }}');
    })
</script>
</body>
</html>