@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--<div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>-->
            <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>123123</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>产品说明 <small>产品说明</small></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>产品价格 <small>产品价格</small></h2>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">1</div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">2</div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">3</div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">4</div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>VPN路线 <small>VPN路线</small></h2>
            </div>
        </div>
    </div>
</div>
@include('foot')
@endsection
