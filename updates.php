<!doctype html>  
<html lang="en">
	
	<head>
	
		<link rel="stylesheet" href="css/example.css">
		<link rel="stylesheet" href="css/stroll.css">

		<style>
			body {
				overflow: hidden;
			}
			header {
				margin-bottom: 0;
			}
			.fly {
				position: relative;
				width: 70%;
				margin: 0 auto;
			}
			.fly li {
				position: relative;
				width: 50%;

				margin: 0 auto;
				margin-top:50px;
				margin-bottom:50px;
				padding: 80px;
			}
		</style>
	</head>
	
	<body>
<div class="main"></div>
		<ul class="fly"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li>Thirteen</li><li>Fourteen</li><li>Fifteen</li><li>Sixteen</li><li>Seventeen</li><li>Eighteen</li><li>Nineteen</li><li>Twenty</li><li>Twentyone</li><li>Twentytwo</li><li>Twentythree</li><li>Twentyfour</li><li>Twentyfive</li><li>Twentysize</li><li>Twentyseven</li><li>Twentyeight</li><li>Twentynine</li><li>Thirty</li><li>Thirtyone</li><li>Thirtytwo</li><li>Thirtythree</li><li>Thirtyfour</li><li>Thirtyfive</li><li>Thirtysize</li><li>Thirtyseven</li><li>Thirtyeight</li><li>Thirtynine</li><li>Forty</li><li>Fortyone</li><li>Fortytwo</li><li>Fortythree</li><li>Fortyfour</li><li>Fortyfive</li><li>Fortysix</li><li>Fortyseven</li><li>Fortyeight</li><li>Fortynine</li><li>Fifty</li><li>Fiftyone</li><li>Fiftytwo</li><li>Fiftythree</li><li>Fiftyfour</li><li>Fiftyfive</li><li>Fiftysix</li><li>Fiftyseven</li><li>Fiftyeight</li><li>Fiftynine</li><li>Sixty</li><li>Sixtyone</li><li>Sixtytwo</li><li>Sixtythree</li><li>Sixtyfour</li><li>Sixtyfive</li><li>Sixtysix</li><li>Sixtyseven</li><li>Sixtyeight</li><li>Sixtynine</li><li>Seventy</li><li>Seventyone</li><li>Seventytwo</li><li>Seventythree</li><li>Seventyfour</li><li>Seventyfive</li><li>Seventysix</li><li>Seventyseven</li><li>Seventyeight</li><li>Seventynine</li><li>Eighty</li><li>Eightyone</li><li>Eightytwo</li><li>Eightythree</li><li>Eightyfour</li><li>Eightyfive</li><li>Eightysix</li><li>Eightyseven</li><li>Eightyeight</li><li>Eightynine</li><li>Ninety</li><li>Ninetyone</li><li>Ninetytwo</li><li>Ninetythree</li><li>Ninetyfour</li><li>Ninetyfive</li><li>Ninetysix</li><li>Ninetyseven</li><li>Ninetyeight</li><li>Ninetynine</li></ul>

		<script src="js/stroll.min.js"></script>
		<script>
			var list = document.querySelector( 'ul' );
			var type = window.location.search.slice( 1 ) || 'fly';

			list.className = type;
			
			window.addEventListener( 'resize', updateHeight, false );

			updateHeight();

			function updateHeight() {
				list.style.height = window.innerHeight + 'px';
				stroll.bind( 'ul' );
			}
		</script>
		<?php
		require_once('meny.php');
		?>
	</body>
</html>