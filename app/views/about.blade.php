@extends('layouts.default')

@section('title') About Page @stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="border:1px black solid">
        <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
                <h2 style="text-decoration: underline">About Me</h2>
                <img src="/images/nick2.jpg" width="300" class="pull-right" /><br /><br /><br />
                <div class="col-md-8">
                    <p>My name is Nick Kotenberg. Welcome to my website. </p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I built this website for three reasons. The first
                        is to test projects in a production environment. The second reason is to showcase
                        to others different skills I have. Finally, to share some of the information, skills,
                        and tricks I have learned during my journey. If you have any questions, you can contact
                        me at segfault.developer@yahoo.com. Thanks for visiting!
                    </p><br /><br />
                    <p>Framework: Laravel 4.2.11</p><br />
                    <p>
                        Technologies: PHP, Laravel, Eloquent, jQuery, Bootstrap, JavaScript, Amazon EC2, MySQL, My own custom SPA
                        (Single Page Application) written in javascript
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js') @stop