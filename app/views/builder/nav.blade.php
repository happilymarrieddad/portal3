@extends('layouts.builder')

@section('title') Army Builder @stop

@section('body') @yield('nav-body') @stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title text-center">Organization Information</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <label for="input-army-type">Army Type</label>
                            <select name="input-army-type" id="input-army-type" class="form-control">
                                <option>Standard</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-md-offset-1  form-group">
                            <label for="pts">Points</label>
                            <input class="form-control" name="pts" id="pts" />
                        </div>
                        <div class="col-md-2 col-md-offset-2 form-group">
                            <label for="used">Used</label>
                            <input class="form-control" name="used" id="used" value="0" readonly />
                        </div>
                        <div class="col-md-2 col-md-offset-1 form-group">
                            <label for="left">Left</label>
                            <input class="form-control" name="left" id="left" value="0" readonly />
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <label for="display-characters">Characters</label>
                            <input class="form-control" name="display-characters" id="display-characters" value="0" readonly />
                        </div>
                        <div class="col-md-2 col-md-offset-1 form-group">
                            <label for="display-core">Core Units</label>
                            <input class="form-control" name="display-core" id="display-core" value="0" readonly />
                        </div>
                        <div class="col-md-2 col-md-offset-2 form-group">
                            <label for="display-special">Special Units</label>
                            <input class="form-control" name="display-special" id="display-special" value="0" readonly />
                        </div>
                        <div class="col-md-2 col-md-offset-1 form-group">
                            <label for="display-rare">Rare Units</label>
                            <input class="form-control" name="display-rare" id="display-rare" value="0" readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br />
    <div class="row">
        <div class="col-md-3">

            <!-- Menu -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">@yield('nav-list-title')</h3>
                </div>
            </div>
            @yield('nav-list-group')
        </div>

        <div class="col-md-8 col-md-offset-1">

            <!-- Content -->
            @yield('nav-content')
        </div>
    </div>
</div>
@stop

@section('js')
<script src="/js/builder/main.js"></script>
@yield('nav-js')
<script src="/js/builder/startup.js"></script>
@stop