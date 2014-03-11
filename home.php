
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Cura Events</title>
	<link href="css/fixed-positioning.css" rel="stylesheet" type="text/css" />
	<link href="css/main2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquerymin.js"></script>
	<style>
	a.hover{ text-decoration: none; color: black; }
	a{ text-decoration: none; color: black; }
	@font-face{
  	src: url('./font/font2.woff');
  	font-family: myfont;
	}
	body{
		font-family: myfont;
	}
	html{
		overflow-y: hidden;
	}

	</style>
	<script>
	// function setEvents() {
	// 	this.id = 'keydown';
	// 	var eventHandler = detectEvent;
	// 	document['on'+this.id] = eventHandler;
	// }

	// function detectEvent(e) {
	// 	var evt = e || window.event;
	// 	if ( evt.keyCode == 40 ){
	// 		window.scrollto(0,500);
	// }
// 	return document.defaultAction;
// }
	var x = 10000;
	function f() {
		x += 10000 / 100;
		// if (x >= 1000 + 100)
			// clearInterval (y);
		window.scrollTo ( 0 , x );
	}

	if (window.localStorage.getItem("home_loaded") == "1") {
		scrollTo ( 0 , 10000);
		setInterval(f, 50);
	}
	else {
		// addEventListener ( "keyup" , function  (argument) { window.scrollTo ( 0 , 0); });
		var y;
		x = 0;
		window.localStorage.setItem("home_loaded" , "1");
		addEventListener ( "keydown" , function  () {var y = setInterval ( f , 50 );});
		addEventListener ( "click" , function  () {var y = setInterval ( f , 50 );});
		addEventListener ( "keypress" , function  () {var y = setInterval ( f , 50 );});
	
	}
	// window.addEventListener("click", function() { window.location='events.php';})
	</script>
</head>

<body>
	<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>

	<div id="intro" data-0="opacity:0.9;top:10%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0.7;top:-10%;transform:rotate(90deg);">
		<h1>Cura Events</a></h1>
		<h2>The most awaited Tech Fest of the year.</h2>
		<p>Enter The Domain.</p>
		<p class="arrows">▼&nbsp;▼&nbsp;▼</p>
	</div>


	<div id="one-one" class="one" data-500="opacity[quadratic]:0; top:-10%; left:-10%;" data-1500="opacity:0.8; top:51%;left:50%;" data-1700="" data-2000="left:30%">
		<p><a href="./events.php">Android Development</a></p>
	</div>
	<div id="one-two" class="one" data-500="opacity[quadratic]:0;left:110%;top:-10%;" data-1500="opacity:0.8;top:51%;left:35%;" data-2000="left:12%;">
		<p><a href="./events.php">Cloud Computing</a></p>
	</div>
	<div id="one-three" class="one" data-500="opacity[quadratic]:0;left:-10%;top:110%;" data-1500="opacity:0.8;left:50%;top:35%;" data-1800="" data-2000="left:30%">
		<p><a href="./events.php">Game Programming</a></p>
	</div>
	<div id="one-four" class="one" data-500="opacity[quadratic]:0;left:110%;top:110%;" data-1500="opacity:0.8;left:35%;top:35%;" data-1600="" data-2000="left:12%;">
		<p><a href="./events.php">Web Development</a></p>
	</div>


	<div id="two-one" class="one" data-2000="opacity[quadratic]:0; top:-10%; left:-10%;" data-3000="opacity:0.8; top:51%;left:50%;" data-3500="left:80%">
		<p></p>
	</div>
	<div id="two-two" class="one" data-2000="opacity[quadratic]:0;left:110%;top:-10%;" data-3000="opacity:0.8;top:51%;left:35%;" data-3200="" data-3500="left:62%;">
		<p>This is div number 2</p>
	</div>
	<div id="two-three" class="one" data-2000="opacity[quadratic]:0;left:-10%;top:110%;" data-3000="opacity:0.8;left:50%;top:35%;" data-3100="" data-3500="left:80%">
		<p>This is div number 3</p>
	</div>
	<div id="two-four" class="one" data-2000="opacity[quadratic]:0;left:110%;top:110%;" data-3000="opacity:0.8;left:35%;top:35%;" data-3300="" data-3500="left:62%;">
		<p>This div number 4</p>
	</div>



	<div id="scrollbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>

	<script type="text/javascript" src="js/skrollr.min.js"></script>

	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'set',
		easing: {
			WTF: Math.random,
			inverted: function(p) {
				return 1-p;
			}
		}
	});
	</script>	
</body>
