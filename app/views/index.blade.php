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
                    <span style="text-decoration: underline">2014-NOV-03</span><br />
                    <span>The new project is an army builder for warhammer fantasy. If you're interested in working on it, email me at segfault.developer.com</span>
                </p><br />
                <p>
                    <span style="text-decoration: underline">2014-NOV-02</span><br />
                    <span>I'm working on my first project for this new site. I'll probably add all the old projects later.</span>
                </p><br />
                <p>
                    <span style="text-decoration: underline">2014-OCT-29</span><br />
                    <span>Initial news post.</span>
                </p><br />
            </div>
        </div>
    </div>
</div>
@stop
@section('js') @stop