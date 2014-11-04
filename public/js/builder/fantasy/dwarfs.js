// Display Control
$(function() {

    var ui = {};
    var currentDisplay = '';
    var input = {};

    listen('bind', function() {

        ui.addCharacterDwarfLord = $('#add-character-dwarflord');
        ui.addCharacterRuneLord = $('#add-character-runelord');
        ui.addCharacterDaemonSlayer = $('#add-character-daemonslayer');
        ui.addCharacterThane = $('#add-character-thane');
        ui.addCharacterRuneSmith = $('#add-character-runesmith');
        ui.addCharacterMasterEngineer = $('#add-character-masterengineer');
        ui.addCharacterDragonSlayer = $('#add-character-dragonslayer');

        ui.addCoreDwarfWarriors = $('#add-core-dwarfwarriors');
        ui.addCoreQuarrellers = $('#add-core-quarrellers');
        ui.addCoreThunderers = $('#add-core-thunderers');
        ui.addCoreRangersWarriors = $('#add-core-rangerswarriors');
        ui.addCoreRangersQuarrellers = $('#add-core-rangersquarrellers');
        ui.addCoreRangersThunderers = $('#add-core-rangersthunderers');

        ui.addSpecialHammers = $('#add-special-hammerers');
        ui.addSpecialCannon = $('#add-special-cannon');
        ui.addSpecialBoltThrower = $('#add-special-boltthrower');
        ui.addSpecialMiners = $('#add-special-miners');
        ui.addSpecialIronbreakers = $('#add-special-ironbreakers');
        ui.addSpecialGrudgeThrowers = $('#add-special-grudgethrowers');
        ui.addSpecialSlayers = $('#add-special-slayers');

        ui.addRareOrganGun = $('#add-rare-organgun');
        ui.addRareFlameCannon = $('#add-rare-flamecannon');
        ui.addRareGyrocopter = $('#add-rare-gyrocopter');

        // Bind all of the click actions for adding units
        for(var key in ui) {
            if(ui.hasOwnProperty(key)) {
                ui[key].bind('click',function(e) {
                    e.preventDefault();
                    var pts = $(this).data('pts');
                    try {
                        $('#display-'+currentDisplay.data('id')).hide();
                        tell('cleanup-'+currentDisplay.data('id'));
                        // Reset current display for next time
                    }catch(Err){}
                    currentDisplay = $(this);
                    tell('bind-'+currentDisplay.data('id'));
                    $('#display-'+$(this).data('id')).show();
                });
            }
        }

    }); // END BIND


});


// Dwarf Lord JS
$(function() {

    var display = {};
    var input = {};
    var dwarfLord = {};
    var weaponRunes = {};
    var numWeaponRunes = parseInt(0);
    var armourRunes = {};
    var numArmourRunes = parseInt(0);

    // Dwarf Lord Variables
    dwarfLord.startPts = parseInt(145);
    dwarfLord.name = '';
    dwarfLord.option1 = '';
    dwarfLord.option1Pts = parseInt(0);
    dwarfLord.option2 = '';
    dwarfLord.option2Pts = parseInt(0);
    dwarfLord.shieldPts = parseInt(0);
    dwarfLord.weaponRunesPts = parseInt(0);
    dwarfLord.armourRunesPts = parseInt(0);


    listen('bind-character-dwarflord',function() {

        display.pts = $('#display-character-dwarflord-pts');
        display.weaponRunes = $('#display-character-dwarflord-weaponrunes');
        display.option1 = $('#display-character-dwarflord-equipment-option1');
        display.option2 = $('#display-character-dwarflord-equipment-option2');
        display.shield = $('#display-character-dwarflord-equipment-shield');

        input.name = $('#input-character-dwarflord-name');
        input.save = $('#input-character-dwarflord-save');
        input.option1 = $('input[name=input-character-dwarflord-option1]:radio');
        input.option2 = $('input[name=input-character-dwarflord-option2]:radio');
        input.shield = $('#input-character-dwarflord-shield');
        input.weaponRunes = $('input[name=input-character-dwarflord-weaponrunes-name]:checkbox');
        input.armourRunes = $('input[name=input-character-dwarflord-armourrunes-name]:checkbox');

        weaponRunes.a = $('#input-character-dwarflord-weaponrune-masterskalfblackmane');
        weaponRunes.b = $('#input-character-dwarflord-weaponrune-mastersmiting');
        weaponRunes.c = $('#input-character-dwarflord-weaponrune-masteralricmad');
        weaponRunes.d = $('#input-character-dwarflord-weaponrune-masterbreaking');
        weaponRunes.e = $('#input-character-dwarflord-weaponrune-masterflight');
        weaponRunes.f = $('#input-character-dwarflord-weaponrune-might');
        weaponRunes.g = $('#input-character-dwarflord-weaponrune-masterswiftness');
        weaponRunes.h = $('#input-character-dwarflord-weaponrune-snorri');
        weaponRunes.i = $('#input-character-dwarflord-weaponrune-fury');
        weaponRunes.j = $('#input-character-dwarflord-weaponrune-cleaving');
        weaponRunes.k = $('#input-character-dwarflord-weaponrune-masterkragg');
        weaponRunes.l = $('#input-character-dwarflord-weaponrune-grudge');
        weaponRunes.m = $('#input-character-dwarflord-weaponrune-striking');
        weaponRunes.n = $('#input-character-dwarflord-weaponrune-speed');
        weaponRunes.o = $('#input-character-dwarflord-weaponrune-fire');

        armourRunes.a = $('input-character-dwarflord-armourrune-mastersteel');
        armourRunes.b = $('input-character-dwarflord-armourrune-fortitude');
        armourRunes.c = $('input-character-dwarflord-armourrune-masteradamant');
        armourRunes.d = $('input-character-dwarflord-armourrune-mastergromril');
        armourRunes.e = $('input-character-dwarflord-armourrune-shielding');
        armourRunes.f = $('input-character-dwarflord-armourrune-resistance');
        armourRunes.g = $('input-character-dwarflord-armourrune-iron');
        armourRunes.h = $('input-character-dwarflord-armourrune-preservation');
        armourRunes.i = $('input-character-dwarflord-armourrune-stone');

        input.name.keyup(function() {
            dwarfLord.name = $(this).val();
        });
        input.option1.change(function() {
            dwarfLord.option1Pts = parseInt($(this).val());
            dwarfLord.option1 = $(this).data('name');
            if(dwarfLord.option1 == 'Nothing') display.option1.hide();
            else {
                display.option1.text(dwarfLord.option1);
                display.option1.show();
            }
            tell('update-dwarflord');
        });
        input.option2.change(function() {
            dwarfLord.option2Pts = parseInt($(this).val());
            dwarfLord.option2 = $(this).data('name');
            if(dwarfLord.option2 == 'Nothing') display.option2.hide();
            else {
                display.option2.text(dwarfLord.option2);
                display.option2.show();
            }
            tell('update-dwarflord');
        });
        input.shield.change(function() {
            if($(this).prop('checked')){
                dwarfLord.shieldPts = parseInt($(this).val());
                display.shield.show();
            }
            else {
                dwarfLord.shieldPts = parseInt(0);
                display.shield.hide();
            }
            tell('update-dwarflord');
        });
        input.weaponRunes.change(function() {
            if($(this).prop('checked')) {
                dwarfLord.weaponRunesPts += parseInt($(this).val());
                numWeaponRunes += 1;
            }
            else {
                dwarfLord.weaponRunesPts -= parseInt($(this).val());
                numWeaponRunes -= 1;
            }
            var key;
            if(numWeaponRunes > 2) {
                for(key in weaponRunes) {
                    if(weaponRunes.hasOwnProperty(key)) {
                        if(!weaponRunes[key].prop('checked')) weaponRunes[key].hide();
                    }
                }
            }
            else {
                for(key in weaponRunes) {
                    if(weaponRunes.hasOwnProperty(key)) {
                        weaponRunes[key].show();
                    }
                }
            }
            tell('update-dwarflord');
        });
        input.armourRunes.change(function() {
            if($(this).prop('checked')) {
                dwarfLord.armourRunesPts += parseInt($(this).val());
                numArmourRunes += 1;
            }
            else {
                dwarfLord.armourRunesPts -= parseInt($(this).val());
                numArmourRunes -= 1;
            }
            var key;
            if(numArmourRunes > 2) {
                for(key in armourRunes) {
                    if(armourRunes.hasOwnProperty(key)) {
                        if(!armourRunes[key].prop('checked')) armourRunes[key].hide();
                    }
                }
            }
            else {
                for(key in weaponRunes) {
                    if(weaponRunes.hasOwnProperty(key)) {
                        weaponRunes[key].show();
                    }
                }
            }
            tell('update-dwarflord');
        });

        tell('update-dwarflord');
    });

    listen('cleanup-character-dwarflord',function() {
        for(var key in dwarfLord) {
            if(dwarfLord.hasOwnProperty(key)) {
                dwarfLord[key] = parseInt(0);
            }
        }
        dwarfLord.startPts = parseInt(145);
        for(key in display) {
            if(display.hasOwnProperty(key)) {
                delete display[key];
            }
        }
        for(key in input) {
            if(input.hasOwnProperty(key)) {
                delete input[key];
            }
        }
    });

    // This function updates all the stats for the dwarf lord which allows for easy storage
    listen('update-dwarflord',function() {
        dwarfLord.save = input.save.text();
        display.pts.text(
            dwarfLord.startPts +
            dwarfLord.option1Pts +
            dwarfLord.option2Pts +
            dwarfLord.shieldPts +
            dwarfLord.weaponRunesPts +
            dwarfLord.armourRunesPts
        );

    });

});