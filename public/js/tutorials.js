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
    var que = {}, debug = (location.hash == '#debug');

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

    listen('start.bind', function() {

        button.error = $('#alert-error');
        button.loading = $('#alert-loading');
        button.success = $('#alert-success');

        button.error.bind('click', function() {
            $(this).hide();
        });
        button.loading.bind('click', function() {
            $(this).hide();
        });
        button.success.bind('click', function() {
            $(this).hide();
        });

    });

    listen('alert.error', function(val) {
        tell('alert.hide');
        button.error.show();
        button.error.text(val);
        setTimeout(function() {
            button.error.fadeOut('fast');
        }, 4000);
    });

    listen('alert.loading', function(val) {
        tell('alert.hide');
        button.loading.show();
        button.loading.text(val);
        setTimeout(function() {
            button.loading.fadeOut('fast');
        }, 4000);
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


// Article System
$(function () {

    var list = {};
    var article;

    listen('start.bind', function() {

        list.ce = $('#computer-engineering li a');
        list.se = $('#software-engineering li a');
        article = $('#articles-page');

        list.ce.bind('click', function(e) {
            e.preventDefault();
            tell('alert.loading', 'Loading article ' + $(this).html());
            function res(res) {
                if(!res[0]) tell('alert.error', res[1]);
                else
                {
                    article.html(res[1]);
                    tell('alert.success', 'Article loaded successfully!');
                }
            }
            var map = {
                id : $(this).data('id'),
                name : $(this).html()
            };
            tell('server.get', ['computer/show',map,res]);
        });

        list.se.bind('click', function(e) {
            e.preventDefault();
            tell('alert.loading', 'Loading article ' + $(this).html());
            function res(res) {
                if(!res[0]) tell('alert.error', res[1]);
                else
                {
                    article.html(res[1]);
                    tell('alert.success', 'Article loaded successfully!');
                }
            }
            var map = {
                id : $(this).data('id'),
                name : $(this).html()
            };
            tell('server.get', ['software/show',map,res]);
        });



    });




});


// Startup
$(function () {
    tell('start.bind');
    tell('alert.success', 'SPA loaded successfully!');
});
