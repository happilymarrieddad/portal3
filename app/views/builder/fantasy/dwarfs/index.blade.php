@extends('builder.nav')

@section('nav-list-title') Dwarf Units @stop

@section('nav-body') background-image: url('/images/dwarfs-background.jpg'); background-repeat: repeat;background-size: 100% @stop

@section('nav-list-group')
<div class="panel-group" id="unit_selection" role="tablist" aria-multiselectable="true" style="display: none">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#unit_selection" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 style="text-decoration: underline; text-align: center">Characters</h5>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingOne">
            <a class="list-group-item" href="#" id="add-character-dwarflord" data-pts="145" data-id="character-dwarflord">Dwarf Lord <span class="pull-right">145 pts</span></a>
            <a class="list-group-item" href="#" id="add-character-runelord" data-pts="140" data-id="character-runelord">Rune Lord <span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#" id="add-character-daemonslayer" data-pts="110" data-id="character-daemonslayer">Daemon Slayer <span class="pull-right">110 pts</span></a>
            <a class="list-group-item" href="#" id="add-character-thane" data-pts="65" data-id="character-thane">Thane <span class="pull-right">65 pts</span></a>
            <a class="list-group-item" href="#" id="add-character-runesmith" data-pts="70" data-id="character-runesmith">Runesmith <span class="pull-right">70 pts</span></a>
            <a class="list-group-item" href="#" id="add-character-masterengineer" data-pts="70" data-id="character-masterengineer">Master Engineer <span class="pull-right">70 pts</span></a>
            <a class="list-group-item" href="#" id="add-character-dragonslayer" data-pts="50" data-id="character-dragonslayer">Dragon Slayer <span class="pull-right">50 pts</span></a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#unit_selection" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 style="text-decoration: underline; text-align: center">Core Units</h5>
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingTwo">
            <a class="list-group-item" href="#" id="add-core-dwarfwarriors" data-pts="80" data-id="core-dwarfwarrior">Dwarf Warriors <span class="pull-right">80 pts</span></a>
            <a class="list-group-item" href="#" id="add-core-quarrellers" data-pts="110" data-id="core-quarrellers">Quarrellers <span class="pull-right">110 pts</span></a>
            <a class="list-group-item" href="#" id="add-core-thunderers" data-pts="140" data-id="core-thunderers">Thunderers <span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#" id="add-core-rangerswarriors" data-pts="110" data-id="core-rangerswarriors">Rangers Warriors<span class="pull-right">110 pts</span></a>
            <a class="list-group-item" href="#" id="add-core-rangersquarrellers" data-pts="110" data-id="core-quarrellers">Rangers Quarrellers<span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#" id="add-core-rangersthunderers" data-pts="140" data-id="core-thunderers">Rangers Thunderers<span class="pull-right">140 pts</span></a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#unit_selection" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 style="text-decoration: underline; text-align: center">Special Units</h5>
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingThree">
            <a class="list-group-item" href="#" id="add-special-hammers" data-pts="60" data-id="core-hammerers">Hammerers <span class="pull-right">60 pts</span></a>
            <a class="list-group-item" href="#" id="add-special-cannon" data-pts="90" data-id="core-cannon">Cannon <span class="pull-right">90 pts</span></a>
            <a class="list-group-item" href="#" id="add-special-boltthrower" data-pts="45" data-id="core-boltthrower">Bolt Thrower <span class="pull-right">45 pts</span></a>
            <a class="list-group-item" href="#" id="add-special-miners" data-pts="55" data-id="core-miners">Miners <span class="pull-right">55 pts</span></a>
            <a class="list-group-item" href="#" id="add-special-ironbreakers" data-pts="80" data-id="core-ironbreakers">Ironbreakers <span class="pull-right">80 pts</span></a>
            <a class="list-group-item" href="#" id="add-special-grudgethrower" data-pts="80" data-id="core-grudgethrower">Grudge Thrower <span class="pull-right">80 pts</span></a>
            <a class="list-group-item" href="#" id="add-special-slayers" data-pts="55" data-id="core-slayers">Slayers <span class="pull-right">55 pts</span></a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#unit_selection" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h5 style="text-decoration: underline; text-align: center">Rare Units</h5>
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse list-group" role="tabpanel" aria-labelledby="headingFour">
            <a class="list-group-item" href="#" id="add-rare-organgun" data-pts="120" data-id="core-organgun">Organ Gun <span class="pull-right">120 pts</span></a>
            <a class="list-group-item" href="#" id="add-rare-flamecannon" data-pts="140" data-id="core-flamecannon">Flame Cannon <span class="pull-right">140 pts</span></a>
            <a class="list-group-item" href="#" id="add-rare-gyrocopter" data-pts="140" data-id="core-gyrocopter">Gyrocopter <span class="pull-right">140 pts</span></a>
        </div>
    </div>
</div>
@stop

@section('nav-content')

<div class="panel panel-primary" id="army_information">
    <div class="panel-heading">
        <h3 class="panel-title">Army Information</h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label for="army_name">Army Name</label>
            <input type="text" id="army_name" name="army_name" class="form-control" />
            <input type="text" id="army_type" value="dwarfs" hidden />
            <span class="help-block">Please select a name for your army.</span>
        </div><hr>
        <div class="form-group">
            <button id="army_information_save" class="btn btn-primary">Start</button>
        </div>
    </div>
</div>


<div class="panel panel-primary" id="options" style="display: none">
    <div class="panel-heading">
        <h3 class="panel-title">Options</h3>
    </div>
    <div class="panel-body" id="display-unit-options">

        <!-- Characters -->
        <div id="display-character-dwarflord" style="display: none">
            <form class="form">
                <table class="table"><legend>Dwarf Lord<span class="pull-right" id="display-character-dwarflord-pts">0</span></legend></table>
                <div class="form-group">

                    <!-- Name -->
                    <label for="input-character-dwarflord-name">Name</label>
                    <input id="input-character-dwarflord-name" name="input-character-dwarflord-name" type="text" class="form-control" /><br />

                    <!-- Stats -->
                    <table class="table table-bordered">
                        <thead><tr>
                            <th>Name</th>
                            <th>M</th>
                            <th>Ws</th>
                            <th>Bs</th>
                            <th>S</th>
                            <th>T</th>
                            <th>W</th>
                            <th>I</th>
                            <th>A</th>
                            <th>Ld</th>
                            <th>Sv</th>
                        </tr></thead>
                        <tbody><tr>
                            <td>Dwarf Lord</td>
                            <td>3</td>
                            <th>7</th>
                            <th>4</th>
                            <th>4</th>
                            <th>5</th>
                            <th>3</th>
                            <th>4</th>
                            <th>4</th>
                            <th>10</th>
                            <th><span id="input-character-dwarflord-save">4+</span></th>
                        </tr></tbody>
                    </table>

                    <!-- Equipment -->
                    <h4>
                        Equipment:<br />
                        <h6>
                        <span>Hand Weapon <br /></span>
                        <span>Gromril Armour <br /></span></h6>
                        <h6 id="display-character-dwarflord-equipment-option1" style="display:none"></h6>
                        <h6 id="display-character-dwarflord-equipment-option2" style="display:none"></h6>
                        <h6 id="display-character-dwarflord-equipment-shield" style="display:none">Shield</h6>
                    </h4><br />

                    <!-- Options -->
                    <h4>Options 1:<br /><h6>
                            <label>Nothing</label>
                            <input type="radio" value="0" name="input-character-dwarflord-option1" id="input-character-dwarflord-option1-nothing" data-name="Nothing" checked/><br />
                            <label>Great Weapon</label>
                            <input type="radio" value="6" name="input-character-dwarflord-option1" id="input-character-dwarflord-option1-greatweapon" data-name="Great Weapon" /><br />
                            <label>Pistol</label>
                            <input type="radio" value="10" name="input-character-dwarflord-option1" id="input-character-dwarflord-option1-pistol" data-name="Pistol" /><br /><br />

                        </h6>Options 2:<h6>
                            <label>Nothing</label>
                            <input type="radio" value="0" name="input-character-dwarflord-option2" id="input-character-dwarflord-option2-nothing" data-name="Nothing" checked/><br />
                            <label>Crossbow</label>
                            <input type="radio" value="10" name="input-character-dwarflord-option2" id="input-character-dwarflord-option2-crossbow" data-name="Crossbow" /><br />
                            <label>Dwarf Handgun</label>
                            <input type="radio" value="15" name="input-character-dwarflord-option2" id="input-character-dwarflord-option2-dwarfhandgun" data-name="Dwarf Handgun" /><br />

                        </h6>Options 3:<h6>
                            <label>Shield</label>
                            <input value="3" id="input-character-dwarflord-shield" type="checkbox" data-name="Shield"/><br />


                        </h6>Weapon Runes:<h6 id="display-character-dwarflord-weaponrunes">
                            <div id="display-character-dwarflord-weaponrune-masterskalfblackmane">
                            <label>Master Rune of Skalf Blackhammer</label>
                            <input value="75" id="input-character-dwarflord-weaponrune-masterskalfblackmane" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-mastersmiting">
                            <label>Master Rune of Smiting</label>
                            <input value="70" id="input-character-dwarflord-weaponrune-mastersmiting" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-masteralricmad">
                            <label>Master Rune of Alric the Mad</label>
                            <input value="50" id="input-character-dwarflord-weaponrune-masteralricmad" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-masterbreaking">
                            <label>Master Rune of Breaking</label>
                            <input value="45" id="input-character-dwarflord-weaponrune-masterbreaking" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-masterflight">
                            <label>Master Rune of Flight</label>
                            <input value="40" id="input-character-dwarflord-weaponrune-masterflight" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-might">
                            <label>Rune of Might</label>
                            <input value="25" id="input-character-dwarflord-weaponrune-might" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-masterswiftness">
                            <label>Master Rune of Swiftness</label>
                            <input value="25" id="input-character-dwarflord-weaponrune-masterswiftness" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-snorri">
                            <label>Rune of Snorri Spangelhelm</label>
                            <input value="25" id="input-character-dwarflord-weaponrune-snorri" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-fury">
                            <label>Rune of Fury</label>
                            <input value="25" id="input-character-dwarflord-weaponrune-fury" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-cleaving">
                            <label>Rune of Cleaving</label>
                            <input value="20" id="input-character-dwarflord-weaponrune-cleaving" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-masterkragg">
                            <label>Master Rune of Kragg the Grim</label>
                            <input value="20" id="input-character-dwarflord-weaponrune-masterkragg" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-grudge">
                            <label>Grudge Rune</label>
                            <input value="15" id="input-character-dwarflord-weaponrune-grudge" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-striking">
                            <label>Rune of Striking</label>
                            <input value="10" id="input-character-dwarflord-weaponrune-striking" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-speed">
                            <label>Rune of Speed</label>
                            <input value="5" id="input-character-dwarflord-weaponrune-speed" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-weaponrune-fire">
                            <label>Rune of Fire</label>
                            <input value="5" id="input-character-dwarflord-weaponrune-fire" name="input-character-dwarflord-weaponrunes-name" type="checkbox"/><br />
                            </div>
                        </h6>Armour Runes:<h6>
                            <div id="display-character-dwarflord-armourrune-mastersteel">
                                <label>Master Rune of Steel</label>
                                <input value="50" id="input-character-dwarflord-armourrune-mastersteel" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-fortitude">
                                <label>Rune of Fortitude</label>
                                <input value="50" id="input-character-dwarflord-armourrune-fortitude" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-masteradamant">
                                <label>Master Rune of Adamant</label>
                                <input value="45" id="input-character-dwarflord-armourrune-masteradamant" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-mastergromril">
                                <label>Master Rune of Gromril</label>
                                <input value="25" id="input-character-dwarflord-armourrune-mastergromril" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-shielding">
                                <label>Rune of Shielding</label>
                                <input value="25" id="input-character-dwarflord-armourrune-shielding" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-resistance">
                                <label>Rune of Resistance</label>
                                <input value="25" id="input-character-dwarflord-armourrune-resistance" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-iron">
                                <label>Rune of Iron</label>
                                <input value="15" id="input-character-dwarflord-armourrune-iron" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-preservation">
                                <label>Rune of Preservation</label>
                                <input value="15" id="input-character-dwarflord-armourrune-preservation" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                            <div id="display-character-dwarflord-armourrune-stone">
                                <label>Rune of Stone</label>
                                <input value="5" id="input-character-dwarflord-armourrune-stone" name="input-character-dwarflord-armourrunes-name" type="checkbox"/><br />
                            </div>
                        </h6>
                    </h4>

                </div>
            </form>
        </div>
        <div id="display-character-runelord" style="display: none">

        </div>
        <div id="display-character-daemonslayer" style="display: none">

        </div>
        <div id="display-character-thane" style="display: none">

        </div>
        <div id="display-character-runesmith" style="display: none">

        </div>
        <div id="display-character-masterengineer" style="display: none">

        </div>
        <div id="display-character-dragonslayer" style="display: none">

        </div>

        <!-- Core Units -->
        <div id="display-core-dwarfwarriors" style="display: none">

        </div>
        <div id="display-core-quarrellers" style="display: none">

        </div>
        <div id="display-core-thunderers" style="display: none">

        </div>
        <div id="display-core-rangerswarriors" style="display: none">

        </div>
        <div id="display-core-rangersquarrellers" style="display: none">

        </div>
        <div id="display-core-rangersthunderers" style="display: none">

        </div>

        <!-- Special Units -->
        <div id="display-special-hammerers" style="display: none">

        </div>
        <div id="display-special-cannon" style="display: none">

        </div>
        <div id="display-special-boltthrower" style="display: none">

        </div>
        <div id="display-special-miners" style="display: none">

        </div>
        <div id="display-special-ironbreakers" style="display: none">

        </div>
        <div id="display-special-grudgethrowers" style="display: none">

        </div>
        <div id="display-special-slayers" style="display: none">

        </div>

        <!-- Rare Units -->
        <div id="display-rare-organgun" style="display: none">

        </div>
        <div id="display-rare-flamecannon" style="display: none">

        </div>
        <div id="display-rare-gyrocopter" style="display: none">

        </div>

    </div>
</div>
@stop

@section('nav-js')
<script src="/js/builder/fantasy/dwarfs.js"></script>
@stop