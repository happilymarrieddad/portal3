@extends('layouts.default')
@section('title') Tutorials @stop
@section('content')
<br /><br />
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Create Article Form</h3>
        </div>
        <div class="panel-body">
            {{ Form::open(array('route'=>'tutorial.store', 'method'=>'post')) }}
            <div class="form-group">
                <span style="color:red">@if(isset($error)){{$error}}@endif</span>
                <span style="color:green">@if(isset($msg)){{$msg}}@endif</span>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="pull-right form-control" name="type" id="type"><option value="se">Software Engineering</option><option value="ce">Computer Engineering</option></select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="body">Body of Article</label>
                <textarea rows="20" cols="50" class="form-control" id="body" name="body"></textarea>
                <span class="help-block">You can use html and css in this block</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Create</button>
                <button class="btn btn-warning" type="reset">Reset</button>
                {{ HTML::linkRoute('tutorial.index', 'Back to Tutorials', array(), array('class'=> 'btn btn-success pull-right')) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
@section('js')
@stop