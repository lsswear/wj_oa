<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN_item</title>
    <link rel="stylesheet" href="{{URL::asset('dist/semantic.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/common.css')}}">
</head>
<body>
    @yield('content')
    <script src="{{URL::asset('dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('dist/semantic.min.js')}}"></script>
    @yield('footscript')
</body>
</html>