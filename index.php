<html>
<head>
	<title>
		Cura Events | IIIT-Hyderabad
	</title>

<link rel="icon" type="png" href="favicon.png"/>
<style>
@font-face{
  src: url('font/font2.woff');
  font-family: myfont;
}
body {
	background: url('img/index_back.jpg') no-repeat center center fixed;
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='img/index_back.jpg', sizingMethod='scale')";
    /* to prevent the selection of text in this page */
    -moz-user-select:none;
    -webkit-user-select:none;
    user-select:none;
    font-family: myfont;
    cursor:default;
}

</style>
<link rel="stylesheet" href="css/jbclock.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jbclock.js"></script>
<script src="js/jquerymin.js"></script>
<script src="js/jqueryui.js"></script>	
<script type="text/javascript">
$(document).ready(function() {

	dd=new Date();
	var nn=parseInt(dd.getTime()/1000).toString();
	JBCountDown({
                    secondsColor : "#ffdc50",
                    secondsGlow  : "#000000",
                    
                    minutesColor : "#9cdb7d",
                    minutesGlow  : "#000000",
                    
                    hoursColor   : "#378cff",
                    hoursGlow    : "#000000",
                    
                    daysColor    : "#ff6565",
                    daysGlow     : "#000000",
                    
                    startDate   : "0008534400",
                    endDate     : "1496310400",
                    now         : nn
                });

});
</script>
<style>
.menubar {
	text-decoration: none;
	list-style-type: none;
	font-family: myfont;
}
li {
	display:inline-block;
	padding:30px;
	font-weight: 500;
	padding-left: 50px;
	padding-right: 50px;
	
}
li:hover {
	background-color: rgba(0,0,0, 0.8);
	color:white;
	/*color:black;*/
}
#header {
	position: relative;
	background-color: rgba(255,255,255,0.4);
	top:0px;
	left:0px;
	right:0px;
	text-align: center;
	box-shadow: 0px 0px 10px black;
}
a:active, a:visited, a:link {
	color:black;

}
#content {
	margin-top: 70px;
    text-align: center;
}
#footer {
	position: fixed;
	margin: 0 auto;
	background-color: rgba(255,255,255,0.3);
	box-shadow: 0px 0px 10px black;
	font-weight: 500;
	bottom:0px;
	width: 100%;
	left:0px;
	right:0px;
	padding: 10px;
	text-align: center;
	font-family: myfont;
	text-shadow: 0px 0px 1px black;
}
.fb-like {
vertical-align: middle;
}
#logo {
    width:45%;
    height:auto;
    padding:20px;
}
</style>
</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="header">
<ul class="menubar">
<a href="home.php"><li>Home</li></a>
<a href="events.php"><li>Events</li></a>
<a href="updates.php"><li>Updates</li></a>
<a href="contact.php"><li>Contact us</li></a>
<a href="login.php"><li>Admin</li></a>

</ul>
</div>

<div id="content">
<img src="img/curalogo.png" id="logo" />
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

</div>
<div id="footer">
Cura Events Official website | <div class="fb-like" data-href="https://www.facebook.com/Curaevents" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
</div>

</body>
</html>