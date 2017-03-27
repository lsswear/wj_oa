<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN_login</title>
    <link rel="stylesheet" href="/dist/semantic.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div class="ui segment  content">
    <div class="ui middle aligned relaxed fitted stackable grid">
        <div class="ten wide column" id="form_div" style="">
            <form class="ui inverted form" method="post" action="{{ url('admin/login') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label>用户名</label>
                    <div class="ui left icon input">
                        <input type="text" name="name" placeholder="用户名"> <i class="user icon"></i>
                    </div>
                </div>
                <div class="field">
                    <label>密码</label>
                    <div class="ui left icon input">
                        <input name="password" type="password"> <i class="lock icon"></i>
                    </div>
                </div>
                <div class="centeraligned">
                    <div class="ui blue submit button" id="login">登陆</div>
                    <!--<a class="btn btn-link" href="{{ url('admin/logout') }}">logout</a>-->
                </div>
            </form>
        </div>
        <div class="six wide center aligned  column">
            <p>后台管理系统</p>
            <div class="error">
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
<script src="/dist/jquery.min.js"></script>
<script src="/dist/semantic.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#login').click(function(){
            $('form').submit();
        })
    })
</script>
</body>
</html>
