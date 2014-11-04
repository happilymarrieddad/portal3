/* Javascript for Survey Program */
if (!String.prototype.fill) {
    String.prototype.fill = function () {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function (match, number) {
            return typeof args[number] != 'undefined'
                ? args[number] : match;
        });
    };
}

// Listen/Tell System
(function ($) {
    var que = {}, debug = true; //(location.hash == '#debug');

    function log() {
        if (!debug) return;
        if (console && console.log) console.log(arguments);
    }

    function tell(e, p) {
        p = p || null;
        if (!que.hasOwnProperty(e)) return log(e, 'nothing listening');
        $.each(que[e], function (i, o) {
            var v = o(p) || null;
            log('event', e, 'with', p, '=> ' + v);
        });
        return true;
    }

    function listen(e, obj) {
        if (typeof e == 'object') {
            $.each(e, function (i, ev) {
                listen(ev, obj);
            });
        } else if (typeof e == 'string') {
            if (!que.hasOwnProperty(e)) que[e] = [];
            que[e].push(obj);
        } else {
            log('Que Reject', e);
        }
    }

    // Export to global
    window.tell = tell;
    window.listen = listen;
    window.debug = debug;

    if (debug) window.que = que;


}(jQuery));

// Server jQuery
(function($){
    listen('server.get', function (cfg) {
        $.ajax({
            dataType : 'json',
            url      : cfg[0],
            data     : cfg[1],
            method   : 'get'
        }).always(cfg[2]);
        return "getting package from server";
    });

    listen('server.post', function (cfg) {
        $.ajax({
            dataType : 'json',
            url      : cfg[0],
            data     : cfg[1],
            method   : 'post'
        }).always(cfg[2]);
        return "posted package to server";
    });
}(jQuery));


// Message System
$(function () {

    var button = {};
    var total = $('#input-total');

    listen('bind', function() {

        button.error = $('#alert-error');
        button.loading = $('#alert-loading');
        button.success = $('#alert-success');

        button.error.bind('click', function() {
            $(this).hide();
            total.focus();
        });
        button.loading.bind('click', function() {
            $(this).hide();
            total.focus();
        });
        button.success.bind('click', function() {
            $(this).hide();
            total.focus();
        });

    });

    listen('alert.error', function(val) {
        tell('alert.hide');
        button.error.show();
        button.error.text(val);
    });

    listen('alert.loading', function(val) {
        tell('alert.hide');
        button.loading.show();
        button.loading.text(val);
    });

    listen('alert.success', function(val) {
        tell('alert.hide');
        button.success.show();
        button.success.text(val);
        setTimeout(function() {
            button.success.fadeOut('fast');
        }, 4000);
    });

    listen('alert.hide', function() {
        button.loading.hide();
        button.error.hide();
        button.success.hide();
    });
});

// Page Controller
$(function() {

    var ui = {};

    listen('bind',function() {

        ui.unitSelection = $('#unit_selection');
        ui.options = $('#options');
        ui.armyInformation = $('#army_information');
        ui.armyInformationSave = $('#army_information_save');
        ui.organizationInformation = $('#organization_information');

        ui.armyInformationSave.bind('click',function(e) {
            e.preventDefault();
            tell('army-information-save');
        });

    });

    listen('army-information-save',function() {

        tell('alert.loading','Saving information...');

        function callback(res) {
            if(res[0]) {
                tell('alert.success', res[1]);
                tell('army_id',res[2]);
                ui.armyInformation.hide();
                ui.options.show();
                ui.unitSelection.show();
                ui.organizationInformation.show();
            }
            else tell('alert.error', res[1]);
        }

        var map = {
            a:$('#army_name').val(),
            b:$('#input-pts').val(),
            c:$('#display-used').val(),
            d:$('#army_type').val()
        };

        tell('server.post',['/army/store',map,callback]);
    });
    listen('show-army-information',function() {
        ui.options.hide();
        ui.unitSelection.hide();
        ui.organizationInformation.hide();
        ui.armyInformation.show();
    });

});

// Points Controller
$(function() {

    var input = {};
    var display = {};

    listen('bind', function() {

        input.totalPts = $('#input-pts');
        display.usedPts = $('#display-used');
        display.leftPts = $('#display-left');

        display.usedCharacters = $('#display-characters');
        display.usedCore = $('#display-core');
        display.usedSpecial = $('#display-special');
        display.usedRare = $('#display-rare');

        input.totalPts.keyup(function() {
            var val = $(this).val();
            if(isNaN(val)) {
                tell('alert.error','You must enter a number for total points.');
                $(this).val('');
                $(this).focus();
            }
            else {
                tell('adjust-pts');
            }
            if($(this).val() < 1) {
                display.leftPts.val(0);
            }
        });

    });

    listen('start',function() {

    });

    listen('adjust-pts',function() {
        display.leftPts.val(parseFloat(input.totalPts.val()) - parseFloat(display.usedPts.val()));
        if(parseFloat(display.leftPts.val()) < 0) {
            tell('alert.error','Your total points are less than points used.');
        } else tell('alert.hide');
    });

    listen('adjust-used',function(val) {
        var pts = parseInt(display.usedPts.val());
        pts += val;
        display.usedPts.val(pts);
        tell('adjust-pts');
    });

});


