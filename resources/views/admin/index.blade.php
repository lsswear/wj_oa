@extends('layouts.admin_item')
@section('content')
<style>
    .column{padding:0px;}
</style>
<div class="ui attached segment" id="segment">
    <div class="ui grid">
        <div class="three column  center aligned divided row ">
            <div class="column">
                <i class="huge users icon"></i>
                <br>在线人数
                <br>10
            </div>
            <div class="column">
                <i class="huge mail icon"></i>
                <br>站内消息
                <br>10
            </div>
            <div class="column">
                <i class="huge payment icon"></i>
                <br>交易订单
                <br>10
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="doubling four column  center aligned  row">
            <div class="ui column segment">
                <a>
                    <i class="big users icon"></i>
                    <br>系统设置
                </a>
            </div>
            <div class="ui column segment">
                <a>
                    <i class="big users icon"></i>
                    <br>用户管理
                </a>
            </div>
            <div class="ui column segment">
                <a>
                    <i class="big payment icon"></i>
                    <br>订单管理
                </a>
            </div>
            <div class="ui column segment">
                <a>
                    <i class="big file text icon"></i>
                    <br>日历管理
                </a>
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="row">
            <div class="centeraligned column">
                <a>演示网址</a>
                |
                <a>项目网址</a>
                |
                <a href="http://www.semantic-ui-cn.com/" target="_blank">中文官网</a>
                |
                <a href="http://www.semantic-ui.cn/" target="_blank">英文官网</a>
            </div>
        </div>
    </div>
</div>
@endsection