<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>About Me</title>
    <meta name="description" contect="EDIT:PURPOSE OF THIS WEBPAGE">
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/home/css/primary.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/css/hover-min.css" rel="stylesheet" media="all">
    <!-- favicon --><link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
 <!-- Include the header.php file for the top navigation bar -->
 <header role="banner">
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/header.php';  ?>  
  </div>
 </header>
   <!-- BREADCRUMBS -->
  <div class="dumb container">
   <ol style="padding-top:13px" class="crumb">
       <a class="crumbP" href="/"><u>Home</u></a> >> <b class="crumbC">Hover</b>
   </ol>
  </div>
  <!-- END BREADCRUMBS -->
<div>
 <main class="container">
     <h1>Hover - <a href="http://ianlunn.github.io/Hover/">http://ianlunn.github.io/Hover/</a></h1>
   <div class="effects">

            <h2>2D Transitions</h2>

            <a href="#" class="hvr-grow"><button class="btn btn-default">Grow<br>hvr-grow</button></a>
            <a href="#" class="hvr-shrink"><button class="btn btn-default">Shrink<br>hvr-shrink</button></a>
            <a href="#" class="hvr-pulse"><button class="btn btn-default">Pulse<br>hvr-pulse</button></a>
            <a href="#" class="hvr-pulse-grow"><button class="btn btn-default">Pulse Grow<br>hvr-pulse-grow</button></a>
            <a href="#" class="hvr-pulse-shrink"><button class="btn btn-default">Pulse Shrink<br>hvr-pulse-shrink</button></a>
            <a href="#" class="hvr-push"><button class="btn btn-default">Push<br>hvr-push</button></a>
            <a href="#" class="hvr-pop"><button class="btn btn-default">Pop<br>hvr-pop</button></a>
            <a href="#" class="hvr-bounce-in"><button class="btn btn-default">Bounce In<br>hvr-bounce-in</button></a>
            <a href="#" class="hvr-bounce-out"><button class="btn btn-default">Bounce Out<br>hvr-bounce-out</button></a>
            <a href="#" class="hvr-rotate"><button class="btn btn-default">Rotate<br>hvr-rotate</button></a>
            <a href="#" class="hvr-grow-rotate"><button class="btn btn-default">Grow Rotate<br>hvr-grow-rotate</button></a>
            <a href="#" class="hvr-float"><button class="btn btn-default">Float<br>hvr-float</button></a>
            <a href="#" class="hvr-sink"><button class="btn btn-default">Sink<br>hvr-sink</button></a>
            <a href="#" class="hvr-bob"><button class="btn btn-default">Bob<br>hvr-bob</button></a>
            <a href="#" class="hvr-hang"><button class="btn btn-default">Hang<br>hvr-hang</button></a>
            <a href="#" class="hvr-skew"><button class="btn btn-default">Skew<br>hvr-skew</button></a>
            <a href="#" class="hvr-skew-forward"><button class="btn btn-default">Skew Forward<br>hvr-skew-forward</button></a>
            <a href="#" class="hvr-skew-backward"><button class="btn btn-default">Skew Backward<br>hvr-skew-backward</button></a>
            <a href="#" class="hvr-wobble-horizontal"><button class="btn btn-default">Wobble Horizontal<br>hvr-wobble-horizontal</button></a>
            <a href="#" class="hvr-wobble-vertical"><button class="btn btn-default">Wobble Vertical<br>hvr-wobble-vertical</button></a>
            <a href="#" class="hvr-wobble-to-bottom-right"><button class="btn btn-default">Wobble To Bottom Right<br>hvr-wobble-to-bottom-right</button></a>
            <a href="#" class="hvr-wobble-to-top-right"><button class="btn btn-default">Wobble To Top Right<br>hvr-wobble-to-top-right</button></a>
            <a href="#" class="hvr-wobble-top"><button class="btn btn-default">Wobble Top<br>hvr-wobble-top</button></a>
            <a href="#" class="hvr-wobble-bottom"><button class="btn btn-default">Wobble Bottom<br>hvr-wobble-bottom</button></a>
            <a href="#" class="hvr-wobble-skew"><button class="btn btn-default">Wobble Skew<br>hvr-wobble-skew</button></a>
            <a href="#" class="hvr-buzz"><button class="btn btn-default">Buzz<br>hvr-buzz</button></a>
            <a href="#" class="hvr-buzz-out"><button class="btn btn-default">Buzz Out<br>hvr-buzz-out</button></a>


            <h2>Background Transitions</h2>

            <a href="#" class="hvr-fade"><button class="btn btn-default">Fade<br>hvr-fade</button></a>
            <a href="#" class="hvr-back-pulse"><button class="btn btn-default">Back Pulse<br>hvr-back-pulse</button></a>
            <a href="#" class="hvr-sweep-to-right"><button class="btn btn-default">Sweep To Right<br>hvr-sweep-to-right</button></a>
            <a href="#" class="hvr-sweep-to-left"><button class="btn btn-default">Sweep To Left<br>hvr-sweep-to-left</button></a>
            <a href="#" class="hvr-sweep-to-bottom"><button class="btn btn-default">Sweep To Bottom<br>hvr-sweep-to-bottom</button></a>
            <a href="#" class="hvr-sweep-to-top"><button class="btn btn-default">Sweep To Top<br>hvr-sweep-to-top</button></a>
            <a href="#" class="hvr-bounce-to-right"><button class="btn btn-default">Bounce To Right<br>hvr-bounce-to-right</button></a>
            <a href="#" class="hvr-bounce-to-left"><button class="btn btn-default">Bounce To Left<br>hvr-bounce-to-left</button></a>
            <a href="#" class="hvr-bounce-to-bottom"><button class="btn btn-default">Bounce To Bottom<br>hvr-bounce-to-bottom</button></a>
            <a href="#" class="hvr-bounce-to-top"><button class="btn btn-default">Bounce To Top<br>hvr-bounce-to-top</button></a>
            <a href="#" class="hvr-radial-out"><button class="btn btn-default">Radial Out<br>hvr-radial-out</button></a>
            <a href="#" class="hvr-radial-in"><button class="btn btn-default">Radial In<br>hvr-radial-in</button></a>
            <a href="#" class="hvr-rectangle-in"><button class="btn btn-default">Rectangle In<br>hvr-rectangle-in</button></a>
            <a href="#" class="hvr-rectangle-out"><button class="btn btn-default">Rectangle Out<br>hvr-rectangle-out</button></a>
            <a href="#" class="hvr-shutter-in-horizontal"><button class="btn btn-default">Shutter In Horizontal<br>hvr-shutter-in-horizontal</button></a>
            <a href="#" class="hvr-shutter-out-horizontal"><button class="btn btn-default">Shutter Out Horizontal<br>hvr-shutter-out-horizontal</button></a>
            <a href="#" class="hvr-shutter-in-vertical"><button class="btn btn-default">Shutter In Vertical<br>hvr-shutter-in-vertical</button></a>
            <a href="#" class="hvr-shutter-out-vertical"><button class="btn btn-default">Shutter Out Vertical<br>hvr-shutter-out-vertical</button></a>


            <h2>Icons</h2>

            <a href="#" class="hvr-icon-back"><button class="btn btn-default">Icon Back<br>hvr-icon-back</button></a>
            <a href="#" class="hvr-icon-forward"><button class="btn btn-default">Icon Forward<br>hvr-icon-forward</button></a>
            <a href="#" class="hvr-icon-down"><button class="btn btn-default">Icon Down<br>hvr-icon-down</button></a>
            <a href="#" class="hvr-icon-up"><button class="btn btn-default">Icon Up<br>hvr-icon-up</button></a>
            <a href="#" class="hvr-icon-spin"><button class="btn btn-default">Icon Spin<br>hvr-icon-spin</button></a>
            <a href="#" class="hvr-icon-drop"><button class="btn btn-default">Icon Drop<br>hvr-icon-drop</button></a>
            <a href="#" class="hvr-icon-fade"><button class="btn btn-default">Icon Fade<br>hvr-icon-fade</button></a>
            <a href="#" class="hvr-icon-float-away"><button class="btn btn-default">Icon Float Away<br>hvr-icon-float-away</button></a>
            <a href="#" class="hvr-icon-sink-away"><button class="btn btn-default">Icon Sink Away<br>hvr-icon-sink-away</button></a>
            <a href="#" class="hvr-icon-grow"><button class="btn btn-default">Icon Grow<br>hvr-icon-grow</button></a>
            <a href="#" class="hvr-icon-shrink"><button class="btn btn-default">Icon Shrink<br>hvr-icon-shrink</button></a>
            <a href="#" class="hvr-icon-pulse"><button class="btn btn-default">Icon Pulse<br>hvr-icon-pulse</button></a>
            <a href="#" class="hvr-icon-pulse-grow"><button class="btn btn-default">Icon Pulse Grow<br>hvr-icon-pulse-grow</button></a>
            <a href="#" class="hvr-icon-pulse-shrink"><button class="btn btn-default">Icon Pulse Shrink<br>hvr-icon-pulse-shrink</button></a>
            <a href="#" class="hvr-icon-push"><button class="btn btn-default">Icon Push<br>hvr-icon-push</button></a>
            <a href="#" class="hvr-icon-pop"><button class="btn btn-default">Icon Pop<br>hvr-icon-pop</button></a>
            <a href="#" class="hvr-icon-bounce"><button class="btn btn-default">Icon Bounce<br>hvr-icon-bounce</button></a>
            <a href="#" class="hvr-icon-rotate"><button class="btn btn-default">Icon Rotate<br>hvr-icon-rotate</button></a>
            <a href="#" class="hvr-icon-grow-rotate"><button class="btn btn-default">Icon Grow Rotate<br>hvr-icon-grow-rotate</button></a>
            <a href="#" class="hvr-icon-float"><button class="btn btn-default">Icon Float<br>hvr-icon-float</button></a>
            <a href="#" class="hvr-icon-sink"><button class="btn btn-default">Icon Sink<br>hvr-icon-sink</button></a>
            <a href="#" class="hvr-icon-bob"><button class="btn btn-default">Icon Bob<br>hvr-icon-bob</button></a>
            <a href="#" class="hvr-icon-hang"><button class="btn btn-default">Icon Hang<br>hvr-icon-hang</button></a>
            <a href="#" class="hvr-icon-wobble-horizontal"><button class="btn btn-default">Icon Wobble Horizontal<br>hvr-icon-wobble-horizontal</button></a>
            <a href="#" class="hvr-icon-wobble-vertical"><button class="btn btn-default">Icon Wobble Vertical<br>hvr-icon-wobble-vertical</button></a>
            <a href="#" class="hvr-icon-buzz"><button class="btn btn-default">Icon Buzz<br>hvr-icon-buzz</button></a>
            <a href="#" class="hvr-icon-buzz-out"><button class="btn btn-default">Icon Buzz Out<br>hvr-icon-buzz-out</button></a>

            <h2>Border Transitions</h2>

            <a href="#" class="hvr-border-fade"><button class="btn btn-default">Border Fade<br>hvr-border-fade</button></a>
            <a href="#" class="hvr-hollow"><button class="btn btn-default">Hollow<br>hvr-hollow</button></a>
            <a href="#" class="hvr-trim"><button class="btn btn-default">Trim<br>hvr-trim</button></a>
            <a href="#" class="hvr-ripple-out"><button class="btn btn-default">Ripple Out<br>hvr-ripple-out</button></a>
            <a href="#" class="hvr-ripple-in"><button class="btn btn-default">Ripple In<br>hvr-ripple-in</button></a>
            <a href="#" class="hvr-outline-out"><button class="btn btn-default">Outline Out<br>hvr-outline-out</button></a>
            <a href="#" class="hvr-outline-in"><button class="btn btn-default">Outline In<br>hvr-outline-in</button></a>
            <a href="#" class="hvr-round-corners"><button class="btn btn-default">Round Corners<br>hvr-round-corners</button></a>
            <a href="#" class="hvr-underline-from-left"><button class="btn btn-default">Underline From Left<br>hvr-underline-from-left</button></a>
            <a href="#" class="hvr-underline-from-center"><button class="btn btn-default">Underline From Center<br>hvr-underline-from-center</button></a>
            <a href="#" class="hvr-underline-from-right"><button class="btn btn-default">Underline From Right<br>hvr-underline-from-right</button></a>
            <a href="#" class="hvr-reveal"><button class="btn btn-default">Reveal<br>hvr-reveal</button></a>
            <a href="#" class="hvr-underline-reveal"><button class="btn btn-default">Underline Reveal<br>hvr-underline-reveal</button></a>
            <a href="#" class="hvr-overline-reveal"><button class="btn btn-default">Overline Reveal<br>hvr-overline-reveal</button></a>
            <a href="#" class="hvr-overline-from-left"><button class="btn btn-default">Overline From Left<br>hvr-overline-from-left</button></a>
            <a href="#" class="hvr-overline-from-center"><button class="btn btn-default">Overline From Center<br>hvr-overline-from-center</button></a>
            <a href="#" class="hvr-overline-from-right"><button class="btn btn-default">Overline From Right<br>hvr-overline-from-right</button></a>

            <h2>Shadow and Glow Transitions</h2>

            <a href="#" class="hvr-shadow"><button class="btn btn-default">Shadow<br>hvr-shadow</button></a>
            <a href="#" class="hvr-grow-shadow"><button class="btn btn-default">Grow Shadow<br>hvr-grow-shadow</button></a>
            <a href="#" class="hvr-float-shadow"><button class="btn btn-default">Float Shadow<br>hvr-float-shadow</button></a>
            <a href="#" class="hvr-glow"><button class="btn btn-default">Glow<br>hvr-glow</button></a>
            <a href="#" class="hvr-shadow-radial"><button class="btn btn-default">Shadow Radial<br>hvr-shadow-radial</button></a>
            <a href="#" class="hvr-box-shadow-outset"><button class="btn btn-default">Box Shadow Outset<br>hvr-box-shadow-outset</button></a>
            <a href="#" class="hvr-box-shadow-inset"><button class="btn btn-default">Box Shadow Inset<br>hvr-box-shadow-inset</button></a>

            <h2>Speech Bubbles</h2>

            <a href="#" class="hvr-bubble-top"><button class="btn btn-default">Bubble Top<br>hvr-bubble-top</button></a>
            <a href="#" class="hvr-bubble-right"><button class="btn btn-default">Bubble Right<br>hvr-bubble-right</button></a>
            <a href="#" class="hvr-bubble-bottom"><button class="btn btn-default">Bubble Bottom<br>hvr-bubble-bottom</button></a>
            <a href="#" class="hvr-bubble-left"><button class="btn btn-default">Bubble Left<br>hvr-bubble-left</button></a>
            <a href="#" class="hvr-bubble-float-top"><button class="btn btn-default">Bubble Float Top<br>hvr-bubble-float-top</button></a>
            <a href="#" class="hvr-bubble-float-right"><button class="btn btn-default">Bubble Float Right<br>hvr-bubble-float-right</button></a>
            <a href="#" class="hvr-bubble-float-bottom"><button class="btn btn-default">Bubble Float Bottom<br>hvr-bubble-float-bottom</button></a>
            <a href="#" class="hvr-bubble-float-left"><button class="btn btn-default">Bubble Float Left<br>hvr-bubble-float-left</button></a>

            <h2>Curls</h2>

            <a href="#" class="hvr-curl-top-left"><button class="btn btn-default">Curl Top Left<br>hvr-curl-top-left</button></a>
            <a href="#" class="hvr-curl-top-right"><button class="btn btn-default">Curl Top Right<br>hvr-curl-top-right</button></a>
            <a href="#" class="hvr-curl-bottom-right"><button class="btn btn-default">Curl Bottom Right<br>hvr-curl-bottom-right</button></a>
            <a href="#" class="hvr-curl-bottom-left"><button class="btn btn-default">Curl Bottom Left<br>hvr-curl-bottom-left</button></a>
    </div>
 </main>
</div>

 <footer role="contentinfo">
 <!-- Include the footer.php file for the top navigation bar -->
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/footer.php';  ?>
  </div>
 <!-- display on the website when this page was updated last -->
   <h6 style="float: right"><?php  echo 'Webpage last updated: '.date('j F, Y', getlastmod()); ?></h6>
 </footer>
</body>
</html>