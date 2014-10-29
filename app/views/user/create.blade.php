@extends('layouts.login')
@section('title') @stop
@section('content')
<br /><br /> <br />
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Please Login</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('route'=>'user.store','method'=>'post')) }}
                <div class="form-group">
                    <span style="color:red">@if(isset($error)){{$error}}@endif</span>
                    <span style="color:green">@if(isset($msg)){{$msg}}@endif</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required />
                </div>
                <div class="form-group">
                    <label for="password_confirm">Password Confirm</label>
                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" required />
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" required />
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" required />
                </div><hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                    {{ HTML::linkRoute('session.create','Login Page', array(), array('class'=>'pull-right btn btn-success')) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
@stop