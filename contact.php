<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cura Events | IIIT Hyderabad</title>
	<script type="text/javascript" src="js/jquerymin.js"></script>
	<link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
  <link href='css/onepage-scroll.css' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
  
<link rel="stylesheet" href="css/meny.css" />
<style>
  @font-face{
  src: url('font2.woff');
  font-family: myfont;
}
    html {
      height: 100%;
    }
    body {
      background: #E2E4E7;
      padding: 0;
      text-align: center;
      font-family: myfont;
      position: relative;
      margin: 0;
      height: 100%;
      -webkit-font-smoothing: antialiased;
    }
    
    
	</style>
  <link rel="stylesheet" href="css/style_home.css" />
	<script>
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600
      });
		});
		
	</script>
<style>
body {
	background-color: #8a8a8a;

}
#contentFlow {
	max-width: 60%;
}
.btn-cura {
	width:100%;
  background-color: rgba(0,0,0,0.4);
  color:white;
  font-size: 1.5em;
margin:7px;
color:white;
text-decoration: none;
box-shadow: 0px 0px 10px white;
}
.btn-cura:hover {
  background-color: rgba(255,255,255,0.9);
  color:black;
}
.btn-cura a{
  color:#aaaaaa;
}
a {
	color:black;
}
ul {
  list-style-image: none;
}
.meny {
  background: url('media.jpg');
}
.meny-arrow {
	color:white;
}
.fb-like-box {
	position: relative;
	margin-top:50px;
	color:black;
}
.main {
	background-color: #1f1f1f;
}
.static {
	float:right;
	color:white;
	margin-right: 120px;

	font-size: 1.5em;
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
<div class="none"></div>

  		<div class="meny">
			<ul background="media.jpg">
				<a href="home.php"><li class="btn-cura">Home</li></a>
				<a href="events.php"><li class="btn-cura">Events</li></a>
				<a href="updates.php"><li class="btn-cura">Updates</li></a>
				<a href="contact.php"><li class="btn-cura">Contact Us</li></a>
				<a href="login.php"><li class="btn-cura">Admin</li></a>
			</ul>
		</div>

		<div class="meny-arrow">Navigation</div>

	  	<div class="main">
	    
<div class="fb-like-box" data-href="https://www.facebook.com/Curaevents" data-colorscheme="dark" data-show-faces="true" data-header="false" data-width="300px" data-stream="true" data-show-border="true"></div>
<div class="fb-like-box" data-href="https://www.facebook.com/Curaevents" data-colorscheme="dark" data-show-faces="true" data-header="false" data-width="300px" data-stream="true" data-show-border="true"></div>
<div class="static">or , contact us directly at 
<br /><br />

<br />Rohan Bhatiyal, 98098098080<br /><br />Prateek Jain, 898978979899</div>


</div>  

      

	<script src="js/meny.min.js"></script>
		<script>
			// Create an instance of Meny
			var meny = Meny.create({
				// The element that will be animated in from off screen
				menuElement: document.querySelector( '.meny' ),

				// The contents that gets pushed aside while Meny is active
				contentsElement: document.querySelector( '.main' ),

				// [optional] The alignment of the menu (top/right/bottom/left)
				position: Meny.getQuery().p || 'left',

				// [optional] The height of the menu (when using top/bottom position)
				height: 200,

				// [optional] The width of the menu (when using left/right position)
				width: 260,

				// [optional] Distance from mouse (in pixels) when menu should open
				threshold: 100,

				// [optional] Use mouse movement to automatically open/close
				mouse: true,

				// [optional] Use touch swipe events to open/close
				touch: true
			});

			// API Methods:
			// meny.open();
			// meny.close();
			// meny.isOpen();

			// Events:
			// meny.addEventListener( 'open', function(){ console.log( 'open' ); } );
			// meny.addEventListener( 'close', function(){ console.log( 'close' ); } );

			// Embed an iframe if a URL is passed in
			if( Meny.getQuery().u && Meny.getQuery().u.match( /^http/gi ) ) {
				var contents = document.querySelector( '.contents' );
				contents.style.padding = '0px';
				contents.innerHTML = '<div class="cover"></div><iframe src="'+ Meny.getQuery().u +'" style="width: 100%; height: 100%; border: 0; position: absolute;"></iframe>';
			}
		</script>
</body>
</html>