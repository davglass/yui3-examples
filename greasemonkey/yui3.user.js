// ==UserScript==
// @name            YUI3 Loader
// @namespace       http://blog.davglass.com/files/yui3/greasemonkey/
// @description     Loads YUI3
// @author          Dav Glass (davglass@gmail.com)
// @include         http://*
// @version			0.1
// @date			2009/07/24 
// ==/UserScript==

(function() {
	var uw = unsafeWindow,
        YUI, script, head,
        YUILoaded = function() {
            YUI = uw.YUI;
            YUI.config.doc = uw.document;
            YUI.config.win = uw;
            YUI().use('node', 'dd-drag', function(Y) {
                var body = Y.get('body');
                Y.log(body);
                body.setStyle('backgroundColor', 'red');
                var h = Y.all('h2');
                h.setStyle('cursor', 'move');
                h.each(function(v) {
                    new Y.DD.Drag({
                        node: v
                    });
                });
            });
        };
    
    if (!uw.YUI) {
        script = uw.document.createElement('script');
        script.src = 'http:/'+'/yui.yahooapis.com/3.0.0b1/build/yui/yui-min.js';
        script.onload = YUILoaded;
        head = uw.document.getElementsByTagName('head')[0];
        head.appendChild(script);

    }

})();
