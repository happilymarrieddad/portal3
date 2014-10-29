@extends('user.nav')

@section('nav-edit') active @stop

@section('nav-body-title') Edit Profile Information @stop

@section('nav-body')
{{ Form::open(array('route'=>'user.update', 'method'=>'put')) }}
<div class="form-group">
    <span style="color:red">@if(isset($error)){{$error}}@endif</span>
    <span style="color:green">@if(isset($msg)){{$msg}}@endif</span>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" value="{{$email}}" required />
</div>
<div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name" value="{{$first_name}}" required />
</div>
<div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" value="{{$last_name}}" required />
</div><hr>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Account</button>
</div>
{{ Form::close() }}
@stop