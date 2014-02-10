<!doctype html>  
<html lang="en">
	
	<head>
		<style>
			header {
				margin-bottom: 0;
			}
			.fan {
				position: relative;
				width: 90%;
				margin: 0 auto;
				opacity:0.7;
				height: screen.width();
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
		}
		#contentFlow {
			max-width: 60%;
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
		.meny ul {
			width: 2000px;
		}
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
				background-color: rgba(0,0,0,0.7);
			}
			.fan li:nth-child(even)
			{
				color:black;
				background-color: rgba(255,255,255,0.7);
			}
.meny {
	  background: url('media.jpg');

}
.main {
	background: url('media.jpg');
}
		</style>
	</head>
	
	<body>

<div class="none"></div>

  		<div class="meny" id="meny">
			<ul background="img/media.jpg">
				<li class="btn-cura"><a href="#">Home</a></li>
				<li class="btn-cura"><a href="#">Events</a></li>
				<li class="btn-cura"><a href="updates.php">Updates</a></li>
				<li class="btn-cura"><a href="login.php">Admin login</a></li>
				<li class="btn-cura"><a href="#">Contact us</a></li>
				<li class="btn-cura"><a href="#">Demo</a></li>
				<li class="btn-cura"><a href="#">Responsive Design</a></li>
				<li class="btn-cura"><a href="#">iPhone and Android</a></li>
			</ul>
		</div>

		<div class="meny-arrow"></div>


<div class="main">
		<ul class="fan" id="scroll"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li>Thirteen</li><li>Fourteen</li><li>Fifteen</li><li>Sixteen</li><li>Seventeen</li><li>Eighteen</li><li>Nineteen</li><li>Twenty</li><li>Twentyone</li><li>Twentytwo</li><li>Twentythree</li><li>Twentyfour</li><li>Twentyfive</li><li>Twentysize</li><li>Twentyseven</li><li>Twentyeight</li><li>Twentynine</li><li>Thirty</li><li>Thirtyone</li><li>Thirtytwo</li><li>Thirtythree</li><li>Thirtyfour</li><li>Thirtyfive</li><li>Thirtysize</li><li>Thirtyseven</li><li>Thirtyeight</li><li>Thirtynine</li><li>Forty</li><li>Fortyone</li><li>Fortytwo</li><li>Fortythree</li><li>Fortyfour</li><li>Fortyfive</li><li>Fortysix</li><li>Fortyseven</li><li>Fortyeight</li><li>Fortynine</li><li>Fifty</li><li>Fiftyone</li><li>Fiftytwo</li><li>Fiftythree</li><li>Fiftyfour</li><li>Fiftyfive</li><li>Fiftysix</li><li>Fiftyseven</li><li>Fiftyeight</li><li>Fiftynine</li><li>Sixty</li><li>Sixtyone</li><li>Sixtytwo</li><li>Sixtythree</li><li>Sixtyfour</li><li>Sixtyfive</li><li>Sixtysix</li><li>Sixtyseven</li><li>Sixtyeight</li><li>Sixtynine</li><li>Seventy</li><li>Seventyone</li><li>Seventytwo</li><li>Seventythree</li><li>Seventyfour</li><li>Seventyfive</li><li>Seventysix</li><li>Seventyseven</li><li>Seventyeight</li><li>Seventynine</li><li>Eighty</li><li>Eightyone</li><li>Eightytwo</li><li>Eightythree</li><li>Eightyfour</li><li>Eightyfive</li><li>Eightysix</li><li>Eightyseven</li><li>Eightyeight</li><li>Eightynine</li><li>Ninety</li><li>Ninetyone</li><li>Ninetytwo</li><li>Ninetythree</li><li>Ninetyfour</li><li>Ninetyfive</li><li>Ninetysix</li><li>Ninetyseven</li><li>Ninetyeight</li><li>Ninetynine</li></ul>
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
				position: Meny.getQuery().p || 'top',

				// [optional] The height of the menu (when using top/bottom position)
				height: 200,

				// [optional] The width of the menu (when using left/right position)
				width: 260,

				// [optional] Distance from mouse (in pixels) when menu should open
				threshold: 40,

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