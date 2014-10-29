@extends('layouts.default')
@section('title') User Profile @stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Options</h3>
                </div>
                <div class="list-group">
                    <a class="list-group-item @yield('nav-index')" href="/user">Show Profile</a>
                    <a class="list-group-item @yield('nav-edit')" href="/user/{{$id}}/edit">Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">@yield('nav-body-title')</h3>
                </div>
                <div class="panel-body">
                    @yield('nav-body')
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')@stop