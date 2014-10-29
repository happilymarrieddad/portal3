@extends('layouts.default')

@section('title') Error Page @stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="border:1px black solid">
        <div class="panel-heading">
           <h3 class="panel-title">Error Page</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
                <span class="text-danger">@if(isset($error)){{$error}}@endif</span>
                <span class="text-success">@if(isset($msg)){{$msg}}@endif</span>
            </div>
        </div>
    </div>
</div>
@stop

@section('js') @stop