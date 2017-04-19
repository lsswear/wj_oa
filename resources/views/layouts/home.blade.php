@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 hidden-xs">
            <ul class="nav nav-pills nav-stacked">
                <li><a >公告</a></li>
                <li><a >信息</a></li>
                <li><a >充值</a></li>
                <li><a >产品</a></li>
                <li><a >订单</a></li>
            </ul>
        </div>
        <div class="col-md-10 col-xs-12">
            @yield('home_content')
        </div>
    </div>
</div>
@include('foot')
@endsection
