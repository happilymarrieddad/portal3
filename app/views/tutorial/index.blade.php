@extends('layouts.default')
@section('title') Tutorials @stop
@section('content')
<div class="row">
    <div class="text-center">
        <button style="display:none" class="btn btn-sm btn-danger" id="alert-error"></button>
        <button class="btn btn-sm btn-info" id="alert-loading">Loading Systems...</button>
        <button style="display:none" class="btn btn-sm btn-success" id="alert-success"></button>
    </div>
</div>
<br />
<div class="row" id="title">
    <div class="col-md-12">
        <h1 class="text-center" style="color:whitesmoke">Tutorials</h1><hr><br />

            <div class="panel-group col-md-3 col-md-offset-1" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Computer Engineering
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul id="computer-engineering" style="list-style: none">
                                @foreach($ce as $c)
                                <li><a href="#" data-id="{{$c->id}}">{{$c->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Software Engineering
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul id="software-engineering" style="list-style: none">
                                @foreach($se as $s)
                                <li><a href="#" data-id="{{$s->id}}">{{$s->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><hr>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">{{ HTML::linkRoute('tutorial.create','Create Article') }}</h4>
                    </div>
                </div>
            </div>

        <div class="panel col-md-6 col-md-offset-1" style="padding:10px; border-radius: 10px;">
            <p style="background-color: whitesmoke; padding: 10px; border-radius: 10px;" id="articles-page">
                I'm going to strive to describe the interactions between hardware and software. I hope to provide a resource for
                those who are interested in learning about engineering, with respect to computers. When complete, you will be able to go from
                individual circuits to the most complex software with the understanding needed to create your own projects. Instead of providing
                a linear experience, I'm going to modularize the whole process with a few short required readings in the beginning. If there is a
                topic you are interested in, please email me and let me know. I'm going to start with basic storage and circuit interaction and then
                go to software. I will stay on the software side unless I get an email about hardware. Anyways, thanks for taking the time to read and
                I look forward to your input. <br /><br />

                - Nick
            </p>
        </div>

    </div>
</div>
@stop
@section('js')
<script src="js/tutorials.js" type="application/javascript"></script>
@stop