@extends('user.nav')

@section('nav-index') active @stop

@section('nav-body-title') Profile Information @stop

@section('nav-body')
<div class="col-md-10">
    <div class="form-group">
        <span>Email</span>
        <span class="pull-right">{{$email}}</span>
    </div>
    <div class="form-group">
        <span>Name</span>
        <span class="pull-right">{{$first_name}}&nbsp;{{$last_name}}</span>
    </div>
    <div class="form-group">
        <span>Admin</span>
        <span class="pull-right">@if($admin > 0)Yes @else No @endif</span>
    </div>
    <div class="form-group">
        <span>Last Login</span>
        <span class="pull-right">{{date('o-m-d H:i:s',$last_login)}}</span>
    </div>
    <div class="form-group">
        <span>Account Updated On</span>
        <span class="pull-right">{{Auth::user()->updated_at}}</span>
    </div>
    <div class="form-group">
        <span>Account Created On</span>
        <span class="pull-right">{{Auth::user()->created_at}}</span>
    </div>
</div>
@stop