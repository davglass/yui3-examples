<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>The Ant Cloud</title>
    <script type="text/javascript" src="http://yui.yahooapis.com/combo?3.0.0b1/build/yui/yui-min.js"></script>
    
    
    <script type="text/javascript">
YUI({
    debug: true,
    filter: 'raw'
}).use('console','dd','dd-plugin','dd-constrain',function(Y, result) {

    var yconsole = new Y.Console();
    yconsole.after('render', function(e) {
        this.get('boundingBox').plug(Y.Plugin.Drag);
        this.get('boundingBox').dd.plug(Y.Plugin.DDConstrained, {
            constrain2node: '#dd-demo-body'});
    });
    yconsole.render('#dd-demo-body');
    
    var dd1 = new Y.DD.Drag({
        node: '#dd-demo-menuItem'
    }).plug(Y.Plugin.DDConstrained, {
        constrain2node: '#dd-demo-menu'
    });

    var dd2 = new Y.DD.Drag({
        node: '#dd-demo-bodyItem'
    }).plug(Y.Plugin.DDConstrained, {
        constrain2node: '#dd-demo-body'
    });

    var dd3 = new Y.DD.Drag({
        node: '#dd-demo-adItem'
    }).plug(Y.Plugin.DDConstrained, {
        constrain2node: '#dd-demo-ad'
    });

});

    </script>
    
    <style type="text/css">

.dd-demo {
    position: relative;
    text-align: center;
    color: #fff;
    cursor: move;
    height: 100px;
    width: 100px;
    padding: 0;
    margin: 0;
}

.dd-demo div {
    border: 1px solid black;
    height: 98px;
    width: 98px;
}

#dd-demo-canvas
{
	position: relative;
    margin-left: auto;
	margin-right: auto;
	width: 1000px;
}

#dd-demo-body
{
	position:absolute;
	top: 200px;
	left: 0px;
	height: 800px;
	width: 850px;
    background-color: #004C6D;
}

#dd-demo-menu 
{
	position:absolute;
	top: 0px;
	height: 200px;
	width: 1000px;
    background-color: #CDCDCD;
}

#dd-demo-ad 
{
	position:absolute;
	top: 200px;
	right: 0px;
	height: 800px;
	width: 150px;
    background-color: #8DD5E7;
}

#dd-demo-bodyItem { 
    background-color: #004C6D;
    top:0px;
    left:0px;
    color: #000;
}

#dd-demo-menuItem { 
    background-color: #CDCDCD;
    top:0px;
    left:0px;
    color: #000;
}

#dd-demo-adItem {
    background-color: #8DD5E7;
    top:0px;
    left:0px;
}

    </style>

</head>
<body class="yui-skin-sam">
    <div id="dd-demo-canvas">
        <div id="dd-demo-menu">
            <div id="dd-demo-menuItem" class="dd-demo">
                <div>
                    1</div>
            </div>
        </div>
        <div id="dd-demo-ad">
            <div id="dd-demo-adItem" class="dd-demo">
                <div>
                    3</div>
            </div>
        </div>
        <div id="dd-demo-body">
            <div id="dd-demo-bodyItem" class="dd-demo">
                <div>
                    2</div>
            </div>
        </div>
    </div>
</body>
</html>
