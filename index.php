<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Cura Events | IIIT-H</title>
	
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<script src="js/jquerymin.js"></script>
	<script src="js/jqueryui.js"></script>	
	<script src="js/sidetounlock.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var pepe = $.fn.fullpage({
				slidesColor: ['black', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage']
			});
			
		});
function redirect()
  {

  window.location.assign("home.php");
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

	background-color: rgb(240,200,200);

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
	<p>Its gonna be an all new adventure for you,<br />and it starts now.</p><br /><br />
<h1 id="begin" style="text-shadow: none;" onclick="redirect()">Let's begin</h1>
			
</div>
</div>


</body>
</html>