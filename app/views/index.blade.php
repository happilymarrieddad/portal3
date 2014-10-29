@extends('layouts.default')

@section('title') Home Page @stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="border:1px black solid">
        <div class="panel-heading">
            <h3 class="panel-title">Welcome to Nick Kotenberg's Website</h3>
        </div>
        <div class="panel-body" style="overflow-y: scroll; max-height: 600px;">
            <div class="col-md-10 col-md-offset-1"><br /><br />
                <p>
                    Please take a look around. You can create an account for this
                    this site by clicking on the top right button. Thanks!
                </p><br /><br />
                <h3>NEWS</h3><hr>
                <p>
                    <span>2014-OCT-29</span>
                    <span class="pull-right">Initial news post.</span>
                </p>
            </div>
        </div>
    </div>
</div>
@stop
@section('js') @stop