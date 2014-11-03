@extends('builder.nav')

@section('nav-list-title') Dwarf Units @stop

@section('nav-body') background-image: url('/images/dwarfs-background.jpg'); background-repeat: no-repeat;background-size: 100% @stop

@section('nav-list-group')
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 style="text-decoration: underline; text-align: center">Characters</h5>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingOne">
            <a class="list-group-item" href="#">Dwarf Lord <span class="pull-right">145 pts</span></a>
            <a class="list-group-item" href="#">Rune Lord <span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#">Daemon Slayer <span class="pull-right">110 pts</span></a>
            <a class="list-group-item" href="#">Thane <span class="pull-right">65 pts</span></a>
            <a class="list-group-item" href="#">Runesmith <span class="pull-right">70 pts</span></a>
            <a class="list-group-item" href="#">Master Engineer <span class="pull-right">70 pts</span></a>
            <a class="list-group-item" href="#">Dragon Slayer <span class="pull-right">50 pts</span></a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 style="text-decoration: underline; text-align: center">Core Units</h5>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingTwo">
            <a class="list-group-item" href="#">Dwarf Warriors <span class="pull-right">80 pts</span></a>
            <a class="list-group-item" href="#">Quarrellers <span class="pull-right">110 pts</span></a>
            <a class="list-group-item" href="#">Thunderers <span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#">Rangers Warriors<span class="pull-right">110 pts</span></a>
            <a class="list-group-item" href="#">Rangers Quarrellers<span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#">Rangers Thunderers<span class="pull-right">140 pts</span></a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 style="text-decoration: underline; text-align: center">Special Units</h5>
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingThree">
            <a class="list-group-item" href="#">Hammerers <span class="pull-right">60 pts</span></a>
            <a class="list-group-item" href="#">Cannon <span class="pull-right">90 pts</span></a>
            <a class="list-group-item" href="#">Bolt Thrower <span class="pull-right">45 pts</span></a>
            <a class="list-group-item" href="#">Miners <span class="pull-right">55 pts</span></a>
            <a class="list-group-item" href="#">Ironbreakers <span class="pull-right">80 pts</span></a>
            <a class="list-group-item" href="#">Grudge Thrower <span class="pull-right">80 pts</span></a>
            <a class="list-group-item" href="#">Slayers <span class="pull-right">55 pts</span></a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h5 style="text-decoration: underline; text-align: center">Rare Units</h5>
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingFour">
            <a class="list-group-item" href="#">Organ Gun <span class="pull-right">120 pts</span></a>
            <a class="list-group-item" href="#">Flame Cannon <span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#">Gyrocopter <span class="pull-right">140 pts</span></a>
        </div>
    </div>
</div>
@stop

@section('nav-content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Options</h3>
    </div>
    <div class="panel-body">
        tester
    </div>
</div>
@stop

@section('nav-js')
<script src="/js/builder/fantasy/dwarfs.js"></script>
@stop