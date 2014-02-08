<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Cura Events | IIIT-H</title>

	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<script src="js/jquerymin.js"></script>
<script src="js/jqueryui.js"></script>	
<script src="js/sidetounlock.js"></script>

<link rel="stylesheet" href="css/jbclock.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jbclock.js"></script>


<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var pepe = $.fn.fullpage({
		slidesColor: ['black', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
			anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage']
	});
	dd=new Date();
	var nn=parseInt(dd.getTime()/1000).toString();
	JBCountDown({
                    secondsColor : "#ffdc50",
                    secondsGlow  : "none",
                    
                    minutesColor : "#9cdb7d",
                    minutesGlow  : "none",
                    
                    hoursColor   : "#378cff",
                    hoursGlow    : "none",
                    
                    daysColor    : "#ff6565",
                    daysGlow     : "none",
                    
                    startDate   : "0008534400",
                    endDate     : "1496310400",
                    now         : nn
                });

});
function redirect()
{

	window.location.replace("index.html#firstpage/1");
}

</script>

<style>

div {
	font-family: myfont;
}
.slide#sl1 {
	color:white;
}
h1 {
	text-shadow: 3px 3px 5px #8a8a8a;
}
.slide#sl4 {

	/*background-color: rgb(240,200,200);*/
    background-image: url(../img/maingbg.png);

}
.slide#sl4 {
	text-shadow: 0px 0px 0px;
}
.slide#sl2 {
	background-color: #ccdcff;
}
.slide#sl3 {
	background-color: #7baabe;
}
p {
	font-size: 3.2em;
}
body {
	-webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    font-smoothing: antialiased;
    /* to prevent the selection of text in this page */
    -moz-user-select:none;
    -webkit-user-select:none;
    user-select:none;

    cursor:default;
}
</style>
</head>
<body>

<div class="section active" id="section0">
<div class="slide active">
<div class="wrap" id="sl1">
<h1 style="color:white">Cura Events</h1><br /><br /><br />
<h2 style="color:#dddddd">IIIT Hyderbad</h2><br /><br /><br />
<p style="color:white; font-size:1em;">Temporary Note: Press Right button on keyboard to move.</p>
</div>
</div>
<div class="slide" id="sl2">
<h1>3 days of awesomeness</h1>
</div>
<div class="slide" id="sl3">
<h1>200+ hours of intense competition</h1>
</div>
<div class="slide" id="sl4">




	
<div class="clock">
            <!-- Days -->
            <div class="clock_days">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_days" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
            </div>
            <!-- Days -->
            <!-- Hours -->
            <div class="clock_hours">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_hours" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
            </div>
            <!-- Hours -->
            <!-- Minutes -->
            <div class="clock_minutes">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_minutes" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_minutes">Minutes</p>
                    </div>
                </div>
            </div>
            <!-- Minutes -->
            <!-- Seconds -->
            <div class="clock_seconds">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_seconds" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
            </div>
            <!-- Seconds -->
        </div>







<h1 id="begin" style="text-shadow: none;" onclick="redirect()">Let's begin</h1>

</div>
</div>


</body>
</html>
