<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cura Events | IIIT Hyderabad</title>
    <script type="text/javascript" src="js/jquerymin.js"></script>
    <link rel="stylesheet" href="css/style.css" />
  <link href='css/onepage-scroll.css' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/meny.css" />
<style>
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
<style>
body {
    background-color: #8a8a8a;
}
.contents {

	background-color: #101010;
}
</style>

    <script language="JavaScript" type="text/javascript" src="contentflow.js"></script>
    <script tyle="text/javascript">
        var cf = new ContentFlow('contentFlow', {reflectionColor: "#000000"});
    </script>
</head>
<body>


        <div class="meny">
            <ul>
                <li><img src="">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Updates</a></li>
                <li><a href="#">Admin login</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Demo</a></li>
                <li><a href="#">Responsive Design</a></li>
                <li><a href="#">iPhone and Android</a></li>
            </ul>
        </div>

        <div class="meny-arrow" style="border-top-color:white"></div>
<div class="contents">
    <!-- ===== FLOW ===== -->
    <div id="contentFlow" class="ContentFlow">
        <!-- should be place before flow so that contained images will be loaded first -->
        <div class="loadIndicator"><div class="indicator"></div></div>

        <div class="flow">

            <div class="item">
                <img class="content" src="pics/pic0.png"/>
                <div class="caption">pic0: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic1.png"/>
                <div class="caption">pic1: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic2.png"/>
                <div class="caption">pic2: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic1.png"/>
                <div class="caption">pic1: some stripes</div>
            </div>

            <div class="item">
                <img class="content" src="pics/pic0.png"/>
                <div class="caption">pic0: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic1.png"/>
                <div class="caption">pic1: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic2.png"/>
                <div class="caption">pic2: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic1.png"/>
                <div class="caption">pic1: some stripes</div>
            </div>

            <div class="item">
                <img class="content" src="pics/pic0.png"/>
                <div class="caption">pic0: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic1.png"/>
                <div class="caption">pic1: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic2.png"/>
                <div class="caption">pic2: some stripes</div>
            </div>
            <div class="item">
                <img class="content" src="pics/pic1.png"/>
                <div class="caption">pic1: some stripes</div>
            </div>

        </div>
        <div class="globalCaption"></div>
        <div class="scrollbar">
            <div class="slider"><div class="position"></div></div>
        </div>

    </div>

</div>
<script src="js/meny.min.js"></script>
        <script>
            // Create an instance of Meny
            var meny = Meny.create({
                // The element that will be animated in from off screen
                menuElement: document.querySelector( '.meny' ),

                // The contents that gets pushed aside while Meny is active
                contentsElement: document.querySelector( '.contents' ),

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
