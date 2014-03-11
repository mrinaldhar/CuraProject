<!doctype html>  
<html lang="en">
	
	<head>

		<script src="js/jquerymin.js"></script>
		<style>
		@font-face{
  src: url('font/font2.woff');
  font-family: myfont;
}
			header {
				margin-bottom: 0;
			}
			.fan {
				position: relative;
				width: 90%;
				margin: 0 auto;
				opacity:0.7;
				height: screen.height();
				padding-top: 10%;
				padding-bottom: 10%;
			}
			.fan li {
				position: relative;
				width: 50%;
				margin: 0 auto;
				margin-top:50px;
				margin-bottom:50px;
				padding: 80px;
				border-radius: 5px;
				box-shadow: 0px 0px 10px black;

			}
			.fan ul {
				position: relative;
				width: 230px;
				height: 480px;
				margin: 0;
				padding: 0;
				overflow-x: hidden;
				overflow-y: scroll;
				list-style: none;

				-webkit-perspective: 400px;
				   -moz-perspective: 400px;
			    	-ms-perspective: 400px;
	    			 -o-perspective: 400px;
	        			perspective: 400px;
			}
			
			/*solotion to meny scroll conflict*/
			ul {
				position: relative;
				width: 230px;
				height: 480px;
				overflow-x: hidden;
				color: #252525;
			}
			
			/*set up stroll here and counteract it for meny below*/

			.fan ul li {
				position: relative;
				padding: 16px;
				background: #eee;
				color: #252525;
				font-size: 18px;
				z-index: 2;

				-webkit-transform: translateZ(0px);
		   		-moz-transform: translateZ(0px);
		    		-ms-transform: translateZ(0px);
		    		 -o-transform: translateZ(0px);
		        		transform: translateZ(0px);
			}
			
		</style>

		<style type="text/css">
		body {
			background-color: #8a8a8a;
			font-family: myfont;
		}
		#contentFlow {
			max-width: 60%;
		}
		.posthead {
			text-align: center;
			font-weight: 700;
		}
		.btn-cura {
			border-radius: 10px;
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
			color:#aaaaaa;b
		}
		ul {
			list-style-image: none;
		}
		.meny {
 	  background: url('media.jpg');
		}

		/*workaround for meny*/
		/*.meny ul {
			width: 2000px;
		}*/
		/*till here*/
		</style>

		<link rel="stylesheet" href="css/stroll.css">
		<link rel="stylesheet" type="text/css" href="css/meny.css">
		<style type="text/css">
			body {
				/*background: url('media.jpg')*/
				/*background-color: rgb(230, 217, 200);*/
				background-color: #1a1a1a;
			}
			.meny {
				overflow: hidden;
			}
			.fan {
				list-style-type: none;
			}
			.fan li:nth-child(odd)
			{
				color:white;
				background-color: rgba(0,0,0,0.99);
			}
			.fan li:nth-child(even)
			{
				color:black;
				background-color: rgba(255,255,255,0.99);
			}
.meny {
	  background: url('media.jpg');

}
.meny-arrow{
	color:white;
	background-color: transparent;
	border-color:transparent;
	font-family: myfont;
}
.main {
	background: url('img/updates_back.png') bottom repeat;
}
li {
	box-shadow: 0px 0px 20px black;
	font-family: myfont;
}
		</style>
	</head>
	
	<body>

<div class="none"></div>

  		<div class="meny" id="meny">
<ul background="media.jpg">
				<a href="index.php"><li class="btn-cura">Home</li></a>
				<a href="home.php"><li class="btn-cura">Events</li></a>
				<a href="updates.php"><li class="btn-cura">Updates</li></a>
				<a href="contact.php"><li class="btn-cura">Contact Us</li></a>
				<a href="login.php"><li class="btn-cura">Admin</li></a>
			</ul>
		</div>

		<div class="meny-arrow">Navigation</div>


<div class="main">
		<ul class="fan" id="scroll"><li>This section will load data from database.</li></ul>
</div>
		<script src="js/stroll.min.js"></script>
		<script>
				stroll.bind( '#scroll' );

		</script>
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
		<script>
		function loadupdates() {

		  $.ajax({
        method:'get',
        url:'getupdates.php',
        success:function(data){
           	document.getElementById('scroll').innerHTML = data;
		
        }
      });
		}
$(document).ready(function() {
	loadupdates();
		 setInterval(loadupdates, 3000);
});
		 </script>
	</body>
</html>